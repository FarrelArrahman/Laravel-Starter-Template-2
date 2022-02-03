<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public $example = [
        'Lorem ipsum dolor sit amet',
        'Consectetur adipisicing elit', 
        'Perferendis voluptate iure cum',
        'Dolore dignissimos provident', 
        'Quis nostrum architecto', 
        'Laboriosam nisi placeat debitis', 
        'Reprehenderit quos ullam perspiciatis',
        'Veritatis odit qui quod'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.example.index', ['example' => $this->example]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate here
        $request->validate([
            'example' => 'required|string'
        ]);

        // store code here
        // $example = Example::create([
        //     'example' => $request->example;
        // ]);
        
        return redirect()->route('example.index')->with('success', 'New example successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.example.edit', ['example' => $this->example[$id]]);
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
        // validate here
        $request->validate([
            'example' => 'required|string'
        ]);

        // find data here
        // $example = Example::find($id);

        // update code here
        // $example->update([
        //     'example' => $request->example;
        // ]);
        
        return redirect()->route('example.index')->with('success', 'Example successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find data here
        // $example = Example::find($id);

        // delete code here
        // $example->delete();
        
        return redirect()->route('example.index')->with('success', 'Example successfully deleted!');
    }
}
