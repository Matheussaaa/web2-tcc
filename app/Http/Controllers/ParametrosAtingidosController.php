<?php

namespace App\Http\Controllers;

use App\Models\ParametrosAtingidos;
use App\Http\Requests\StoreParametrosAtingidosRequest;
use App\Http\Requests\UpdateParametrosAtingidosRequest;
use App\Models\VentiladorMec;
use App\Models\StatusClinico;
use Illuminate\Http\Request;
use App\Facades\UserPermission;

class ParametrosAtingidosController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ParametrosAtingidos::class, 'parametros');
    }

    public function index()
    {
        $parametrosAtingidos = ParametrosAtingidos::all();

            return view('parametros.index', compact(['parametrosAtingidos']));
    }

    public function validation(Request $request)
    {

        $rules = [
            'ventilador_id' => 'required',
            'volReal' => 'required',
            'volMin' => 'required',


        ];
        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
        ];

        $request->validate($rules, $msgs);
    }

    public function create()
    {

        $ventiladorMec  = VentiladorMec::all();

        return view('parametros.create',compact('ventiladorMec'));
    }


    public function store(Request $request)
    {
        $ventiladorMec = VentiladorMec::find($request->vent_id);

        $obj = new ParametrosAtingidos();
        $obj->vent()->associate($ventiladorMec);
        $obj->volReal = $request->volReal;
        $obj->volMin = $request->volMin;
        $obj->pPico = $request->pPico;
        $obj->pMedia = $request->pMedia;
        $obj->pPlato = $request->pPlato;
        $obj->complacencia = $request->complacencia;
        $obj->resistencia = $request->resistencia;
        $obj->autoPeep = $request->autoPeep;
        $obj->save();

        return redirect()->route('parametros.index');
    }


    public function show(ParametrosAtingidos $parametrosAtingidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParametrosAtingidos  $parametrosAtingidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parametrosAtingidos = ParametrosAtingidos::find($id);
        $vent = VentiladorMec::all();

       
        if (isset($parametrosAtingidos)) {
            return view('parametros.edit', compact('parametrosAtingidos', 'vent'));
        }

        return "<h1>Parametros Atingidos não Encontrado!</h1>";
    }


    public function update(Request $request, ParametrosAtingidos $parametros)
    {
        $vent = VentiladorMec::find($request->vent_id);

        if (isset($parametros)) {
           
            $vent = new VentiladorMec();
            $vent->ventiladorMec()->associate($vent);
            $vent->volReal = $request->volReal;
            $vent->volMin = $request->volMin;
            $vent->pPico = $request->pPico;
            $vent->pMedia = $request->pMedia;
            $vent->pPlato = $request->pPlato;
            $vent->complacencia = $request->complacencia;
            $vent->resistencia = $request->resistencia;
            $vent->autoPeep = $request->autoPeep;
            $vent->save();


            return redirect()->route('parametros.index');
        }

        return "<h1>Parametros Atingidos não Encontrado!</h1>";
    }


    public function destroy(ParametrosAtingidos $parametros)
    {
        if (isset($parametros)) {
            $parametros->delete();
            return redirect()->route('parametros.index');
        }

        return "<h1>Parametros Atingidos não Encontrado!</h1>";
    }
}
