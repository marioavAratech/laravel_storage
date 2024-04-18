<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=["0"=>"item1","1"=>"item2","2"=>"item3","3"=>"item4"];
        return view("itemViews.index",["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showFormCreate()
    {
        return view("itemViews.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("itemViews.show",["id"=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showFormEdit(string $id)
    {
        return view("itemViews.edit",["id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //dd($request->all());
        echo "Editanto el item con id $request->idItem y poniendo de nombre $request->item";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Elemento con id $id ha sido eliminado.";
    }
}
