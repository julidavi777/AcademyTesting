@extends('layouts.app_2')

@section('title', 'Agregar Docente')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teachers" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $alert)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <li>{{$alert}}</li>
                                </ul>
                            </div>
                        @endforeach
                    @endif
                        <h2 class="text-center mt-5">Crear Nuevo Docente</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre(s):</b></label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="last_name"><b>Apellido(s):</b></label>
                            <input id="last_name" class="form-control" type="text" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="college_degree"><b>Título Universitario:</b></label>
                            <input id="college_degree" class="form-control" type="text" name="college_degree">
                        </div>
                        <div class="form-group">
                            <label for="age"><b>Edad:</b></label>
                            <input id="age" class="form-control" type="number" name="age">
                        </div>
                        <div class="form-group">
                            <label for="contract_date"><b>Fecha Contrato:</b></label>
                            <input id="contract_date" class="form-control" type="date" name="contract_date">
                        </div>
                        <div class="form-group">
                            <label for="image"><b>Cargue la foto del docente:</b></label>
                            <input id="image" class="" type="file" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="identify_document"><b>Cargue el documento de Identidad:</b></label>
                            <input id="identify_document" class="" type="file" name="identify_document" accept="application/pdf">
                        </div>
                        <div class="form-group row">
                            <label for="course_id" class="col-sm-6 col-form-label"><b>Curso:</b></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="course_id" id="course_id">
                                    <option>Seleccionar</option>
                                    @foreach ( $courses as $grade )
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

@endsection
