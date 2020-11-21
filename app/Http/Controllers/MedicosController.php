<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Medicos;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['medicos'] = Medicos::Paginate(5);
        return view('medicos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->except('_token');
        try {
            $execute = DB::select('CALL crear_medico(?, ?, ?)', [$data['nombre'], $data['apellidos'], $data['fecha_nacimiento']]);
        } catch (\Throwable $th) {
            var_dump($th->getMessage()); die();
        }
        
        return redirect('medicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicos $medicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = Medicos::findOrFail($id);

        return view('medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMedico = request()->except(['_token', '_method']);
        Medicos::where('id', '=', $id)->update($datosMedico);

        $medico = Medicos::findOrFail($id);

        return view('medicos.edit', compact('medico'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicos::destroy($id);
        return redirect('medicos');
    }
}
