<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

use DB;

class ImagenController extends Controller
{
    
public function index(Request $request)
    {
        
    }


public function create()
    {


    }

    public function store(Request $request,$id)

    {

    $file = $request->file('file');

    $path = $file->store('paquetes');

    $fileName = uniqid() . $file->getClientOriginalName();

    /* $file->move($path, $fileName); */

    $imagen = new Imagen();
    
    $imagen->paquete_id = $id;
    $imagen->file_name = $fileName;
    $imagen->url = $path;
    $imagen->save();

    return 'imagen guardada';

    
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
