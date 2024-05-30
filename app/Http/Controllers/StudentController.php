<?php

namespace App\Http\Controllers;

use App\Models\student;

use App\Models\Filiere;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::paginate(5);
return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        

        $filieres = Filiere::all();
        return view('student.create', compact('filieres'));
        
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
      $data=$request->validate([
        'name'=>'required',
'email' => 'required|unique:students,email',
'phone' => 'required',
'filiere_id' => 'required|exists:filieres,id',
'birthdate' => 'required',
]);
//$data = $request->except('_token');
Student::create($data);
return redirect()->route('student.index');
}
    

    /**
     * Display the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $Student=Student::find($request->id);
        return view('student.form1',compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return redirect()->route('student.index');
        //
       // $student=Student::find(1);
       // $student->update($request->all());
      // Student::update($request->all());
      //  return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
        $student->delete();
        return redirect()->route('student.index');
    }
}
