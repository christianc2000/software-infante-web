<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Events\PushNotificationEvent;
use App\Models\ContenidoPrueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushNotificationPruebaController extends Controller
{
    public function index()
    {
        $postNotifications = auth()->user()->unreadNotifications;

        return view('pruebas.notificaciones', compact('postNotifications'));
    }
    public function link(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string'
        ]);

        $contenidop = ContenidoPrueba::create([
            'nombre' => $request->nombre,
            'user_id' => Auth::user()->id
        ]);
     
        //  auth()->user()->notify(new PruebaNotification($contenidop));
        event(new PushNotificationEvent($contenidop));
       
      /*  if (count(Auth::user()->expotokens)>0) {
          
        }*/
        return redirect()->back()->with('message', 'Notificación creada');
    }
    public function markNotification(Request $request)
    {
        return $request;
      /*  auth()->user()->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('contenido', $request->input('id'));
            })->markAsRead();
        //event(new MyEvent());
        return response()->noContent();*/
    }
}
