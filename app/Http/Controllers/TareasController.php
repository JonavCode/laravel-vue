<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Tarea;

class TareasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user()->load('tareas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tarea = Tarea::create([    
                                    'description' => $request->description, 
                                    'user_id' => Auth::id() 
                                ]);
        $tarea->save();

        return $tarea;
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
        //$tarea = Tarea::where('id', $id)->update($request->all()); //Devuelve true

        $tarea = Tarea::find($id);
        $tarea->description = $request->description;
        $tarea->save();
        
        return $tarea;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$tarea = Tarea::where('id', $id)->delete(); //Devuelve true

        $tarea = Tarea::find($id);
        $tarea->delete();

        return $tarea;
    }
}
