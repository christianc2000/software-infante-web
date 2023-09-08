@extends('app')


@section('content')

<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card" style="width: 70%;" >
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-8" width="150px" src="{{ asset('img/pagre.jpg')}}"><span class="font-weight-bold"><h6> {{auth()->user()->name}} {{auth()->user()->apellido}}</h6></span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class=" text-center mb-2">
                        <h1 class="text-dark mb-2">Datos Personales</h1>
                          
                      </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels "> <h4 class="text-muted ">Nombre</h4> </label><h6>{{auth()->user()->name}}</h6>
                    <div class="col-md-6"><label class="labels"><h4 class="text-muted ">Apellido/s</h4></label><h6>{{auth()->user()->apellido}}</h6>
                    </div>
                    <div class="row mt-2">
                    <div class="col-md-12"><label class="labels"><h4 class="text-muted ">Celular</h4> </label><h6>{{auth()->user()->celular}}</h6>
                    <div class="col-md-12"><label class="labels"><h4 class="text-muted ">E-mail</h4> </label><h6>{{auth()->user()->email}}</h6>
                    <div class="col-md-12"><label class="labels"><h4 class="text-muted ">Fecha de Nacimiento</h6> </label><h5>{{auth()->user()->fecha_nacimiento}}</h6>
          
                   
                </div>
                
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
</div>
@stop

@section('css')

 
@stop

@section('js')
  


@stop
  