@extends('layouts.app_3')

@section('title', 'Editar Estudiante')

@section('content')

<h2 class="text-start mx-3 mt-5 pt-3">Editar Estudiante</h2>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>
        <div class="text mx-5 mb-4">
            <p>Para editar la información en Drawing Academy debe ingresar información básica de identificación.
                Tenga en cuenta que los campos marcados con * son obligatorios para continuar la actualización de datos.
            </p>
        </div>
        <hr>
        <div class="row">
                <div class="col-sm-4 mx-5 pb-3 rounded">
                        <form action="/students/{{$apprentice->id}}" method="POST" class="" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <h5>Documenento de identidad</h5>
                            <br>
                                <div class="form-group row">
                                    <label for="document_type" class="col-sm-6 col-form-label">Tipo de documento *</label>
                                    {{-- <label for="document_type" class="col-sm-6 col-form-label">{{$apprentice->document_type}}</label> --}}
                                    <div class="col-sm-6">
                                        <select class="form-control" id="document_type" name="document_type">
                                            <option>{{$apprentice->document_type}}</option>
                                            <option value="">Seleccionar</option>
                                            <option value="CC">CC</option>
                                            <option value="TI">TI</option>
                                            <option value="CE">CE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_number" class="col-sm-6 col-form-label">No. de documento *</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="document_number" id="document_number" value="{{$apprentice->document_number}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="identify_document" class="col-sm-6 col-form-label">Cargue Docum. Identificación *</label>
                                    <label for="identify_document">
                                        <iframe src="{{ Storage::url($apprentice->identify_document) }}" width="100" height="100"></iframe>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="file" class="hidden" id="identify_document" name="identify_document" accept="application/pdf" title="Examinar"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exped_land" class="col-sm-6 col-form-label">País de expedición *</label>
                                    @foreach ( $query as $consult )
                                        <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult->nameCountry}}</label>
                                    @endforeach

                                    <div class="col-sm-6">
                                        <select class="form-control" name="exped_land" id="exped_land">
                                            <option>Seleccionar</option>
                                            @foreach ( $countries as $land)
                                                <option value="">{{ $land->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exped_dept" class="col-sm-6 col-form-label">Depto. donde fue expedido *</label>
                                    @foreach ( $query as $consult )
                                        <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult->nameDepart}}</label>
                                    @endforeach
                                    <div class="col-sm-6">
                                        <select class="form-control" id="exped_dept" name="exped_dept">
                                            <option>Seleccionar</option>
                                            @foreach ( $departments as $dept)
                                                <option value="">{{ $dept->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_exped_muni" class="col-sm-6 col-form-label">Municipio donde fue expedido *</label>
                                    @foreach ( $query as $consult )
                                        <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult->nameMuni}}</label>
                                    @endforeach
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_exped_muni" name="id_exped_muni">
                                            <option>Seleccionar</option>
                                            @foreach ( $municipalities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="expedition_date" class="col-sm-6 col-form-label">Fecha de expedición *</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="expedition_date" id="expedition_date" value="{{$apprentice->expedition_date}}">
                                    </div>
                                </div>
                </div>
                <div class="col-sm rounded">
                </div>
                <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <label for="names" class="col-sm-6 col-form-label">Nombres *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="names" name="names" value="{{$apprentice->names}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name1" class="col-sm-6 col-form-label">Primer apellido *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="last_name1" name="last_name1" value="{{$apprentice->last_name1}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name2" class="col-sm-6 col-form-label">Segundo apellido</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="last_name2" name="last_name2" value="{{$apprentice->last_name2}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-6 col-form-label">Género *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type" id="gender" name="gender">
                                        <option>{{$apprentice->gender}}</option>
                                        <option value="">Seleccionar</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birth_date" class="col-sm-6 col-form-label">Fecha de nacimiento *</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$apprentice->birth_date}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_birth_country" class="col-sm-6 col-form-label">País de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                    <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult2->birthCountry}}</label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_birth_country" id="id_birth_country">
                                        <option>Seleccionar</option>
                                        @foreach ( $countries as $land)
                                            <option value="">{{ $land->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_birth_department" class="col-sm-6 col-form-label">Departamento de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                    <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult2->birthDepart}}</label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_birth_department" id="id_birth_department">
                                        <option>Seleccionar</option>
                                        @foreach ( $departments as $dept)
                                            <option value="">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_birth_muni" class="col-sm-6 col-form-label">Municipio de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                    <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult2->birthMuni}}</label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_birth_muni" id="id_birth_muni">
                                        <option>Seleccionar</option>
                                        @foreach ( $municipalities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stratum" class="col-sm-6 col-form-label">Estrato socioeconómico *</label>
                                {{-- <label for="stratum" class="col-sm-6 col-form-label">{{$apprentice->stratum}}</label> --}}
                                <div class="col-sm-6">
                                    <select class="form-control" name="stratum" id="stratum">
                                        <option value="">{{$apprentice->stratum}}</option>
                                        <option value="">Seleccionar</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_course" class="col-sm-6 col-form-label">Curso</label>
                                @foreach ( $query3 as $consult3 )
                                    <label for="exped_land" class="col-sm-6 col-form-label">{{ $consult3->name}}</label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_course" id="id_course">
                                        <option>Seleccionar</option>
                                        @foreach ( $courses as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="buttons">
                                <a href="/students/" class="btn btn-secondary">Regresar</a>
                                <input type="submit" class="btn btn-success" value="Actualizar">
                            </div>
                        </form>
            </div>
        </div>
    </div>
    <br>

@endsection
