<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $doctors = Doctor::latest()->paginate(5);

      return view('doctors.index',compact('doctors'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
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
                 'doc_code' => 'required',
                 'n_id' => 'required',
                 'FirstName' => 'required',
                'LastName' => 'required',
                 'Gender' => 'required',
                'DateOfBirth' => 'required',
                 'PhoneNumber' => 'required',
                 'Fax' => 'required',
                'Email' => 'required',
                'Passcode' => 'required',
                 'country' => 'required',
                'city' => 'required',
]);
  Doctor::create($request->all());

      return redirect()->route('doctors.index')
                      ->with('success','Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
      return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
  return view('doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
      $request->validate([
        'doc_code' => 'required',
        'n_id' => 'required',
        'FirstName' => 'required',
       'LastName' => 'required',
        'Gender' => 'required',
       'DateOfBirth' => 'required',
        'PhoneNumber' => 'required',
        'Fax' => 'required',
       'Email' => 'required',
       'Passcode' => 'required',
        'country' => 'required',
       'city' => 'required',
      ]);

      $doctor->update($request->all());

      return redirect()->route('doctors.index')
                      ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
      $doctor->delete();

      return redirect()->route('doctors.index')
                      ->with('success','deleted successfully');
    }
}
