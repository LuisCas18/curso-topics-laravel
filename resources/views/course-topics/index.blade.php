@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Temas del Curso</h1>

    {{-- Formulario para crear nuevo tema --}}
    <form method="POST" action="{{ route('course-topics.store') }}" class="bg-white p-4 rounded shadow mb-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" name="nombre" placeholder="Nombre del tema" class="border p-2 rounded" required>
            <input type="text" name="descripcion" placeholder="Descripción" class="border p-2 rounded" required>
            <input type="date" name="fecha_publicacion" class="border p-2 rounded" required>
            <select name="es_obligatorio" class="border p-2 rounded" required>
                <option value="">¿Es obligatorio?</option>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mt-4">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>

    {{-- Tabla de temas --}}
    <table class="w-full bg-white shadow rounded overflow-hidden">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Nombre</th>
                <th class="p-3">Descripción</th>
                <th class="p-3">Fecha Publicación</th>
                <th class="p-3">Obligatorio</th>
                <th class="p-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topics as $topic)
                <tr class="border-t">
                    <td class="p-3">{{ $topic->nombre }}</td>
                    <td class="p-3">{{ $topic->descripcion }}</td>
                    <td class="p-3">{{ $topic->fecha_publicacion }}</td>
                    <td class="p-3">{{ $topic->es_obligatorio ? 'Sí' : 'No' }}</td>
                    <td class="p-3 text-right">
                        <a href="#" class="text-sm text-blue-600 hover:underline">Editar</a>
                        <button data-id="{{ $topic->id }}" class="ml-2 text-sm text-red-600 hover:underline btn-delete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
