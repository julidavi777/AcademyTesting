<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTeacherRequest;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor = Teacher::all() ;//Traemos toda la info de la tabla teachers a trabes del modelo y el método all()
        return view('teachers.index', compact('professor'));//Se adjunta teacher a la vista para poderlo usar, usando compact
        // return $professor;
        // return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('teachers.create', compact('teachers', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeTeacherRequest $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image');
        }

        // return $request->all();
        $professor = new Teacher();
        $professor->name = $request->input('name');
        $professor->last_name = $request->input('last_name');
        $professor->college_degree = $request->input('college_degree');
        $professor->age = $request->input('age');
        $professor->contract_date = $request->input('contract_date');
        if($request->hasFile('image')){
            $professor->image = $request->file('image')->store('public/teachers');
        }
        if($request->hasFile('identify_document')){
            $professor->identify_document = $request->file('identify_document')->store('public/identify_document');
        }
        $professor->course_id = $request->input('course_id');

        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo

        $professor->save();//Comando para registrar la info en la bd
        // return 'El docente se ha agregado exitosamente';
        return view('teachers.add_teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Teacher::find($id);
        return view('teachers.show', compact('professor'));
        // return 'El id de este curso es: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Teacher::find($id);
        // return 'El id de este curso es: ' . $id;
        // return 'La iformación que ud quiere actualizar, se vería en formato array...' . $professor;
        return view('teachers.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $professor = Teacher::find($id);
        // return $professor;
        $professor->fill($request->except('imagen', 'identify_document'));
        if($request->hasFile('imagen')){
            $professor->imagen = $request->file('imagen')->store('public/teachers');
        }
        if($request->hasFile('identify_document')){
            $professor->identify_document = $request->file('identify_document')->store('public/identify_document');
        }

        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo

        $professor->save();
        // return $request;
        // return 'La información del docente se ha actualizado exitosamente';
        return view('teachers.edit_teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Teacher::find($id);
        // return $professor;
        $urlImagenBD = $professor->imagen;
        // return $urlImagenBD;
        $imageName = str_replace('public/', '\storage\\', $urlImagenBD);
        $fullRoute = public_path() . $imageName;
        unlink($fullRoute);
        // $professor->delete();
        // return 'El curso se ha eliminado exitosamente';
        // return $fullRoute;

        $urlDocument = $professor->identify_document;
        $documentName = str_replace('public/', '\storage\\', $urlDocument);
        $fullRoute = public_path() . $documentName;
        unlink($fullRoute);
        $professor->delete();
        return view('teachers.del_teacher');
    }
}
