<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use Illuminate\Support\Facades\Redirect;

use DB;

class ImagenController extends Controller
{
    
public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $imagenes=DB::table('imagenes')->where('file_name','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('admin.imagenes.index',["imagenes"=>$imagenes,"searchText"=>$query]);
        }
    }


public function create()
    {
        
    }
    public function store (Request $request)
    {
       
      $file = $request->file('file');
    $path = public_path() . '/uploads';
    $fileName = uniqid() . $file->getClientOriginalName();

    $file->move($path, $fileName);

    

    return 'tu imagen fue subida con exito';
        
        }

    public function show($id)
    {
        
    }
    public function edit($id)
    {
        
    }
    public function update(Request $request,$id)
    {
        
    }

    public function destroy($id)
    {
        
    }

}
