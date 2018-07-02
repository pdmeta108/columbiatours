<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $categorias=DB::table('categorias')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('admin.categorias.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }


public function create()
    {
        return view("admin.categorias.create");
    }
    public function store (CategoriaFormRequest $request)
    {
        $categoria= new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->save();
        return Redirect::to('admin/categorias');
    }

    public function show($id)
    {
        return view("admin.categorias.show",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("admin.categorias.edit",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request,$id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->nombre=$request->get('nombre');
        
        $categoria->update();
        return Redirect::to('admin/categorias');
    }

    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        
        $categoria->delete();
        return Redirect::to('admin/categorias');
    }
}
