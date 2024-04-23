<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Vehiculo;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {     
        $vehiculos=Vehiculo::select('matricula','modelo','fecha_matriculacion','peso','color','itv_pasada')->get();
        return view("itemViews.index",["data"=>$vehiculos]);
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
        
        Vehiculo::create([
            "modelo"=>$request->modelo,
            "peso"=>$request->peso,
            "color"=>$request->color,
            "itv_pasada"=>true
        ]);

        return redirect()->route('listar.items');
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
        Vehiculo::where('matricula',$request->idItem)->update([
            "modelo"=>$request->modelo,
            "peso"=>$request->peso,
            "color"=>$request->color,
        ]);

        return redirect()->route('listar.items');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vehiculo::where('matricula',$id)->delete();

        return redirect()->route('listar.items');
    }
}
