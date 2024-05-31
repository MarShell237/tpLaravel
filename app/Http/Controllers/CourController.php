<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;
use App\Models\Filiere;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cours = Cour::paginate(5);
        return view('cour.index', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $filieres = Filiere::all();
        return view('cour.create', compact('filieres'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data=$request->validate([
                'name' => 'required',
                'description' => 'required',
                'filiere_id' => 'required|exists:filieres,id',
            ]);
            Cour::create($data);
            return redirect()->route('cour.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cour $cour)
    {
        return view('cour.update',[
            'cour'=> $cour,
            'filieres'=>Filiere::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cour $cour)
    {
        $data=$request->validate([
            'name'=>'required',
            'description' => 'nullable',
            'filiere_id' => 'required|exists:filieres,id',
            ]);
            $cour->update($data);
            return redirect()->route('cour.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cour $cour)
    {
        $cour->delete();
        return to_route('cour.index');
    }
}
