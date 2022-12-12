<?php

namespace App\Http\Controllers;

use App\Models\Clothe;
use App\Models\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collections= Collection::withTrashed()->get();
        return view('home.index',['collections'=>$collections]);
    }

    public function envios()
    {
        return view('politicas.envios');
    }

    public function cookies()
    {
        return view('politicas.cookies');
    }

    public function contacto()
    {
        return view('politicas.contacto');
    }

    public function condicionesDeVenta()
    {
        return view('politicas.condicionesDeVenta');
    }

    public function avisoLegal()
    {
        return view('politicas.avisoLegal');
    }

    public function politicaDePrivacidad()
    {
        return view('politicas.politicaDePrivacidad');
    }

    public function tallas()
    {
        return view('politicas.tallas');
    }

    public function recomendacionesDeCuidado()
    {
        return view('politicas.recomendacionesDeCuidado');
    }

    public function cuenta()
    {
        return view('user.cuenta');
    }

    public function detallesPersonales()
    {
        return view('user.detallesPersonales');
    }

    public function coleccion($collection_name)
    {

        $collection = Collection::where('collection_name',$collection_name)->withTrashed()->first();
        $clothes = Clothe::where('collection_id', $collection->id)->withTrashed()->get();
        return view('design.coleccion.coleccion',['clothes'=>$clothes,'collection_name'=>$collection_name]);
    }
}
