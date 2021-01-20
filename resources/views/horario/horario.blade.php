@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="text-align: center"><h1>Menú de Horario y Turno</h1></div>

        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="text-align: center">
            <a href="/horarioManual" class="mt-5 btn btn-primary btn-lg btn-block">Ingresar Horario manual</a>
        </div>
        <div class="col-lg-4"></div>

        <!--<div class="col-lg-4"></div>
        <div class="col-lg-4" style="text-align: center">
            <a href="/listahorario" class="mt-5 btn btn-primary btn-lg btn-block">Ingresar Horario manual 2</a>
        </div>
        <div class="col-lg-4"></div>-->

        <div class="col-lg-4"></div>
        <div class="col-lg-4"  style="text-align: center">
            <a href="/horarioAutomatico" class="mt-4 mb-5 btn btn-success btn-lg btn-block">Generar Horario automático</a>
        </div>
        <div class="col-lg-4"></div>
        
        <div class="col-lg-4"></div>
        <div class="col-lg-4"  style="text-align: center">
            <a href="/interfazTurnos" class="mt-5 btn btn-primary btn-lg btn-block"><b>Turnos</b></a>
        </div>
        <div class="col-lg-4"></div>
        

        <div class="col-lg-4"></div>
        <div class="col-lg-4"  style="text-align: center">
            <a href="/Inicio" style="font-size:1.5em;margin-top: 5em; color: #4340e7" class="btn btn-lg btn-block">Volver a Inicio</a>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>


@endsection

<script>
    window.onload = function() {
    document.getElementById("nombrePag").textContent="Menú horarios";
    }
</script>