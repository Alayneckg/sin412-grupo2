
@extends('layouts.app')

@section('css')
    <style>
        .botao-login {
            text-align: center;
            background-color: #8d2619;
            border-radius: 17px;
            color: white;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            font-size: 30px;
            margin-top: 10px;
            width: 100%;
            padding: 10px !important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            align-items:center;
            justify-content: center;
            border: none;
        }
        .botao-login img{
            height: 30px;
        }
        .botao-login:hover{
            box-shadow: 0px 15px 25px -5px rgba(darken(dodgerblue, 40%));
            transform: scale(1.03);
        }
        .botao-login:active{
            box-shadow: 0px 4px 8px rgba(darken(dodgerblue, 30%));
            transform: scale(.98);
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
        .time{
            color: #591616;
            font-size: 60px;
            font-weight: 700;
        }
        .card-task{
            margin: 30px !important;
            border-radius: 17px !important;
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
        .card-title {
            flex-wrap: nowrap;
            max-width: 80%;
        }

        select {
            width: 100%;
            height: 46px;
            background-color: #00000008;
            border: 1px solid #eee;
            outline: none;
            font-size: 15px;
            font-weight: 400;
            color: #2a2a2a;
            padding: 0px 20px;
            border-radius: 23px;
            margin-bottom: 30px;
            box-shadow: 3px 3px 6px rgb(163 177 198 / 49%), 3px 3px 6px rgb(255 255 255);
        }
        input{
            font-family: 'Outfit', sans-serif !important;
            width: 100%;
            height: 46px;
            background-color: #00000008;
            border: 1px solid #eee;
            outline: none;
            font-size: 15px;
            font-weight: 400;
            color: #2a2a2a;
            padding: 0px 20px;
            border-radius: 23px;
            margin-bottom: 30px;
            box-shadow: 3px 3px 6px rgb(163 177 198 / 49%), 3px 3px 6px rgb(255 255 255);
        }
        .button{
            text-align: center;
            background-color: white;
            border-radius: 17px;
            color: #8d2619 !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            width: 100%;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: none;
        }
        label{
            color: #565656;
        }
        .modal-content label{
            padding-left: 9px;
            padding: 5px;
        }
        .button-delete{
            text-align: center;
            background-color: #8d2619;
            border-radius: 17px;
            color: white !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            width: 100%;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: none;
        }
        time {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        img{
            user-drag: none;
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        .badge-info {
            color: #fff !important;
            background-color: #DF7B7B !important;
        }
        .badge-warning {
            color: white !important;
            background-color: #D83636 !important;
        }
        .badge-danger {
            color: white !important;
            background-color: #591616 !important;
        }
        .group input[type="radio"] {
            position: absolute;
            opacity: 0;
            z-index: 1;
            width: 50%;
        }
        .group label {
            position: relative;
            margin-right: 1em;
            padding-left: 2em;
            padding-right: 1em;
            line-height: 1.3;
            cursor: pointer;
            padding-bottom: 0;
            margin-bottom: 0;
            font-weight: 500 !important;
        }
        .group label::before {
            box-sizing: border-box;
            content: " ";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 1.4em;
            height: 1.4em;
            border: 2px solid #8C1515;
            border-radius: .25em;
            z-index: 1;
        }
        .group input[type="radio"] + label::before {
            border-radius: 1em;
        }

        .group input[type="radio"]:checked + label {
            padding-left: 1em;
            color: #8C1515 !important;
        }
        .group input[type="radio"]:checked + label::before {
            top: 0;
            width: 100%;
            height: 1.3em;
            /* background: #e7e1e1 !important; */
        }
        .group label,
            label::before {
            -webkit-transition: .25s all ease;
            -o-transition: .25s all ease;
            transition: .25s all ease;
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
            <!-- Pomodor Timer -->
                <div class="col-lg-6" style="margin-bottom: 30px;">
                    <div class="card" style="width: 45%; float: right; background-color: transparent; box-shadow: none;">
                        <time style="display: none;" id="session-length"></time>
                        <time style="display: none;" id="break-length"></time>
                        <!-- Session Length -->
                        <span style="display: none;" id="foco-start">0.2</span>
                        <span style="display: none;" id="pausa-start">0.2</span>
                        <header id="type"></header>
                        <div class="card-body timer">
                            <div id="countdown-container" style="background-color: #ffffff; padding: 10px; display: flex; align-items:center; justify-content: center;">
                                <time id="countdown" style="font-size: 60px; font-weight: 700;"></time>
                                <img src="../assets/tecnica-pomodoro (3).png" style="height: 63px; vertical-align:middle">
                            </div>
                        </div>
                        <div id="button-container">
                            <div class="row">
                                <div class="col-lg-6" onclick="timer_function()">
                                    <button type="button" id="start-session" class="botao-login"><img  id="img-start" name="start" src="../assets/botao-play-ponta-de-seta.png"><span id="text-start" style="font-weight: 700;font-size: 30px;">&nbsp;START</span></button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" id="stop-session" class="botao-login" style="background-color: #b1a6a67d; color: #59150E"><img src="data:image/png;base64,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">&nbsp;RESET</button>
                                </div>
                                <button type="button" id="reset-session" class="botao-login" style="display:none"><img >&nbsp;RESET</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicador de Foco e Pausa -->
                <div class="col-lg-6">
                    <div class="card" style="width: 100%; float: left; margin-left: 30px; background-color: transparent; box-shadow: none;">
                        <div class="card-body" id="pomodoro-status">
                            <img src="../assets/Ellipse_1.png" style="height: 45px;">
                            <img src="../assets/Line_1.png">
                            <img src="../assets/Ellipse_2.png" style="height: 45px;"><br>
                            <span style="margin-left: 5px; color:#591616; font-weight: 300;">Foco</span>
                            <span style="margin-left: 57px; color:#591616; font-weight: 300;">Pausa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10" style="margin: auto">
                    <div id="div-cards">
                        <div class="row">
                            <!-- To do -->
                            <div class="col-lg-4">
                                <div class="card card-task">
                                    <img onclick="modal_create()" src="../assets/plus_create.png" style="top: 0; right: 0; float: right; text-align: end; position: absolute; margin: 7px;">
                                    <br>
                                    <p class="title-task">To do</p>
                                    <div class="card-body" style="padding: 5px">
                                        @isset($tarefas[0])
                                            @foreach($tarefas as $tarefa)
                                                @if($tarefa->status == 'To do')
                                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                                        <div class="card-header" style="padding-left: 5px;padding-right: 8px;">
                                                            <h3 class="card-title">
                                                                <div class="group">
                                                                    <input type="radio" name="rb" id="rb{{$tarefa->id}}" value="{{ $tarefa }}"/>
                                                                    <label for="rb{{$tarefa->id}}">{{ $tarefa->titulo}}</label>
                                                                </div>
                                                            </h3>
                                                            <div class="card-tools">
                                                                <span
                                                                    @if($tarefa->prioridade == 'baixa')
                                                                        class="badge badge-info"
                                                                    @elseif($tarefa->prioridade == 'media')
                                                                        class="badge badge-warning"
                                                                    @elseif($tarefa->prioridade == 'alta')
                                                                        class="badge badge-danger"
                                                                    @endif
                                                                > {{ $tarefa->prioridade }}</span>
                                                                <button type="button" class="btn btn-tool" onclick="modal_tarefa('{{ $tarefa }}','{{ $tarefa->ciclo->label}}')">
                                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB2klEQVRIieWWQUgVURiFz39nRgpn51wf5D4FCdoYhFDtjSAXtZZAV0aWtnaf5iJs+SAIEVy0aVHLKFKwjQjmxqXKc+bV5vkmGeceF77iUfOgO3hX71/+h3u+uZf/3jlAt5WUWbSg9TSARwIokm+eJclLAegUvKD1KoCHbQYk+X42Se45A7+KoisnIvv/CCQ9cnimXv/+v17KBnyi1I1CQUQyzxux8bIC9wDbHST6xuw4Az8+OtoDsN7eaw3V1tMk+eYMDACNOL4DoAryB4CfJFcaQTBq69N9VeoBWdY6bJK3lQiNUp/marVj5+DFSuUuyTWQl1qt1ADjz+P4gzPwstZhKhK3QX9XSqW0zc6tpvoXcKsACgKXPdJqsq3AApgOfeZ5XqhdCDhX6jOA9O8+gRS+v16w5GLAc7XasQHGBWi2/oEk0KTIfdvJLnWdXlQqvTg9vSmkMAi+lrlO3VfWRz0P9IT9/VUxZowiAuBjIwgm5g8OmjY+vi04jKIvIEcof775QZhlQwSu2+Quq6leHBi4CpGipHFtqa/PXQIxWTbcQRLjeYPOwL4xG0XHKQCR55vOwDNJckiRt+1wOX9E3s3W67s2XuUCfRRNisgUACig+iSOX9sG+u6rMx1AtffsWN05AAAAAElFTkSuQmCC">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;" onclick="modal_create()">
                                                <p class="text-task">Crie as tarefas a fazer no dia!</p>
                                                <img src="../assets/plus_button.png" style="width: 50px; margin: auto; margin-bottom: 10px; ">
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <!-- Doing -->
                            <div class="col-lg-4">
                                <div class="card card-task">
                                    <br>
                                    <p class="title-task">Doing</p>
                                    <div class="card-body" style="padding: 5px">
                                        @isset($tarefas[0])
                                            @foreach($tarefas as $tarefa)
                                                @if($tarefa->status == 'Doing')
                                                    <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                                        <div class="card-header" style="padding-left: 5px;padding-right: 8px;">
                                                            <h3 class="card-title">
                                                                <div class="group">
                                                                    <input type="radio" name="rb" id="rb{{$tarefa->id}}" value="{{ $tarefa }}"/>
                                                                    <label for="rb{{$tarefa->id}}">{{ $tarefa->titulo}}</label>
                                                                </div>
                                                            </h3>
                                                            <div class="card-tools">
                                                                <span
                                                                    @if($tarefa->prioridade == 'baixa')
                                                                        class="badge badge-info"
                                                                    @elseif($tarefa->prioridade == 'media')
                                                                        class="badge badge-warning"
                                                                    @elseif($tarefa->prioridade == 'alta')
                                                                        class="badge badge-danger"
                                                                    @endif
                                                                > {{ $tarefa->prioridade }}</span>
                                                                <button type="button" class="btn btn-tool" onclick="modal_tarefa('{{ $tarefa }}','{{ $tarefa->ciclo->label}}')">
                                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB2klEQVRIieWWQUgVURiFz39nRgpn51wf5D4FCdoYhFDtjSAXtZZAV0aWtnaf5iJs+SAIEVy0aVHLKFKwjQjmxqXKc+bV5vkmGeceF77iUfOgO3hX71/+h3u+uZf/3jlAt5WUWbSg9TSARwIokm+eJclLAegUvKD1KoCHbQYk+X42Se45A7+KoisnIvv/CCQ9cnimXv/+v17KBnyi1I1CQUQyzxux8bIC9wDbHST6xuw4Az8+OtoDsN7eaw3V1tMk+eYMDACNOL4DoAryB4CfJFcaQTBq69N9VeoBWdY6bJK3lQiNUp/marVj5+DFSuUuyTWQl1qt1ADjz+P4gzPwstZhKhK3QX9XSqW0zc6tpvoXcKsACgKXPdJqsq3AApgOfeZ5XqhdCDhX6jOA9O8+gRS+v16w5GLAc7XasQHGBWi2/oEk0KTIfdvJLnWdXlQqvTg9vSmkMAi+lrlO3VfWRz0P9IT9/VUxZowiAuBjIwgm5g8OmjY+vi04jKIvIEcof775QZhlQwSu2+Quq6leHBi4CpGipHFtqa/PXQIxWTbcQRLjeYPOwL4xG0XHKQCR55vOwDNJckiRt+1wOX9E3s3W67s2XuUCfRRNisgUACig+iSOX9sG+u6rMx1AtffsWN05AAAAAElFTkSuQmCC">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="card" style="background: #F4F4F4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;" >
                                                <p class="text-task">Ao iniciar a tarefa, ela será atualizada para cá!</p>
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <!-- Done -->
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
        </div>
    </section>
    <div class="modal fade" id="modal-add" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 60% !important;">
            <form id="contact" action="{{ route('tarefas.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                    <div class="modal-header">
                        <b style="color: #591616">Criar  <small>&nbsp;Tarefa</small></b>
                        <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Título</label>
                                        <input type="text" name="titulo" id="titulo" required placeholder="Insira o título da tarefa" autocomplete="on">
                                    </div>
                                    <div class="col-lg-8">
                                        <label>Descrição</label>
                                        <input type="text" name="descricao" id="descricao" required placeholder="Insira a descricao da tarefa" autocomplete="on">
                                    </div>
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Prioridade</label>
                                        <select name="prioridade" id="prioridade" required>
                                            <option value="baixa">Baixa</option>
                                            <option value="media">Média</option>
                                            <option value="alta">Alta</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Complexidade</label>
                                        <select name="complexidade" id="complexidade" required>
                                            <option value="leve">Leve</option>
                                            <option value="moderada">Moderada</option>
                                            <option value="alta">Alta</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Ciclo</label>
                                        <select name="ciclo_id" id="ciclo_id" required>
                                            @foreach($ciclos as $ciclo)
                                                <option value="{{ $ciclo->id }}">{{ ucfirst($ciclo->label) }} &nbsp;(pausa: {{ $ciclo->tempo_pausa }} min e foco: {{ $ciclo->tempo_foco }} min)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Quantidade de ciclos</label>
                                        <input type="number" min="1" name="qtd_ciclos" id="qtd_ciclos" placeholder="Quantidade de ciclos" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <hr>
                            </div>
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3" style="padding: 25px;">
                                <button type="submit" class="button">Criar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-tarefa" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #ffffffeb !important; backdrop-filter: blur(5px); border-radius: 25px;">
                <div class="modal-header">
                    <b style="color: #591616">Tarefa  &nbsp;<small id="tarefa-id"></small></b>
                    <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Título&nbsp;&nbsp;</span>
                            <span id="tarefa-titulo"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Descrição&nbsp;&nbsp;</span>
                            <span id="tarefa-descricao"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Complexidade&nbsp;&nbsp;</span>
                            <span style="text-transform:capitalize;" id="tarefa-complexidade"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Prioridade&nbsp;&nbsp;</span>
                            <span style="text-transform:capitalize;" id="tarefa-prioridade"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Tipo de ciclo&nbsp;&nbsp;</span>
                            <span style="text-transform:capitalize;" id="tarefa-ciclo"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Quantidade de ciclos&nbsp;&nbsp;</span>
                            <span id="tarefa-qtd_ciclos"></span>
                        </div>
                        <div class="col-lg-6">
                            <span style="color: #591616; font-weight: 500;">Tempo a tarefa&nbsp;&nbsp;</span>
                            <span id="tarefa-tempo"></span><span> &nbsp;min</span>
                        </div>
                        <div class="col-lg-12">
                            <br>
                            <hr>
                        </div>
                        <div class="col-lg-2" style="padding-left: 25px;">
                            <small>
                                <button type="submit" class="button-delete" data-bs-dismiss="modal">Deletar</button>
                            </small>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        function modal_create(){
            $('#modal-add').modal('show');
        };
        function modal_tarefa(dados,ciclo){
            tarefa = JSON.parse(dados);
            document.getElementById("tarefa-id").innerHTML = tarefa['id'];
            document.getElementById("tarefa-titulo").innerHTML = tarefa['titulo'];
            document.getElementById("tarefa-descricao").innerHTML = tarefa['descricao'];
            document.getElementById("tarefa-complexidade").innerHTML = tarefa['complexidade'];
            document.getElementById("tarefa-prioridade").innerHTML = tarefa['prioridade'];
            document.getElementById("tarefa-qtd_ciclos").innerHTML = tarefa['qtd_ciclos'];
            document.getElementById("tarefa-ciclo").innerHTML = ciclo;
            document.getElementById("tarefa-tempo").innerHTML = tarefa['tempo'];
            $('#modal-tarefa').modal('show');
        };

        function timer_function(){
            var action = document.getElementById('img-start').name;
            if(action == 'start'){
                $('#img-start').attr('src','../assets/pausa.png');
                $('#img-start').attr('name','stop');
                $('#text-start').html('&nbsp;STOP');
                if ($("input[type='radio']:checked").val()) {
                    var tarefa = JSON.parse($("input[type='radio']:checked").val());
                    var id = tarefa['id'];
                    $.post("{{route('tarefas.refresh')}}", {id: id,_token: '{{csrf_token()}}'}, function(data){
                        $("#div-cards").load(location.href + " #div-cards");
                        setTimeout(function() {
                            $("#rb"+id).prop("checked", true);
                            $('input[type=radio]').attr("disabled",true);
                        }, 1000);

                    });
                }
            }else{
                $('#img-start').attr('src','../assets/botao-play-ponta-de-seta.png');
                $('#img-start').attr('name','start');
                $('#text-start').html('&nbsp;START');
            }
        };

        // Pomodoro Timer
        var pomodoro = {
            init: function() {

                this.domVariables();
                this.timerVariables();
                this.bindEvents();
                this.updateAllDisplays();
                this.requestNotification();
            },
            // Define notifications to be used by Pomodoro
            breakNotification: undefined,
            workNotification: undefined,
            domVariables: function() {

                // Toggle timer buttons
                this.toggleTimerBtns = document.getElementsByClassName( "toggle-timer" );

                // Timer display
                this.sessionLengthDisplay = document.getElementById( "session-length" );
                this.breakLengthDisplay   = document.getElementById( "break-length" );

                // Countdown
                this.countdownDisplay   = document.getElementById( "countdown" );
                this.typeDisplay        = document.getElementById( "type" );
                this.resetCountdownBtn  = document.getElementById( "reset-session" );
                this.stopCountdownBtn   = document.getElementById( "stop-session" );
                this.startCountdownBtn  = document.getElementById( "start-session" );
                this.countdownContainer = document.getElementById( "countdown-container" );
            },
            timerVariables: function() {

                // Initial Length values
                this.sessionLength =  $('#foco-start').html();
                this.breakLength   =  $('#pausa-start').html();

                // Define the variable that includes the setinterval method
                // If the clock is counting down, the value will be true, and
                // the counter will be stopped on click.
                this.timeinterval = false;
                this.workSession = true;
                this.pausedTime = 0;
                this.timePaused = false;
                this.timeStopped = false;
                // Request permission
            },
            bindEvents: function() {

                // Bind start date to #countdown and countdown buttons
                this.countdownDisplay.onclick  = pomodoro.startCountdown;
                this.resetCountdownBtn.onclick = pomodoro.resetCountdown;
                this.stopCountdownBtn.onclick  = pomodoro.stopCountdown;
                this.startCountdownBtn.onclick = pomodoro.startCountdown;

            },
            updateAllDisplays: function() {

                // Change HTML of displays to reflect current values
                pomodoro.sessionLengthDisplay.innerHTML = this.sessionLength;
                pomodoro.breakLengthDisplay.innerHTML   = this.breakLength;
                pomodoro.countdownDisplay.innerHTML     = this.sessionLength + ":00";
                pomodoro.resetVariables();

            },
            requestNotification: function() {
                if (!("Notification" in window)) {
                return console.log("This browser does not support desktop notification");
                }
            },

            // Reset variables to initial values
            resetVariables: function() {
                pomodoro.timeinterval = false;
                pomodoro.workSession = true;
                pomodoro.pausedTime = 0;
                pomodoro.timeStopped = false;
                pomodoro.timePaused = false;
            },
            startCountdown: function() {

                pomodoro.disableButtons();
                // Toggle typeDisplay and background color between work and break
                pomodoro.displayType();

                // Pause pomodoro if countdown is currently running, otherwise start
                // countdown
                if ( pomodoro.timeinterval !== false ) {
                    pomodoro.pauseCountdown();
                } else {
                    // Set start and end time with system time and convert to
                    // miliseconds to correctly meassure time ellapsed
                    pomodoro.startTime = new Date().getTime();

                    // Check if pomodoro has just been unpaused
                    if ( pomodoro.timePaused === false ) {
                        pomodoro.unPauseCountdown();
                    } else {
                        pomodoro.endTime = pomodoro.startTime + pomodoro.pausedTime;
                        pomodoro.timePaused = false;
                    }

                    // Run updateCountdown every 990ms to avoid lag with 1000ms,
                    // Update countdown checks time against system time and updates
                    // #countdown display
                    pomodoro.timeinterval = setInterval(pomodoro.updateCountdown,990);
                }

            },
            updateCountdown: function() {

                // Get differnce between the current time and the
                // end time in miliseconds. difference = remaining time
                var currTime = new Date().getTime();
                var difference = pomodoro.endTime - currTime;

                // Convert remaining milliseconds into minutes and seconds
                var seconds = Math.floor( ( difference/1000 ) % 60 );
                var minutes = Math.floor( ( difference/1000 ) / 60 % 60 );

                // Add 0 to seconds if less than ten
                if ( seconds < 10 ) { seconds = "0" + seconds; }

                // Display remaining minutes and seconds, unless there is less than 1 second
                // left on timer. Then change to next session.
                if ( difference > 1000 ) {
                pomodoro.countdownDisplay.innerHTML = minutes + ":" + seconds;
                } else {
                pomodoro.changeSessions();
                }

            },
            changeSessions: function() {

                // Stop countdown
                clearInterval( pomodoro.timeinterval );

                pomodoro.playSound();

                // Toggle between workSession being active or not
                // This determines if break session or work session is displayed
                if ( pomodoro.workSession === true ) {
                    pomodoro.workSession = false;
                } else {
                    pomodoro.workSession = true;
                }

                // Stop countdown
                pomodoro.timeinterval = false;
                // Restart, with workSession changed
                pomodoro.startCountdown();

            },
            pauseCountdown: function() {

                    // Save paused time to restart clock at correct time
                    var currTime = new Date().getTime();
                    pomodoro.pausedTime = pomodoro.endTime - currTime;
                    pomodoro.timePaused = true;

                    // Stop the countdown on second click
                    clearInterval( pomodoro.timeinterval );


                    // Reset variable so that counter will start again on click
                    pomodoro.timeinterval = false;
            },
            unPauseCountdown: function() {
                if ( pomodoro.workSession === true ) {
                    pomodoro.endTime = pomodoro.startTime + ( pomodoro.sessionLength * 60000 );
                } else {
                    pomodoro.endTime = pomodoro.startTime + ( pomodoro.breakLength * 60000 );
                }
            },
            resetCountdown: function(){
                // Stop clock and reset variables
                clearInterval( pomodoro.timeinterval );
                pomodoro.resetVariables();
                // Restart variables
                pomodoro.startCountdown();
            },
            stopCountdown: function() {
                // Stop timer
                clearInterval( pomodoro.timeinterval );
                // Change HTML
                pomodoro.updateAllDisplays();
                // Reset Variables
                pomodoro.resetVariables();
                pomodoro.unDisableButtons();
            },
            displayType: function() {
                // Check what session is running and change appearance and text above
                // countdown depending on session (break or work)
                if ( pomodoro.workSession === true ) {

                    // pomodoro.typeDisplay.innerHTML = "Work session";
                    $('#pomodoro-status').html('<img src="../assets/Ellipse_1.png" style="height: 45px;"> <img src="../assets/Line_1.png"> <img src="../assets/Ellipse_2.png" style="height: 45px;"><br><span style="margin-left: 5px; color:#591616; font-weight: 300;">Foco</span> <span style="margin-left: 57px; color:#591616; font-weight: 300;">Descanso</span>');
                    pomodoro.countdownContainer.className = pomodoro.countdownContainer.className.replace( "break", "" );
                } else {
                    $('#pomodoro-status').html('<img src="../assets/Ellipse_2.png" style="height: 45px;"> <img src="../assets/Line_1.png"> <img src="../assets/Ellipse_1.png" style="height: 45px;"><br><span style="margin-left: 5px; color:#591616; font-weight: 300;">Foco</span> <span style="margin-left: 57px; color:#591616; font-weight: 300;">Descanso</span>');
                    // pomodoro.typeDisplay.innerHTML = "Break";
                    if ( pomodoro.countdownContainer.className !== "break" ) {
                        pomodoro.countdownContainer.className += "break";
                    }
                }

            },
            playSound: function() {
                var mp3 = "http://soundbible.com/grab.php?id=1746&type=mp3";
                var audio = new Audio(mp3);
                audio.play();
            },
            disableButtons: function() {
                for (var i = 0; i < pomodoro.toggleTimerBtns.length; i++) {
                    pomodoro.toggleTimerBtns[i].setAttribute("disabled", "disabled");
                    pomodoro.toggleTimerBtns[i].setAttribute("title", "Stop the countdown to change timer length");
                }
            },
            unDisableButtons: function() {
                for (var i = 0; i < pomodoro.toggleTimerBtns.length; i++) {
                    pomodoro.toggleTimerBtns[i].removeAttribute("disabled");
                    pomodoro.toggleTimerBtns[i].removeAttribute("title");
                }
            }
        };

        // Initialise on page load
        pomodoro.init();
    </script>
@endsection
