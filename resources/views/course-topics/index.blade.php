@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Temas del Curso</h1>

    <form id="form-topic" class="bg-white p-4 rounded shadow mb-6">
        <input type="hidden" id="id" value="">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" id="nombre" placeholder="Nombre del tema" class="border p-2 rounded" required>
            <input type="text" id="descripcion" placeholder="Descripción" class="border p-2 rounded">
            <input type="date" id="fecha_publicacion" class="border p-2 rounded" required>
            <select id="es_obligatorio" class="border p-2 rounded" required>
                <option value="">¿Es obligatorio?</option>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>

    <table class="w-full bg-white shadow rounded overflow-hidden">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Nombre</th>
                <th class="p-3">Descripción</th>
                <th class="p-3">Fecha</th>
                <th class="p-3">Obligatorio</th>
                <th class="p-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody id="topics-body">
        </tbody>
    </table>
@endsection

@vite('resources/js/course-topics.js')

