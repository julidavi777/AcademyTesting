@extends('layouts.app_3')

@section('title', 'Mostrar Estudiantes')

@section('content')

    <h1 class="text-center mt-5 ">Informacion de estudiante</h1>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>

        <hr>
        <div class="row">
            <div class="col-sm-5 mx-5 pb-3 rounded">
                <h5>Documento de identidad</h5>
                <br>
                <div class="form-group row">
                    @foreach ( $query as $consult )
                        <div class="form-group ">
                        <p><b>Tipo de documento: </b>{{$apprentice->document_type}}</p>
                        <p><b>No. de documento </b>{{$apprentice->document_number}}</p>
                        <p><b>Documento pdf:</b>
                            <br>
                            <iframe src="{{ Storage::url($apprentice->identify_document) }}" width="100" height="100"></iframe></p>
                        <p><b>País de expedición: </b>{{$consult->nameCountry}}</p>
                        <p><b>Depto. de expedición: </b>{{$consult->nameDepart}}</p>
                        <p><b>Municipio de expedición: </b>{{$consult->nameMuni}}</p>
                        <p><b>Fecha de expedición: </b>{{$apprentice->expedition_date}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm ms-5 me-5 pb-3 rounded">
            </div>
            <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                <h5>Datos de identificación</h5>
                <br>
                <div class="form-group row">
                    @foreach ( $query2 as $consult2 )
                        <div class="form-group ">
                            <p><b>Nombres: </b>{{$apprentice->names}}</p>
                            <p><b>Primer apellido: </b>{{$apprentice->last_name1}}</p>
                            <p><b>Segundo apellido: </b>{{$apprentice->last_name2}}</p>
                            <p><b>Género: </b>{{$apprentice->gender}}</p>
                            <p><b>Fecha de nacimiento: </b>{{$apprentice->birth_date}}</p>
                            <p><b>País de nacimiento: </b>{{$consult2->birthCountry}}</p>
                            <p><b>Depto. de nacimiento: </b>{{$consult2->birthDepart}}</p>
                            <p><b>Municipio de nacimiento: </b>{{$consult2->birthMuni}}</p>
                            <p><b>Estrato socioeconómico: </b>{{$apprentice->stratum}}</p>
                            @foreach ( $query3 as $consult3 )
                                <p><b>Curso matriculado: </b>{{$consult3->name}}</p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="button mb-3">
                    <a href="/students/" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
