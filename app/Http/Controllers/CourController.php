<?php

namespace App\Http\Controllers;

use App\Models\cour;
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
        $cour = cour::paginate(5);
        return view('cour.index', compact('cour'));
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
        //
      /*  $data=$request->validate([
            'name' => 'required',
            'description' => 'required',
            'filiere_id' => 'required|exists:filieres,id',
            
            ]);
            $data = $request->except('_token');*/
            cour::create($request->all());
            return redirect()->route('cour.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cour $cour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cour $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cour $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cour $cour)
    {
        //
    }
}
