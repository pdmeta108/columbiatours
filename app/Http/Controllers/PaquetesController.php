<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PaqueteFormRequest;
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
        $paquetes=Paquete::all();  
        return view("admin.paquetes.create",["paquetes"=>$paquetes]);
    }
    public function store (PaqueteFormRequest $request)
    {
        $paquete=new Paquete;
        $paquete->titulo=$request->get('titulo');
        $paquete->descripcion=$request->get('descripcion');
        $paquete->categoria_id=$request->get('categoria');
        $paquete->save();
        return Redirect::to('admin/paquetes/index');
    }

    public function show($id)
    {
        return view("admin.paquetes.show",["paquete"=>Paquete::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("admin.paquetes.edit",["paquete"=>Paquete::findOrFail($id)]);
    }
    public function update(PaqueteFormRequest $request,$id)
    {
        $paquete=Paquete::findOrFail($id);
        $paquete->titulo=$request->get('titulo');
        $paquete->descripcion=$request->get('descripcion');
        $paquete->update();
        return Redirect::to('admin/paquetes/index');
    }

    public function destroy($id)
    {
        $paquete=Paquete::findOrFail($id);
        
        $paquete->delete();
        return Redirect::to('admin/paquetes/index');
    }



}

