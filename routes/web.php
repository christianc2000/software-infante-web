<?php

use App\Http\Controllers\PushNotificationPruebaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::post('notification', [PushNotificationPruebaController::class, 'link'])->name('notification.link');
Route::middleware(['auth'])->group(//,'planVerification'])->group(
    function () {

        Route::get('/menu', [App\Http\Controllers\UserController::class, 'menu'])->name('menu');
        Route::get('/perfil', [App\Http\Controllers\UserController::class, 'perfil'])->name('perfil');
        Route::get('/tokens', [App\Http\Controllers\UserController::class, 'tokens'])->name('tokens');
        Route::post('/crearToken', [App\Http\Controllers\UserController::class, 'generarToken'])->name('crearToken');
        Route::get('/dispositivos', [App\Http\Controllers\UserController::class, 'dispositivos'])->name('dispositivos');



        Route::post('/crear_hijo', [App\Http\Controllers\UserController::class,'crear_hijo'])->name('crear_hijo');
        Route::post('/editar_hijo/{id}', [App\Http\Controllers\UserController::class,'editar_hijo'])->name('editar_hijo');
        Route::delete('/eliminar_hijo/{id}', [App\Http\Controllers\UserController::class,'eliminar_hijo'])->name('eliminar_hijo');
        Route::get('/hijoContactos/{id}', [App\Http\Controllers\UserController::class,'hijoContactos'])->name('hijoContactos');
        Route::get('/hijoLlamadas/{id}', [App\Http\Controllers\UserController::class,'hijoLlamadas'])->name('hijoLlamadas');
        Route::get('/hijoGaleria/{id}', [App\Http\Controllers\UserController::class,'hijoGaleria'])->name('hijoGaleria');
        Route::get('/hijoContenido/{id}', [App\Http\Controllers\UserController::class,'hijoContenido'])->name('hijoContenido');
        Route::get('/hijoUbicacion/{id}', [App\Http\Controllers\UserController::class,'hijoUbicacion'])->name('hijoUbicacion');

        Route::post('/crear_hijo', [App\Http\Controllers\UserController::class, 'crear_hijo'])->name('crear_hijo');
        Route::get('markAsRead', function () {
            auth()->user()->unreadNotifications->markAsRead();
            return redirect()->back();
        })->name('markAsRead');

        Route::get('notificaciones',[PushNotificationPruebaController::class,'index'])->name('notification.index');
        Route::post('/mark-as-read', [PushNotificationPruebaController::class,'markNotification'])->name('markNotification');
    }
);

Route::middleware(['auth'])->group(function () {
    Route::get('/plan', [App\Http\Controllers\UserController::class, 'plan'])->name('plan');
    Route::get('/success', [App\Http\Controllers\UserController::class, 'success'])->name('success');
    Route::post('/plan', [App\Http\Controllers\UserController::class, 'checkout'])->name('checkout');

});

Route::get('/pusher', function () {
    return view('pruebas.pruebaBroadcasting');
});

Route::get('/test',function(){

    return "Event has been sent";
});

Route::post('/modLoc',[App\Http\Controllers\ApiController::class,'apiModify']);
Route::get('/modLoc/{id}',[App\Http\Controllers\ApiController::class,'apiShow']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
