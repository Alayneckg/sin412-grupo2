
@extends('layouts.app')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Configurações</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <br>
                        <img src="../assets/plus_create.png" style="top: 0; right: 0; float: right; text-align: end; position: absolute; margin: 7px;">
                        <p class="title-task">To do</p>
                        <div class="card-body" style="padding: 5px">
                            <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                <p class="text-task">Crie as tarefas a fazer no dia!</p>
                                <img src="../assets/plus_button.png" style="width: 50px; margin: auto; margin-bottom: 10px; ">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
