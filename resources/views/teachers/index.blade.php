@extends('layouts.app_2')

@section('title', 'Lista Docentes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de Docentes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        @foreach ( $professor as $tutor )
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

            <div class="col-sm">
                <div class="card" style="width: 20rem;">
                    <div class="text-center mt-2">
                        <img src="{{ Storage::url($tutor->image) }}" width="300" height="250" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"> {{$tutor->name}} {{$tutor->last_name}} </h5>
                        <br>
                        <div class="text-center">
                            <a href="/teachers/{{$tutor->id}}" class="btn btn-primary">Ver información</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>

        @endforeach
    </div>

@endsection
