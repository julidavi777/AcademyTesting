@extends('layouts.app_3')

@section('title', 'Lista Estudiantes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de Estudiantes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

        <div class="col-sm ">
            <table class=" table-dark table-striped m-auto rounded">
                <thead>
                    <tr>
                        <td class="p-3 text-center"><b>N°</b></td>
                        <td class="p-3 text-center"><b>Nombres</b></td>
                        <td class="p-3 text-center"><b>Apellidos</b></td>
                        <td class="p-3 text-center"><b>Género</b></td>
                        <td class="p-3 text-center"><b>Tipo documento</b></td>
                        <td class="p-3 text-center"><b>N° documento</b></td>
                        <td class="p-3 text-center"><b>Acciones</b></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $apprentice as $student )
                        <tr>
                            <td class="p-4">{{$student->id}}</td>
                            <td class="p-4">{{$student->names}}</td>
                            <td class="p-4">{{$student->last_name1}} {{$student->last_name2}}</td>
                            <td class="p-4 text-center">{{$student->gender}}</td>
                            <td class="p-4 text-center">{{$student->document_type}}</td>
                            <td class="p-4">{{$student->document_number}}</td>
                            <td class="p-3">
                                <div class="row mt-2 pe-2">
                                    <div class="view mx-2 px-3 mt-2">
                                        <a href="/students/{{$student->id}}" class="btn btn-primary">Ver</a>
                                    </div>
                                    <div class="edit mx-2 px-3 mt-2">
                                        <a href="/students/{{$student->id}}/edit" class="btn btn-warning">Editar</a>
                                    </div>
                                    <div class="supr mx-2 px-3 mt-2">
                                        <form class="form-group" action="/students/{{$student->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
