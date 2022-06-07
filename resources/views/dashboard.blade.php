
@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
        .botao-login {
            text-align: center;
            background-color: #8d2619;
            border-radius: 17px;
            color: white !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            font-size: 50px;
            margin-top: 10px;
            width: 100%;
            padding: 0 !important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            align-items:center;
            justify-content: center;
        }
        .timer{
            background-color: #ffffff;
            color: #591616;
            font-size: 60px;
            text-align: center;
            font-weight: 700;
            padding: 10px;
            margin: auto;
            width: 100%;
            border-radius: 17px;
            display: flex;
            align-items:center;
            justify-content: center;
        }
        .card-task{
            margin: 30px;
            border-radius: 17px;
            background-color: #ffffffb8;
            min-height: 450px;
        }
        .title-task{
            font-style: normal;
            font-weight: 500;
            font-size: 45px;
            color: #591616;
            text-align: center;
        }
        .text-task{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 25px;
            color: #591616;
            text-align: center;
            padding: 5px;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <span style="font-size: 2.5rem; margin: 0; font-weight: 700; color: #591616;">Pomodoro board</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin-bottom: 30px;">
                    <div class="card" style="width: 35%; float: right; background-color: transparent; box-shadow: none;">
                        <div class="card-body timer">
                            25:00<!-- <span>25</span>
                            <span>:</span>
                            <span>00</span> -->
                            <img src="../assets/tecnica-pomodoro (3).png" style="height: 63px; vertical-align:middle">
                        </div>
                        <a class="botao-login">
                            <img src="../assets/botao-play-ponta-de-seta.png" style="height: 45px; ">
                            <!-- <i class="fa-solid fa-play"></i><i class="nav-icon fa-thin fa-copy"></i> -->
                            &nbsp;START
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 50%; float: left; margin-left: 30px; background-color: transparent; box-shadow: none;">
                        <div class="card-body">
                            <img src="../assets/Ellipse_1.png" style="height: 45px;">
                            <img src="../assets/Line_1.png">
                            <img src="../assets/Ellipse_2.png" style="height: 45px;"><br>
                            <span style="margin-left: 5px; color:#591616; font-weight: 300;">Foco</span>
                            <span style="margin-left: 57px; color:#591616; font-weight: 300;">Descanso</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10" style="margin: auto">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-task">
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
                        <div class="col-lg-4">
                            <div class="card card-task">
                                <br>
                                <p class="title-task">Doing</p>
                                <div class="card-body" style="padding: 5px">
                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                        <p class="text-task" >Arraste as tarefas que iniciou a fazer aqui!</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-task">
                                <br>
                                <p class="title-task">Done</p>
                                <div class="card-body" style="padding: 5px">
                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                        <p class="text-task" >Arraste as tarefas finalizadas aqui!</p>
                                        <br>
                                    </div>
                                </div>
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
