<?php

namespace App\Http\Controllers;

use App\Models\CourseTopics;
use Illuminate\Http\Request;

class CourseTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CourseTopics::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_publicacion' => 'required|date',
            'es_obligatorio' => 'required|boolean',
        ]));

        $topic = CourseTopics::create($validated);
        return response()->json($topic, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CourseTopics::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topic = CourseTopics::findOrFail($id);

        $validated = $request->validate(([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_publicacion' => 'required|date',
            'es_obligatorio' => 'required|boolean',
        ]));

        $topic->update($validated);
        return response()->json($topic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topic = CourseTopics::findOrFail($id);
        $topic->delete();

        return response()->json(['message' => 'Tema de curso eliminado correctamente']);
    }
}
