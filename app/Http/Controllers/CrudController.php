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
        return 'This is index page';
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
        // $crud->name = $request->email;
        // $crud->save();
        // return response('Done', 200);

        // #2
        // Crud::create([
        //     'name' => $request->name,
        //     'email' => $request->email
        // ]);
        // return response('YESSS', 200);

        // #3
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
    public function edit(Crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        //
    }
}