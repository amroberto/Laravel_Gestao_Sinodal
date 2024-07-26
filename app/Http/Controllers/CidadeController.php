<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of thep resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if($search) {
            $cidades = Cidade::where('nome', 'like', "%$search%")->paginate(15);
        } else {
            $cidades = Cidade::orderBy("nome","asc")->paginate(15);
        }
        return view('cidades.index', ['cidades' => $cidades]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     */
    public function show(Cidade $cidade)
    {
        
        return view('cidades.show', ['cidade' => $cidade ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cidade $cidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
