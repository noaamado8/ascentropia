<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreActividadePost;

class ActividadesController extends Controller
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
          
        $actividades=Actividade::orderBy('created_at', 'desc') ->paginate(9); 

        // dd($actividades);
        return view("actividades.list")->with('actividades',$actividades);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("actividades.create", ['actividade' => new Actividade()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActividadePost $request)
    {
        $nomeimx = md5(microtime()).".".$request->imaxe->extension();

        $request->imaxe->move(public_path('imaxes/actividades/'), $nomeimx);

        $datos=$request->validated();
        $datos['imaxe']=$nomeimx;


 Actividade::create($datos);
 return redirect('actividades')->with('estado', 'Actividade publicada');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actividade $actividade)
    {
        return view('actividades.show',["actividade" => $actividade]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividade $actividade)
    {
        return view('actividades.edit')->with('actividade', $actividade);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActividadePost $request,Actividade $actividade)
    {
        //FACER (IMAXE)


        $nomeimx = md5(microtime()).".".$request->imaxe->extension();

        dd($nomeimx);


        $request->imaxe->move(public_path('imaxes/actividades/'), $nomeimx);

        $datos=$request->validated();
        $datos['imaxe']=$nomeimx;


        $actividade->update($datos);


 return back()->with('estado', 'Actividade actualizada');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividade $actividade)
    {
        
        if (!is_null($actividade->imaxe)) {
            // Borramos la foto antigua
            if (File::exists('imaxes/actividades/' . $actividade->imaxes))
                File::delete('imaxes/actividades/' . $actividade->imaxes);
        }

        $actividade->delete();
        return redirect('actividades')->with('estado', 'Actividade eliminada ');  
    }
}
