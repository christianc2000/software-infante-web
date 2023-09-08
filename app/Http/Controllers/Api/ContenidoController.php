<?php

namespace App\Http\Controllers\Api;

use App\Events\MyEvent;
use App\Events\NotificationContenidoEvent;
use App\Http\Controllers\Controller;
use App\Models\Contenido\Contenido;
use App\Models\Hijo\Hijo;
use App\Models\Tutor\Tutor;
use App\Models\User;
use App\Notifications\NotificationContenido;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ContenidoController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Lista de Contenido',
            'data' => Contenido::all()
        ]);
    }
    public function quantity_of_content(Request $request)
    {
        // return $request;
        $user = User::findOrFail($request->user()->id);
        $tutor_id = Tutor::where('user_id', $user->id)->pluck('id');
        $hijos_id = Hijo::whereIn('id_tutor', $tutor_id)->pluck('id');
        $contenidos = Contenido::whereIn('hijo_id', $hijos_id)->get('url');
        $cant = $contenidos->count('url');
        return response()->json([
            'message' => 'Lista de Contenido',
            'contenido' => $contenidos,
            'cantidad' => $cant
        ]);
    }
    public function contenidoHijo(Request $request)
    {
        // return $request;
        // $hijo = Hijo::findOrFail($request->hijo_id);
        // $contenidos = $hijo->contenidos;
        $contenidos = Contenido::where('hijo_id', $request->hijo_id)->where('captura', false)->get();
        return response()->json([
            'message' => 'Lista de Contenido del hijo',
            'data' => $contenidos
        ]);
    }
    public function contentBoyCapture(Request $request)
    {
        // return $request;
        // $hijo = Hijo::findOrFail($request->hijo_id);
        // $contenidos = $hijo->contenidos;
        $contenidos = Contenido::where('hijo_id', $request->hijo_id)->where('captura', true)->get();
        return response()->json([
            'message' => 'Lista de Contenido del hijo',
            'data' => $contenidos
        ]);
    }
    public function contenidoHijos()
    {
        $user = User::all()->find(Auth::user()->id);
        if ($user->tipo == "T") {

            $uc = new Collection();
            foreach ($user->tutor->hijos as $hijo) {
                $con = new Collection();
                $hijo = Hijo::all()->find($hijo->id);
                $contenidos = Contenido::where('hijo_id', $hijo->id)->get();
                foreach ($contenidos as $contenido) {
                    $con->push($contenido);
                }
                $uc->push([
                    'hijo' => $hijo,
                    'contenidos' => $con
                ]);
            }
            return response()->json([
                'message' => 'Contenidos de los hijos',
                'data' => $uc
            ]);
        } else {
            return response()->json([
                'message' => 'Usuario no autorizado'
            ]);
        }
    }
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'hijo_id' => 'required|numeric|exists:hijos,id',
            'fecha' => 'required|string',
            'tipo_contenido' => 'required|string',
            'contenido' => 'required|string',
            'path' => 'required|string',
            'url' => 'required|string',
            // 'categoria_id' => 'required|numeric|exists:categorias,id',
        ]);
        //
        // return 'entra///////*/';

        //  Notification::sendNow(auth()->user, new NotificationContenido($contenido));
        $hijo = Hijo::find($request->hijo_id);

        $user = User::find($hijo->tutor->user->id);
//return $user;
        $contenido = Contenido::create($request->all());

        //  Notification::sendNow(auth()->user, new NotificationContenido($contenido));
        //event(new PruebaEchoEvent($user,"hola usuario "));
        event(new NotificationContenidoEvent($user, $contenido));
        //event(new MyEvent($contenido));

        return response()->json([
            'message' => '¡Contenido creado exitosamente!',
            'data' => $contenido
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hijo_id' => 'nullable|numeric|exists:hijos,id',
            'fecha' => 'required|string',
            'nombre' => 'required|string',
            'path' => 'required|string',
            'url' => 'required|string',
            'categoria_id' => 'nullable|numeric|exists:categorias,id',
        ]);
        $contenido = Contenido::findOrFail($id);
        if (isset($contenido)) {
            $contenido->update($request->all());
            return response()->json([
                'message' => '¡Contenido actualizado exitosamente!',
                'data' => $contenido
            ]);
        } else {
            return response()->json([
                'message' => 'Error contenido no existe'
            ], 403);
        }
    }
    public function show($id)
    {
        $user = Auth::user();
        if ($user->tipo == "T") {
            $contenido = Contenido::findOrFail($id);
            if (isset($contenido)) {
                return response()->json([
                    'message' => '¡Contenido encontrado exitosamente!',
                    'data' => $contenido
                ]);
            } else {
                return response()->json([
                    'message' => 'Error contenido no existe'
                ], 403);
            }
        } else {
            return response()->json([
                'message' => 'Usuario no autorizado'
            ], 403);
        }
    }
    public function destroy($id)
    {
        $contenido = Contenido::findOrFail($id);
        if (isset($contenido)) {
            $contenido->delete();
            return response()->json([
                'message' => '¡Contenido eliminado exitosamente!',
                'data' => $contenido
            ]);
        } else {
            return response()->json([
                'message' => 'Error contenido no existe'
            ], 403);
        }
    }
}
