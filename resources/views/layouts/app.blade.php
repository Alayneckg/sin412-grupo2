</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Tomato Task</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="shortcut icon" href="../assets/tomato tasks logo icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->
        <style>
            * {
                font-family: 'Outfit', sans-serif !important;
                font-weight: 400;
            }
            html{
                height: 100%;
            }
            body{
                background-image: url("../assets/tomato\ taks\ logo\ white\ 2.png");
                background-repeat: no-repeat;
                background-position: right bottom;
                background-color: #f4f4f4;
                align-items: center;
                height: 100%;
                min-height: 100%;
            }
            .main-sidebar{
                background-color: #8d2619;
            }
            [class*=sidebar-dark] .brand-link{
                border-bottom: 0;
            }
            [class*=sidebar-dark] .user-panel{
                border-bottom: 0;
                margin-top: 20px;
            }
            .brand-link .brand-image {
                float: left;
                line-height: .8;
                margin-left: -0.2rem;
                margin-right: 0.5rem;
                margin-top: -3px;
                max-height: 5rem;
                width: auto;
            }
            [class*=sidebar-dark] .brand-link {
                border-bottom: 0;
                height: 6rem;
            }

            .content-wrapper{
                background-color: transparent;
            }
            .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
                background-color: transparent;
                color: #fff;
                border-right: solid 4px white;
                box-shadow: none;
                /* text-decoration: underline; */
                border-radius: 0;
            }
        </style>
        @yield('css')

    </head>
    <body class="sidebar-mini sidebar-collapse" style="height: auto;">

        <div class="wrapper">
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="../../index3.html" class="brand-link">
                    <img src="../assets/logo_white.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; height: 4rem; width: 4rem;">
                    <div style="height:100%; display: flex; justify-content: center;  align-items: center;">
                        <img src="../assets/logo_name_white.png" class="brand-text font-weight-light" style="width: 180px; height: 32px">
                    </div>
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="../widgets.html" class="nav-link">
                                    <i class="nav-icon"><img src="../assets/botao-de-menu-de-tres-linhas-horizontais.png" style="width: 1.8rem;" alt="Pomodoro board"></i>
                                </a>
                                <br>
                            </li>
                            <li class="nav-item" >
                                <a href="{{ route('dashboard') }}" @if(Request::is('dashboard')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon"><img src="../assets/pomodoro-technique.png" style="width: 1.8rem" alt="Pomodoro board"></i>
                                    &nbsp;&nbsp;<p @if(Request::is('dashboard')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Pomodoro board </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tarefas') }}" @if(Request::is('tarefas')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon"><img src="../assets/lista.png" style="width: 1.8rem" alt="Histórico de tarefas"></i>
                                    &nbsp;&nbsp;<p @if(Request::is('tarefas')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Histórico de tarefas </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('analytics') }}" @if(Request::is('analytics')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon"><img src="../assets/pie-chart (1).png" style="width: 1.8rem" alt="Analytics"></i>
                                    &nbsp;&nbsp;<p @if(Request::is('analytics')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Analytics </p>
                                </a>
                            </li>
                            @if(Auth::user()->papel == 'admin')
                            <li class="nav-item">
                                <a href="{{ route('analytics.admin') }}" @if(Request::is('analytics.admin')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon">
                                        <img style="width: 1.8rem" alt="Analytics Admin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAEEklEQVR4nO2bT4gcRRjF3zfJaiQiXjU3PQQ8ekg8eRTBizdhRa8S8BDwoJhLjIgxuAlq1kli1MBiiAe9J8SDVwVvKiwGQlAQUQluVtxV8/PQNW5NdVXP9O501/RkHixUd/3p915VfV1dNWvKBKAn6Vl3+YmZ3c7FJQuA59nCc7l49HI9WNJDXvrhXCRskABOSDosaSEXmZbwt6RTZvayNGzAhqS7crFqGZtmdrc0bAD5+LQPMzNJ2l2VOWuIdXLOIDgVmBuQm0BuzA3ITSA35gbkJpAbnTEAOAFsMh42gbfGaTe6EpzGhRCwJuneGlX+X+56bZQ0dmYESFqWtFmjfL3vGn/81KqYGYABp2PzIFI2rbGLBjjxy6lAECk/OwY48ecCzf07woBEz58DejNvgBP/fkS8ufzpMgDYAxwADgL37LCtHnA+EL88EO/KTIcBrqdeAm56Ta8BRyi2xOu21wM+DMSf9sWP0tGaAU78UEAKsALsqtFeD/goaOO9UPwoHa0Y4MSfCch+B3y7HROc+I+Duu/GxLvyG67MRi2NkzAgIb7vRPQoj4pKE1ydC0Gdd1LiXZ3jwC3gzVYNIP5q+gBvvhNftV0CSpuzCfH9KvFjcGzGgHHEB2UrTQB2RcSf2on4kRp3aMBSQPZMFVniU2UFWHB/K5MW757bmAFr44r36sRMuA7cCO6drMun4pmNGfA6ReBZqtNTCRN8LNXlMuJ5zRiwQ1IGHAZ+9Sj8DLzQwLNKGqdmR4giCO6XdFvSqpn928AzShprGeCG96IjecnMpvrDKUSlxlFTIDJfFxvmO3HENI71UeJ6vi/Jn5ez9ZueqhEALAbReaxX3bRh2yNAXqyQdFbSoa7N/xSiP5CI4KK2hnzngl8VpuY12AZiGv0pcMsr+ECLvFoBsM+7/GOQ8A1Y9dJPNc6offiaVku5wKtekPwNONAet2ZBsSH7u6fvlUGeHwPuk/S9pAfdrX8kXZb0jaT1NglPEHslPSrpSUmDnacfJT1iZmvS8OtNrtcvS7q/RZJt4qakJ8zs68GNoXWAmX0l6TFJX7RMrA1clXTQFy8FI8AHsF/S45L2SdrTLLfG8JeknyR9aWblwDfHHOkp0DSABRVfl+uSLszS8nokKHZ+P/fey+fZxnlhJxERf+eYUCF+9k0YQ/zsmuDEfxYI/SWRho7uOEWR6PmzwGve9VHK54XdHwkJ8X2KHeajgQGxQ9PumpAQf5KtHzMNGeDuzYYJCfFvB2VKBrj73TaBeMA7HikXNcDlxQ5NuxEYgRcD4m8kyiUNcPkxEyZ+GtXEsPrTSx8zsyOJcte89A9hpvs2OKTiHGKAiZ9GTXxIuWH6tKR1M7tSUa6n4qBVki6m/n3etfeMu/x00h9N/wHFF245tjEgiwAAAABJRU5ErkJggg==">
                                    </i>
                                    &nbsp;&nbsp;<p @if(Request::is('analytics.admin')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Analytics <small>Admin</small></p>
                                </a>
                            </li>
                            @endif
                            <!-- <li class="nav-item">
                                <a href="{{ route('calendario') }}" @if(Request::is('calendario')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon"><img src="../assets/calendar.png" style="width: 1.8rem" alt="Calendário"></i>
                                    &nbsp;&nbsp;<p @if(Request::is('calendario')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Calendário </p>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="{{ route('configuracoes') }}" @if(Request::is('configuracoes')) class="nav-link active" @else class="nav-link" @endif>
                                    <i class="nav-icon"><img src="../assets/settings.png" style="width: 1.8rem" alt="Configurações"></i>
                                    &nbsp;&nbsp;<p @if(Request::is('configuracoes')) style="text-decoration: underline solid white; text-underline-offset: 0.3em;" @endif> Configurações </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar">
                    <nav class="mt-2" style="position: absolute; bottom: 0; margin-bottom: 15px;">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" >
                                        <i class="nav-icon"><img src="../assets/logout.png" style="width: 1.8rem" alt="Logout"></i>
                                        <p>&nbsp;&nbsp; Log off </p>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
            </aside>

            <div class="content-wrapper">
                @yield('content')

            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.2
                </div>
                <strong>Tomato Task </strong> All rights reserved.
            </footer>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    @yield('scripts')
</html>


