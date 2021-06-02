<?php

namespace App\Http\Controllers;

use App\Models\Illnes;
use Illuminate\Http\Request;

class IllnesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $illness = Illnes::latest()->paginate(5);

      return view('illness.index',compact('illness'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('illness.create');
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
          'Fname' => 'required',
          'Lname' => 'required',
          'birthday' => 'required',
          'illns'  => 'required',
        ]);

        Illnes::create($request->all());

        return redirect()->route('illness.index')
                        ->with('success','Illnes created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Illnes  $illness
     * @return \Illuminate\Http\Response
     */
    public function show(Illnes $illnes)
    {
        return view('illness.show',compact('illnes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function edit(Illness $illnes)
    {
        return view('illness.edit',compact('illnes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Illnes  $illnes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Illnes $illnes)
    {
        $request->validate([
          'Fname' => 'required',
          'Lname' => 'required',
          'birthday' => 'required',
          'illns'  => 'required',
        ]);

        $illnes->update($request->all());

        return redirect()->route('illness.index')
                        ->with('success','Illnes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Illnes  $illnes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Illnes $illnes)
    {
        $illness->delete();
        return redirect()->route('illness.index')
                        ->with('success','deleted successfully');
    }
}
