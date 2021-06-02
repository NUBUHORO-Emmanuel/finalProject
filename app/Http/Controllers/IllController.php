<?php

namespace App\Http\Controllers;

use App\Models\Ill;
use Illuminate\Http\Request;

class IllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ills = Ill::latest()->paginate(5);
      return view('ills.index',compact('ills'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('ills.create');
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
          'n_d' => 'required',
          'Fname' => 'required',
          'Lname' => 'required',
          'birthday' => 'required',
          'illns' => 'required',
         ]);
Ill::create($request->all());
return redirect()->route('ills.index')
            ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ill  $ill
     * @return \Illuminate\Http\Response
     */
    public function show(Ill $ill)
    {
         return view('ills.show',compact('ill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ill  $ill
     * @return \Illuminate\Http\Response
     */
    public function edit(Ill $ill)
    {
        return view('ills.edit',compact('ill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ill  $ill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ill $ill)
    {
      $request->validate([
        'n_d' => 'required',
        'Fname' => 'required',
        'Lname' => 'required',
        'birthday' => 'required',
        'illns' => 'required',
          ]);
    $ill->update($request->all());
    return redirect()->route('ills.index')
              ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ill  $ill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ill $ill)
    {
      $ill->delete();
        return redirect()->route('ills.index')
              ->with('success','deleted successfully');
    }
}
