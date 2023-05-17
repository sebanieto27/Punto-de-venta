<?php

namespace App\Http\Controllers;

use App\Models\PedidosEstados;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class PedidosEstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function pedidoPendiente (Order $Order)
    {

        $Order->status = "Pendiente";
        $Order->save();

        return  redirect()->route('pedidos');
    }

    public function pedidoEntregada (Order $Order)
    {

        $Order->status = "Entregada";
        $Order->save();

        return  redirect()->route('pedidos');
    }

    public function pedidoCerrada (Order $Order)
    {

        $Order->status = "Cerrada";
        $Order->save();

        return  redirect()->route('pedidos');
    }

    public function pedidoCancelada (Order $Order)
    {

        $Order->status = "Cancelada";
        $Order->save();

        return  redirect()->route('pedidos');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PedidosEstados  $pedidosEstados
     * @return \Illuminate\Http\Response
     */
    public function show(PedidosEstados $pedidosEstados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PedidosEstados  $pedidosEstados
     * @return \Illuminate\Http\Response
     */
    public function edit(PedidosEstados $pedidosEstados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PedidosEstados  $pedidosEstados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidosEstados $pedidosEstados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PedidosEstados  $pedidosEstados
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidosEstados $pedidosEstados)
    {
        //
    }
}
