<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventoPost;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('created_at', 'desc')->paginate(9);

        // dd($eventos);
        return view("inicio")->with('eventos', $eventos); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("eventos.create", ['evento' => new Evento()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoPost $request)
    {
        // dd($request->all());

        $nomeimx = md5(microtime()).".".$request->imaxe->extension();

        $request->imaxe->move(public_path('imaxes/eventos/'), $nomeimx);

        $datos=$request->validated();
        $datos['imaxe']=$nomeimx;


 Evento::create($datos);
 return redirect('/')->with('estado', 'Evento publicado');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('eventos.show',["evento" => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
