<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destino;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DestinoFormRequest;
use DB;

class DestinosController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $destinos=DB::table('destinos')->where('destino','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('admin.destinos.index',["destinos"=>$destinos,"searchText"=>$query]);
        }
    }


public function create()
    {
        return view("admin.destinos.create");
    }
    public function store (DestinoFormRequest $request)
    {
        $destino= new Destino;
        $destino->destino=$request->get('destino');
        $destino->save();
        return Redirect::to('admin/destinos');
    }

    public function show($id)
    {
        return view("admin.destinos.show",["destino"=>Destino::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("admin.destinos.edit",["destino"=>Destino::findOrFail($id)]);
    }
    public function update(destinoFormRequest $request,$id)
    {
        $destino=Destino::findOrFail($id);
        $destino->destino=$request->get('destino');
        
        $destino->update();
        return Redirect::to('admin/destinos');
    }

    public function destroy($id)
    {
        $destino=Destino::findOrFail($id);
        
        $destino->delete();
        return Redirect::to('admin/destinos');
    }
}
