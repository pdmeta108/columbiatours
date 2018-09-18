<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use App\Categoria;
use App\Destino;
use App\Promocion;
use App\Banco;
use App\Proveedor;
use App\Imagen;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PaqueteFormRequest;
use App\Http\Requests\BuscadorFormRequest;
use DB;

class PaquetesController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $paquetes=DB::table('paquetes')->where('titulo','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('admin.paquetes.index',["paquetes"=>$paquetes,"searchText"=>$query]);
        }
    }


public function create()
    {
        $categorias=Categoria::all();
        $destinos=Destino::all();
        return view("admin.paquetes.create",["categorias"=>$categorias,"destinos"=>$destinos]);
    }

    public function store (PaqueteFormRequest $request)

    {

        $destinos=Destino::all();
        $categorias=Categoria::all();
        $promociones=Promocion::all();
        $bancos=Banco::all();
        $proveedores=Proveedor::all();
        $paquete = Paquete::create(['titulo' => $request->get('titulo')]);



        return view("admin.paquetes.edit",["paquete"=>$paquete,"destinos"=>$destinos,"categorias"=>$categorias,"promociones"=>$promociones,"bancos"=>$bancos,"proveedores"=>$proveedores]);
    }

    public function show($id)
    {
        return view("admin.paquetes.show",["paquete"=>Paquete::findOrFail($id)]);
    }

    public function edit($id)
    {

      /* este edit lo utiliza solo cuando entra por el boton edit del index */

        $paquete=Paquete::findOrFail($id);
        $destinos=Destino::all();
        $categorias=Categoria::all();
        $promociones=Promocion::all();
        $bancos=Banco::all();
        $proveedores=Proveedor::all();

        /* $destinos = Destino::where('id', '=', $paquete->destino_id)->first(); */


        return view("admin.paquetes.edit",["paquete"=>$paquete,"destinos"=>$destinos,"categorias"=>$categorias,"promociones"=>$promociones,"bancos"=>$bancos,"proveedores"=>$proveedores]);



    }

    public function update(PaqueteFormRequest $request,$id)
    {

    /* $file = $request->file('file2');
    $fileName = uniqid() . $file->getClientOriginalName();
    $path = $file->storeAs('paquetes', $fileName); */
    $paquete=Paquete::findOrFail($id);
$path = DB::table('imagenes')->where('paquete_id','=',$id)->orderby('created_at','DESC')->take(1)->first();
    $path2= $path->url;

        $paquete->titulo=$request->get('titulo');
        $paquete->descripcion=$request->get('descripcion');
        $paquete->categoria_id=$request->get('categoria');
        $paquete->destino_id=$request->get('destino');
        $paquete->incluye=$request->get('incluye');
        $paquete->itinerario=$request->get('itinerario');
        $paquete->terminos=$request->get('terminos');
        $paquete->precios=$request->get('precios');
        $paquete->dias=$request->get('dias');
        $paquete->promocion_id=$request->get('promocion');
        $paquete->banco_id=$request->get('banco');
        $paquete->proveedor_id=$request->get('proveedor');
        $paquete->destacado = $request->get('destacado');
        $paquete->imagen_url = $path2;
        $paquete->update();
        return Redirect::to('admin/paquetes');

    }

    public function destroy($id)
    {
        $paquete=Paquete::findOrFail($id);

        $paquete->delete();
        return Redirect::to('admin/paquetes');
    }


/* envia los parametros que se usaran en el home */

    public function mostrar()

    {

        // $destinos=Destino::all();
        $categorias=Categoria::all();
        $paquetes = DB::table('paquetes')->where('categoria_id', '1')->get();
        $destacados= DB::table('paquetes')->where('destacado', '1')->get();

        return view('home',["paquetes"=>$paquetes,"destacados"=>$destacados,"categorias"=>$categorias]);



    }

    // public function suscripcion()
    //
    // {
    //     $destinos=Destino::all();
    //     return view('partials.suscripcion',["destinos"=>$destinos]);
    // }

public function indexpaquetes()

    {


$paquetes = Paquete::all();
$destacados= DB::table('paquetes')->where('destacado', '1')->get();
        return view("paquetes",["paquetes"=>$paquetes,"destacados"=>$destacados]);
}

public function destinos(Request $request)

    {



        if ($request)
        {

            $query=trim($request->get('tourdestino'));
    $paquetes=DB::table('paquetes')->where('categoria_id','=',$query)->get();


  } else {


 echo 'no hay paquetes';


 }

$destacados= DB::table('paquetes')->where('destacado', '1')->get();
        return view("paquetes",["paquetes"=>$paquetes,"destacados"=>$destacados]);
}

    public function paquetes($id)

    {



  $paquetes= DB::table('paquetes')->where('categoria_id', '=',$id)->get();


 $destacados= DB::table('paquetes')->where('destacado', '1')->get();

        return view("paquetes",["paquetes"=>$paquetes,"destacados"=>$destacados]);
}

     public function promociones() /* todas las promociones */

    {
        $promociones= DB::table('paquetes')->where('promocion_id', '<>', null)->get();
        $destacados= DB::table('paquetes')->where('destacado', '1')->get();


        return view("promociones",["promociones"=>$promociones,"destacados"=>$destacados]);
}

public function promocategoria($id) /* promociones por categoria */

    {

        $promociones= DB::table('paquetes')->where('promocion_id','=',$id)->get();
        $destacados= DB::table('paquetes')->where('destacado', '1')->get();


        return view("promociones",["promociones"=>$promociones,"destacados"=>$destacados]);
}

public function bancos() /* pagina de logo de los bancos */

    {
        $bancos=Banco::all();


        return view("bancos-logos",["bancos"=>$bancos]);
}

public function bancospaquetes($id) /* promociones por categoria bancaria */

    {

$promociones= DB::table('paquetes')->where('banco_id','=',$id)->get();
$destacados= DB::table('paquetes')->where('destacado', '1')->get();

        return view("promociones",["promociones"=>$promociones,"destacados"=>$destacados]);
}

public function paquetedetalle($id)

    {

 $paquetes=Paquete::findOrFail($id);

 $categoria = $paquetes->categoria_id;
 $categorias = DB::table('categorias')->where('id','=',$categoria)->first();
 $imagenes = DB::table('imagenes')->where('paquete_id','=',$id)->get();
 $destacados= DB::table('paquetes')->where('destacado', '=' ,1)->take(2)->get();
 echo $categoria;

if ($categoria <> 1){

     return view("detalle",["paquetes"=>$paquetes,"imagenes"=>$imagenes,"destacados"=>$destacados,"categorias"=>$categorias]);

} else {

return view("detalle-grupales",["paquetes"=>$paquetes,"imagenes"=>$imagenes,"destacados"=>$destacados,"categorias"=>$categorias]);

        }

}

/* vistas internas normales */

public function circuitos()

    {

// $destinos=Destino::all();
        return view("circuitos_asia-europa-oriente");
}

public function cruceros()

    {

$cruceros=Proveedor::all();

        return view("cruceros",["cruceros"=>$cruceros]);
}

public function crucerospaquetes($id)

    {

$promociones= DB::table('paquetes')->where('proveedor_id','=',$id)->get();
$destacados= DB::table('paquetes')->where('destacado', '1')->get();

        return view("promociones",["promociones"=>$promociones,"destacados"=>$destacados]);


}

public function vuelos()

    {


        return view("vuelos");
}

public function trenes()

    {


        return view("trenes");
}

public function autos()

    {

     $paquetes= DB::table('paquetes')->where('proveedor_id','=',8)->get();

        return view("autos",["paquetes"=>$paquetes]);
}

public function seguros()

    {


        return view("seguros");
}

public function contacto()

    {


        return view("contacto");
}

/* descarga de paquetes en pdf */

public function downloadFile($file){
      $pathtoFile = public_path().'/archivos/'.$file;
      return response()->download($pathtoFile);
    }




}
