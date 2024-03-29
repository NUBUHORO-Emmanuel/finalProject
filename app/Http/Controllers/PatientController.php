<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $patients = Patient::latest()->paginate(5);

     return view('patients.index',compact('patients'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'gender' => 'required',
        'FirstName' => 'required',
        'LastName' => 'required',
        'N_id' => 'required',
        'birthday' => 'required',
        'sex' => 'required',
        'country' => 'required',
        'city' => 'required',
        'tel' => 'required',
        'Email' => 'required',
        'pass' => 'required',
        'Fname' => 'required',
        'Mname' => 'required',
        'na_id' => 'required',
        'Telephone' => 'required',
        'relationship' => 'required',
        'birthplace' => 'required',
      ]);
      Patient::create($request->all());

         return redirect()->route('patients.index')
                         ->with('success','Patient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
      $request->validate([
        'gender' => 'required',
        'FirstName' => 'required',
        'LastName' => 'required',
        'N_id' => 'required',
        'birthday' => 'required',
        'sex' => 'required',
        'country' => 'required',
        'city' => 'required',
        'tel' => 'required',
        'Email' => 'required',
        'pass' => 'required',
        'Fname' => 'required',
        'Mname' => 'required',
        'na_id' => 'required',
        'Telephone' => 'required',
        'relationship' => 'required',
        'birthplace' => 'required',
     ]);

     $patient->update($request->all());

     return redirect()->route('patients.index')
                     ->with('success','Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
      $patient->delete();

      return redirect()->route('patients.index')
                      ->with('success','Patient deleted successfully');
    }
}
