<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HorariosController extends Controller
{
    public function registrarHorario(){
            return back()->with('message','You added new items, follow next step!');
    }

    public function menuHorario(){
        return view ('horario/horario');
}

    public function horarioManual(){
            $personalrec = DB::select('exec listar_atendedor');
            $turno = DB::select('exec listar_turnos');
            return view ('horario/horarioManual', compact('turno','personalrec'));
    }

    public function horarioAutomatico(){    
            return view ('horario/horarioAutomatico');
    }
}