<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Tasks::where(Auth::user()->id)->get();
            return view ('index' , compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Changer l'état d'une tâche
       // $task->update(['state'=>1]);
        
         // redirection après modification
        return redirect ()->route('task.index');        
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(string $id)
    {
        // requete pour supprimer la tache 
        //$task->delete();
    

        // redirection après suppression
        //return redirect ()->route('task.index');
    }
}
