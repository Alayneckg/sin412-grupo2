<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Ciclo;
use App\Models\Tarefa;
use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Auth::user()->tarefas()->get();
        $relatorio = [];
        $relatorio['criadas'] = 0;
        $relatorio['interrompidas'] = 0;
        $relatorio['finalizadas'] = 0;
        $relatorio['total'] = count($tarefas);
        $relatorio['total_ciclos'] = 0;
        $relatorio['total_foco'] = 0;
        $relatorio['frequencia'] = [];
        foreach($tarefas as $tarefa){
            if($tarefa->status == 'To do'){
                $relatorio['criadas']++;
            }
            if($tarefa->status == 'Doing'){
                $relatorio['interrompidas']++;
            }
            if($tarefa->status == 'Done'){
                $relatorio['finalizadas']++;
                $relatorio['total_foco'] = $relatorio['total_foco'] + $tarefa->ciclo->tempo_foco;
            }
            $relatorio['total_ciclos'] = $relatorio['total_ciclos'] + $tarefa['qtd_ciclos'];
            $criacao = (new Datetime($tarefa->created_at))->format('Y-m-d');
            $relatorio['frequencia'][$criacao][] = $tarefa;
        }
        $relatorio['media_ciclos'] = $relatorio['total_ciclos']/$relatorio['total'];
        $relatorio['total_dias'] = count($relatorio['frequencia']);
        return view('analytics',[
            'tarefas' => $tarefas,
            'relatorio' => $relatorio,
        ]);
    }

    public function admin()
    {
        return view('analytics_admin',[
        ]);
    }
}
