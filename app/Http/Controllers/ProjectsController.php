<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response()->json($request->user()->projects);
    }
    public function latest(Request $request)
    {
        return response()->json($request->user()->projects->sortByDesc('fecha_inicio')->first());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['nombre' => 'required', 
                            'descripcion' => 'required',
                            'fecha_inicio' => 'required',
                            'fecha_fin' => 'required']);
        $validated["user_id"] = $request->user()->id;
        
        Project::create($validated);
        return response()->json(['message' => 'Proyecto añadido']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyecto = Project::findOrFail($id);
        $validated = $request->validate(['nombre' => 'required', 
                            'descripcion' => 'required',
                            'fecha_inicio' => 'required',
                            'fecha_fin' => 'required']);
        
        $validated["user_id"] = $request->user()->id;
        $proyecto->update($validated);
        
        return response()->json(['message' => 'Proyecto actualizado correctamente',]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
