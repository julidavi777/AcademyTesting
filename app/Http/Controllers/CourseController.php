<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCourseRequest;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Course::all();//Traemos toda la info de la tabla courses a trabes del modelo y el método all()
        return view('courses.index', compact('grade'));//Se adjunta grade a la vista para poderlo usar, usando compact
        // return $grade;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCourseRequest $request)
    {

        $grade = new Course();//Crear una instancia de la clase Curso
        $grade->name = $request->input('name');
        $grade->description = $request->input('description');
        $grade->duration = $request->input('duration');
        if($request->hasFile('image')){
            $grade->image = $request->file('image')->store('public/courses');
        }
        //Añada aquí el nombre de las nuevas columnas que haya creado

        $grade->save();//Comando para registrar la info en la bd
        return view('courses.add_course');

        // $grade = Course::create($request->all());
        // return response()->json($grade, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = Course::find($id);
        return view('courses.show', compact('grade'));
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
        $grade = Course::find($id);
        // return 'El id de este curso es: ' . $id;
        // return 'La iformación que ud quiere actualizar, se vería en formato array...' . $grade;
        return view('courses.edit', compact('grade'));
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
        $grade = Course::find($id);
        // return $grade;
        $grade->fill($request->except('image'));
        if($request->hasFile('image')){
            $grade->image = $request->file('image')->store('public/courses');
        }

        //Añada aquí el nombre de las nuevas columnas que haya creado

        $grade->save();
        // return $request;
        // return 'La información del curso se ha actualizado exitosamente';
        return view('courses.edit_course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Course::find($id);
        // return $grade;
        $urlImagenBD = $grade->image;
        // return $urlImagenBD;
        $imageName = str_replace('public/', '\storage\\', $urlImagenBD);
        $fullRoute = public_path() . $imageName;
        unlink($fullRoute);
        $grade->delete();
        // return 'El curso se ha eliminado exitosamente';
        // return $fullRoute;
        return view('courses.del_course');

    }
}
