<?php

namespace App\Http\Controllers;

use App\Models\Socix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSocixPost;

class SocixsController extends Controller
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
       $socixs = Socix::orderBy('created_at', 'desc')->paginate(10);
        return view("socixs.list")->with('socixs', $socixs); 

    /*     return view('socixs.list', [
            'socixs' => DB::table('socixs')->paginate(15)
        ]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("socixs.create", ['socix' => new Socix()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocixPost $request)
    {
        Socix::create($request->validated());

        return redirect('/socixs/create')->with('estado', 'Rexistrado/a Correctamente :)');


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
    public function edit(Socix $socix)
    {
        return view('socixs.edit')->with('socix', $socix);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSocixPost $request,Socix $socix)
    {

        $socix->update($request->validated());
        return back()->with('estado', 'Datos actualizados correctamente.');
    

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socix $socix)
    {
       

        $socix->delete();
        return back()->with('estado', 'Socix eliminado');
    }
}
