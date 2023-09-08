<?php

namespace App\Http\Controllers;
use App\Models\Localizacion\Localizacion;
use App\Models\Token;
use Carbon\Carbon;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiModify(Request $request){
        $x=Localizacion::where('hijo_id',$request->id)->first();
        $x->latitud=$request->latitud;
        $x->longitud=$request->longitud;
        $x->save();
        return response()->json($x,200);
    }

    public function apiShow($token){
        /*$x=Localizacion::find($id);
        return response()->json($x);*/
        $token=Token::where('codigo',$token)->first();
        $token->estado=1;
        $token->fecha_registro=Carbon::now();
        $token->save();

        return response()->json($token);
    }
}
