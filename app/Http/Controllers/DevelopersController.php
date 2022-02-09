<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Developer;

class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Developer::orderBy('id','desc')->paginate(10000);
        return view('dashboard')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('developers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required','unique:developers', 'max:255'],
            'phone' => ['required', 'max:10'],
        ]);
        if ($validatedData->fails()) {
            return redirect('developers.create')
                        ->withErrors($validatedData)
                        ->withInput();
        }
        $data = Developer::create($validatedData);
        return redirect('../dashboard')->with('success', 'Developer is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Developer::findOrFail($id);
        return view('developers.view')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Developer::findOrFail($id);

        return view('developers.edit')->with('data', $data);
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required','unique:developers,email,'.$id, 'max:255'],
            'phone' => ['required', 'max:10'],
        ]);
        if ($validatedData->fails()) {
            return redirect('developers.create')
                        ->withErrors($validatedData)
                        ->withInput();
        }
        Developer::whereId($id)->update($validatedData);

        return redirect('../dashboard')->with('success', 'Developer Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Developer::destroy($id);
        return redirect()->route('dashboard')->with('success', 'Developer Data is successfully deleted');
    }
}
