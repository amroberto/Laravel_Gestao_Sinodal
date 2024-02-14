<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::orderBy('nome', 'asc')->paginate(10);
        return view('estados.index', ['estados' => $estados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param \App\Models\Estado $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.show', ['estado' => $estado ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Estado $estado
     * @return \Illuminate\Http\Response
     *
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit', ['estado' => $estado ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
