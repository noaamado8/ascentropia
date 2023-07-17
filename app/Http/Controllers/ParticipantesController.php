<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticpantePost;
use App\Models\Actividade;
use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipantesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create', 'store');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividade::orderBy('created_at', 'desc')->paginate(10);
        $participantes = Participante::orderBy('created_at', 'desc')->paginate(10);
        return view("participantes.list")->with('participantes', $participantes)->with('actividades', $actividades); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    
    {

        $actividade = Actividade::find ($_GET['id']);

        // dd($actividade);

        return view("participantes.create", ['participante' => new Participante(), "actividade" => $actividade]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticpantePost $request)
    {
       
        Participante::create($request->validated());

        return redirect()->back()->with('estado', 'Rexistrado/a Correctamente :)');

    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Participante $participante)
    {
        return view('participantes.edit')->with('participante', $participante);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParticpantePost $request,Participante $participante)
    {

        $participante->update($request->validated());
        return back()->with('estado', 'Datos actualizados correctamente.');
    

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        
        $participante->delete();
        return back()->with('estado', 'Participante eliminado');
    }
}
