<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function calculate( Request $request)
    {
        $data = request()->except('_token');

        $date_start = new \DateTime($data['fecha_inicial']);
        $date_end = new \DateTime($data['fecha_final']);
        $periodicidad = $data["periodicidad"] == 1 ? false : $data["periodicidad"]-1;
        $periodicidad = $periodicidad ? '+'.$periodicidad.' month ': '+'.$data["dia_corte"].' day';
        $intervalos = $periodicidad;

        $interval = $intervalos;
        $date_interval = \DateInterval::createFromDateString($interval);

        $period = new \DatePeriod($date_start, $date_interval, $date_end);

        $corte = $data['dia_corte'];
        $inicialAux = null;
        foreach ($period as $key => $fecha) {
            $inicial = empty($inicialAux) ? $fecha->format('d-m-Y') : $inicialAux;
            $fechaFinal = date("d-m-Y",strtotime($inicial.$periodicidad));
            if($data["periodicidad"] == 1) {
                $inicial = $fecha->modify('first day of this month')->format('d-m-Y');
                $fechaFinal = $fecha->modify('last day of this month')->format('d-m-Y');
            }
            $fechaImpresion = explode('-', $fechaFinal);
            @$fechaImpresion[0] = $data['dia_impresion'];

            $fechas[] = [
                'fecha_inicial' => $inicial,
                'fecha_final' => $fechaFinal,
                "dia_impresion" => implode('-', $fechaImpresion)
            ];
            $inicialAux = date('d-m-Y', strtotime($fechaFinal. '+ 1 day'));
        }
        
        return view('grid', compact('fechas'));
    }

    function vista_uno(Request $request) {
        return view('fechas.fechas');
    }
}
