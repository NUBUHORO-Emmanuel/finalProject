<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consults = Consult::latest()->paginate(5);
        return view('consults.index',compact('consults'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('consults.create');
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
        'p_id' => 'required',
        'Fname' => 'required',
        'Lname' => 'required',
        'birthday' => 'required',
        'illns'  => 'required',
        'medecine'  => 'required',
        'doc_id' => 'required',
    ]);
Consult::create($request->all());
return redirect()->route('consults.index')
              ->with('success',' you are consultsd successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult)
    {
        return view('consults.show',compact('consult'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
         return view('consults.edit',compact('consult'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consult $consult)
    {
      $request->validate([
        'p_id' => 'required',
        'Fname' => 'required',
        'Lname' => 'required',
        'birthday' => 'required',
        'illns'  => 'required',
        'medecine'  => 'required',
        'doc_id' => 'required',
]);
$consult->update($request->all());
return redirect()->route('consults.index')
                ->with('success','updated successfully');
                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consult $consult)
    {
      $consult->delete();
      return redirect()->route('consults.index')
              ->with('success','deleted successfully');
    }
}
