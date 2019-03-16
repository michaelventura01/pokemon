<?php

namespace pokemon\Http\Controllers;

use pokemon\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use pokemon\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //para administrar las vistas que muestre los entrenadores solo a administrador
        $request->user()->authorizeRoles(['user','admin']);
        //all() to get whole content from a table
        $trainers = Trainer::all();
        //compact needed to store into a array container
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(StoreTrainerRequest $request)
    {

        //validar datos
        /*$validatedData = $request->validate([
            'name' => 'required|max:10',
            'avatar' => 'required|image', 
            'slug'=>'required'
        ]);*/
        //guardar archivos
        $name = "";
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->description = $request->input('description');
        $trainer->avatar = $name;
        $trainer->slug = $request->input('slug');
        $trainer->save();
        return redirect()->route('trainers.index')->with('status','Entrenador '.$request->name.' guardado');
        //return view('trainers.index');;



        //obtener un dato especifico del json
        //return $request->input('name');
        //obtener todos los datos enviados por usuario
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //using implicit biding
    public function show(Trainer $trainer)
    {
        //firstOrFail() lanza exeption si no encuentra lo buscado
        //Trainer::where('slug','=','$var') para buscar en base de datos
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        //$trainer = Trainer::find($id);
        //compact('variable') para mandarlo por
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //para acceder a la vista
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //para actualizar la informacion
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path().'/images/',$name);
        }
        //$trainer->fill($request->except('slug'));
        //$trianer->slug = $request->input('slug');
        $trainer->save();
        //arreglo necesario para poder ver la informacion requerida
        return redirect()->route('trainers.show', [$trainer])->with('status','Entrenador '.$request->name.' actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $person = $trainer->name;
        $file_path = public_path()."/images/".$trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        return redirect()->route('trainers.index');
    }
}
