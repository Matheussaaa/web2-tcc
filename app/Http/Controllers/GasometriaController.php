<?php

namespace App\Http\Controllers;

use App\Models\Gasometria;
use App\Http\Requests\StoreGasometriaRequest;
use App\Http\Requests\UpdateGasometriaRequest;

class GasometriaController extends Controller
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
     * @param  \App\Http\Requests\StoreGasometriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGasometriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gasometria  $gasometria
     * @return \Illuminate\Http\Response
     */
    public function show(Gasometria $gasometria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gasometria  $gasometria
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasometria $gasometria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGasometriaRequest  $request
     * @param  \App\Models\Gasometria  $gasometria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGasometriaRequest $request, Gasometria $gasometria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gasometria  $gasometria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasometria $gasometria)
    {
        //
    }
}
