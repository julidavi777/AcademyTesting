@extends('layouts.app_2')

@section('title', 'Editar Docente')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teachers/{{$professor->id}}" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <h2 class="text-center mt-5">Editar Información del Docente</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre(s):</b></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$professor->name}}">
                        </div>
                        <div class="form-group">
                            <label for="last_name"><b>Apellido(s):</b></label>
                            <input id="last_name" class="form-control" type="text" name="last_name" value="{{$professor->last_name}}">
                        </div>
                        <div class="form-group">
                            <label for="college_degree"><b>Título Universitario:</b></label>
                            <input id="college_degree" class="form-control" type="text" name="college_degree" value="{{$professor->college_degree}}">
                        </div>
                        <div class="form-group">
                            <label for="age"><b>Edad:</b></label>
                            <input id="age" class="form-control" type="number" name="age" value="{{$professor->age}}">
                        </div>
                        <div class="form-group">
                            <label for="contract_date"><b>Fecha Contrato:</b></label>
                            <input id="contract_date" class="form-control" type="date" name="contract_date" value="{{$professor->contract_date}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue la foto del docente:</b></label>
                            <br>
                            <label for="image"> <img src="{{ Storage::url($professor->image) }}" width="50" height="50" alt=""> </label>
                            <input id="image" class="" type="file" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="identify_document"><b>Cargue el documento de Identidad:</b></label>
                            <br>
                            <label for="identify_document"> <iframe src="{{ Storage::url($professor->identify_document) }}" width="100" height="100"></iframe> </label>
                            <input id="identify_document" class="" type="file" name="identify_document" accept="application/pdf">
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" href="" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

@endsection
