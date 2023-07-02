<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Eventos::all();
        return view('modulos.Eventos')->with('eventos', $eventos);
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
        $datos = request();

            Eventos::create([
                'fechEvent' => $datos['fechEvent'],
                'nomEvent' => $datos['nomEvent'],
                'Suite' => $datos['Suite'],
                'NumColaborador' => $datos['NumColaborador'],
                'NombreColaborador' => $datos['NombreColaborador'],
                'puesto' => $datos['puesto'],
                'pago' => $datos['pago'],
                'pax' => $datos['pax'],
                'asistencia' => $datos['asistencia'],
                'observaciones' => $datos['observaciones'],
                'firma' => '',
            ]);

            return redirect('Eventos')->with('EventoCreado', 'OK');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventos $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($cli)
    {
        $cli = Eventos::find($cli);
        $eventos = Eventos::all();
        return view('modulos.Eventos', compact('cli', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request();

        DB::table('eventos')->where('id', $datos['id'])->update([
            'fechEvent' => $datos['fechEvent'],
            'nomEvent' => $datos['nomEvent'],
            'Suite' => $datos['Suite'],
            'NumColaborador' => $datos['NumColaborador'],
            'NombreColaborador' => $datos['NombreColaborador'],
            'puesto' => $datos['puesto'],
            'pago' => $datos['pago'],
            'pax' => $datos['pax'],
            'asistencia' => $datos['asistencia'],
            'observaciones' => $datos['observaciones'],
            'firma' => '',
        ]);
        return redirect('Eventos')->with('EventoActualizado', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eventos::destroy($id);
        return redirect('Eventos');
    }
}