<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascotas;

class EjemploController extends Controller
{
    public function index()
    {
        $mascotas=Mascotas::all();
        $dato=10;
        return view('ejemplo')->with('mascotas',$mascotas);
    }

    public function store(Request $req)
    {
        if(!is_null($req->id))
        $mascota=Mascotas::find($req->id);
        else
        $mascota=new Mascotas();

        $mascota->nombre=$req->nombre;
        $mascota->save();
        return redirect('/ejemplo');
    }

    public function elimina($id)
    {
        $mascota=Mascotas::find($id);
        $mascota->delete();
        return redirect('/ejemplo');
    }

    public function muestraDetalle($id)
    {
        $mascota=Mascotas::find($id);
        return view('edita')->with('mascota',$mascota);
    }


    public function actualiza(Request $req)
    {
        $mascota=Mascotas::find($req->id);
        $mascota->nombre=$req->nombre;
        $mascota->save();
        return redirect('/ejemplo');
    }
}
