<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contacto\Contacto;
use App\Models\Llamada\Llamada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LlamadaController extends Controller
{
    public function llamadasContacto($id)
    {
        $user = Auth::user();
        if ($user->tipo == "T") {
            $contacto = Contacto::findOrFail($id);
            if (isset($contacto)) {
                return response()->json([
                    'message' => 'Lista de llamadas del contacto',
                    'data' => $contacto->llamadas
                ]);
            } else {
                return response()->json([
                    'message' => 'Error Contacto no encontrado'
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Usuario no autorizado'
            ]);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'aceptada'=>'required|boolean',
            'fecha'=>'required|date',
            'tiempo'=>'required|time',
            'contacto_id'=>'required|exists:llamadas,id',
        ]);
        $llamada = Llamada::create($request->all());
        return response()->json([
            'message' => '¡Llamada creada exitosamente!',
            'data' => $llamada
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'aceptada'=>'required|boolean',
            'fecha'=>'required|date',
            'tiempo'=>'required|time',
            'contacto_id'=>'required|exists:llamadas,id',
        ]);
        $llamada = Llamada::findOrFail($id);
        if (isset($llamada)) {
            $llamada->update($request->all());
            return response()->json([
                'message' => '¡Llamada actualizado exitosamente!',
                'data' => $llamada
            ]);
        } else {
            return response()->json([
                'message' => 'Error contenido no existe'
            ], 403);
        }
    }
    public function show($id)
    {
        $user=Auth::user();
        if(isset($user)){
            $llamada=Llamada::findOrFail($id);
            if(isset($llamada)){
                return response()->json([
                    'message' => '¡Llamada encontrado exitosamente!',
                    'data' => $llamada
                ]);
            }else{
                return response()->json([
                    'message' => 'Error llamada no existe'
                ], 403);
            }
        }else{
            return response()->json([
                'message' => 'Usuario no autorizado'
            ]);
        }
    }
    public function destroy($id)
    {
        $user = Auth::user();
        if ($user->tipo == "T") {
            $llamada = Llamada::findOrFail($id);
            if (isset($llamada)) {
                $llamada->delete();
                return response()->json([
                    'message' => '¡Llamada eliminada exitosamente!',
                    'data' => $llamada
                ]);
            } else {
                return response()->json([
                    'message' => '¡Error llamada no existe!'
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Usuario no autorizado'
            ]);
        }
    }
    public function get_all_calls_from_child(Request $request){
        $contactos_id= Contacto::where('hijo_id', $request->hijo_id)->pluck('id');
        $llamadas = Llamada::select([
            'llamadas.id',
            'llamadas.aceptada',
            'llamadas.tiempo',
            'llamadas.fecha',
            'contactos.nombre',
            'contactos.numero',
        ])
        ->join('contactos', 'contactos.id', 'llamadas.contacto_id')
        ->wherein('llamadas.contacto_id', $contactos_id)
        ->orderBy('llamadas.fecha', 'DESC')
        ->get();
        
        return $llamadas;
    }
}
