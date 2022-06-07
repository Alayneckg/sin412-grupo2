<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('analytics',[
            'relatorios' => $relatorios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relatorio  $relatorio
     * @return \Illuminate\Http\Response
     */
    public function show(Relatorio $relatorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relatorio  $relatorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Relatorio $relatorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relatorio  $relatorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relatorio $relatorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relatorio  $relatorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relatorio $relatorio)
    {
        //
    }
}
