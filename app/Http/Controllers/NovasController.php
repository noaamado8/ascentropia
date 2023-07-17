<?php

namespace App\Http\Controllers;

use App\Models\Nova;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNovaPost;

class NovasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novas=Nova::orderBy('created_at', 'desc') ->paginate(12); 

        // dd($novas);
        return view("novas.list")->with('novas',$novas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("novas.create", ['nova' => new Nova()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNovaPost $request)
    {
        
      
        $nomeimx = md5(microtime()).".".$request->imaxe->extension();

        $request->imaxe->move(public_path('imaxes/novas/'), $nomeimx);

        $datos=$request->validated();
        $datos['imaxe']=$nomeimx;


 Nova::create($datos);
 return redirect('/')->with('estado', 'Nova Publicada');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nova $nova)
    {

        return view('novas.show',["nova" => $nova]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nova $nova)
    {
        return view('novas.edit')->with('nova', $nova);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNovaPost $request,Nova $nova)
    {
        //FACER (IMAXE)


        $nomeimx = md5(microtime()).".".$request->imaxe->extension();

        dd($nomeimx);


        $request->imaxe->move(public_path('imaxes/novas/'), $nomeimx);

        $datos=$request->validated();
        $datos['imaxe']=$nomeimx;


        $nova->update($datos);


 return back()->with('estado', 'Nova actualizada');
    

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
