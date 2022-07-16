<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Tarefa;
use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->papel == "admin"){
            $dados = Tarefa::get();
        }else{
            $dados = Auth::user()->tarefas;
        }
        $tarefas = [];
        foreach($dados as $dado){
            $criacao = (new Datetime($dado->created_at))->format('Y-m-d');
            $tarefas[$criacao][] = $dado;
        }
        return view('tarefas',[
            'tarefas' => $tarefas,
        ]);
    }

    public function calendario()
    {
        $tarefas = Auth::user()->tarefas;
        return view('calendario',[
            'tarefas' => $tarefas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciclo = Ciclo::where('id', $request['ciclo_id'])->first();
        $tempo = $request['qtd_ciclos']*($ciclo->tempo_pausa + $ciclo->tempo_foco);
        Tarefa::create(
            [
                'titulo' => $request['titulo'],
                'descricao' => $request['descricao'],
                'tempo' => $tempo,
                'qtd_ciclos' => $request['qtd_ciclos'],
                'status' => 'To do',
                'complexidade' => $request['complexidade'],
                'prioridade' => $request['prioridade'],
                'user_id' => Auth::user()->id,
                'ciclo_id' => $request['ciclo_id'],
            ]
        );
        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    public function refresh(Request $request)
    {
        $tarefa = Tarefa::findOrFail($request['id']);
        $tarefa->update(
            [
                'status' => 'Doing',
            ]
        );
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
