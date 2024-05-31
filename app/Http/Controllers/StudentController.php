<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Models\Filiere;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $students = Student::paginate(5);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $filieres = Filiere::all();
        return view('student.create', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data=$request->validate([
        'name'=>'required',
        'email' => 'required|unique:students,email',
        'phone' => 'required',
        'filiere_id' => 'required|exists:filieres,id',
        'birthdate' => 'required',
        ]);
        Student::create($data);
        return redirect()->route('student.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function edit(Student $student){
        return view('student.update',[
            'student'=> $student,
            'filieres'=>Filiere::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $student){
        $data=$request->validate([
        'name'=>'required',
        'email' => 'required',
        'phone' => 'required',
        'filiere_id' => 'required|exists:filieres,id',
        'birthdate' => 'required',
        ]);
        $student->update($data);
        return redirect()->route('student.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('student.index');
    }
}
