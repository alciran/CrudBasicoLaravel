<?php

namespace App\Http\Controllers;

use App\Database;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databases = Database::all();

        return view('databases.index',compact('databases'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('databases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'descricao' => 'required',
        ]);

        Database::create($request->all());

        return redirect()->route('databases.index')
                        ->with('success','Cadastro de Banco de Dados criado com sucesso!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(Database $database)
    {
        return view('databases.show',compact('database'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(Database $database)
    {
        return view('databases.edit',compact('database'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {
        request()->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'descricao' => 'required',
        ]);

        $database->update($request->all());

        return redirect()->route('databases.index')
                        ->with('success','Cadastro de Banco de Dados atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $database)
    {
        $database->delete();

        return redirect()->route('databases.index')
                        ->with('success','Cadastro de Banco de Dados removido com sucesso!');
    }
}
