<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentasController extends Controller
{
    public function index(){
        $listaVentas = Venta::all();

        return view('venta.index',compact('listaVentas'));
    }

    public function create(){
        return view ('venta.create');
    }

    public function store(Request $request){
        $nuevaVenta = new Venta();

        $nuevaVenta->producto = $request->producto;
        $nuevaVenta->cantidad = $request->cantidad;
        $nuevaVenta->precio = $request->precio;
        $nuevaVenta->total = $request->total;

        $nuevaVenta->save();

        return redirect()->route('venta.index');
    }
}
