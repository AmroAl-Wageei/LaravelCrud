<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // #1
        // $crud = Crud::get();
        // return $crud;
        
        // #2
        $cruds = Crud::all();
        // dd($cruds); // to check the data
        // if($cruds->isEmpty()) {
        // dd('No data found');
        return view('crud.index', compact('cruds'));
    
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request;
        
        // return $request->all();
        

        // #1
        // $crud = new Crud();
        // $crud->name = $request->name;
        // $crud->email = $request->email;
        // $crud->save();
        // return response('Done', 200);

        // #2
        // MUST ADD $fillable in Crud.php
        Crud::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        // return view('crud.index');   show undefind varibale $crud after create
        return redirect()->route('crud.index');
        

        // #3
        // MUST ADD $fillable in Crud.php
        // Must email same name in form and database
        // Crud::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // to show id in browser
        // return $id;

        // #1
        // $crud = Crud::find($id);
        // if($crud) {
        //     return $crud;
        // }else {
        //     return response(' No Data Found in Student List' );
        // }
        // return $crud;

        // #2
        $crud = Crud::findorFail($id);
        // // return $crud;
         return view('crud.edit', compact('crud'));

        // #3
        // $crud = Crud::where("id" , $id)->first();
        // return view('crud.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $crud = Crud::findOrFail($id); 
    $crud->name = $request->name;
    $crud->email = $request->email;
    $crud->save();
    return redirect()->route('crud.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        //
    }
}