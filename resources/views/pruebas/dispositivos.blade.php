@extends('app')

@section('title')
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        NOMBRE DEL NIÑO
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('perfil')}}">CONTACTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('tokens')}}">LLAMADAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dispositivos')}}">GALERÍA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('plan')}}">Plan</a>
          </li>
      </ul>
    </div>
  </nav>
@endsection
@section('content')

<br>
<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card" style="width: 40%;">
        <a href="" class="btn btn-dark m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir hijo.</a>


        <div class="card-header">
          <h4 class="d-flex justify-content-center"><u><strong>DISPOSITIVOS DE HIJOS</strong></u></h4>

        </div>
        <div class="card-body">
            <div class="accordion" id="accordionExample">

                @php
                     $a=0;
                @endphp
                @foreach ($tokens as $token)
                @php
                    $a=$a+1;

                    $hijo=App\Models\Hijo\Hijo::where('id',$token['id_hijo'])->first();
                @endphp
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading{{$a}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$a}}" aria-expanded="true" aria-controls="collapse{{$a}}">
                      Dispositivo de: {{$hijo->name}} {{$hijo->apellido}}
                    </button>
                  </h2>
                  <div id="collapse{{$a}}" class="accordion-collapse collapse" aria-labelledby="heading{{$a}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <label for="" class="form-label">Nombre y apellido: <strong>{{$hijo->name}} {{$hijo->apellido}}</strong> </label><br>
                        <label for="" class="form-label">Alias: <strong>{{$hijo->alias}}</strong> </label><br>
                        <label for="" class="form-label">Celular: <strong>{{$hijo->celular}}</strong> </label><br>
                        <label for="" class="form-label">Edad: <strong>{{$hijo->edad}}</strong> </label><br>

                          <div class="d-flex container justify-content-center">
                            <div class="row">
                              <div class="col m-1">
                                <form action="{{ route('hijoContactos', ['id'=>$hijo->id]) }}">
                                  <button class="btn btn-primary">Contactos</button>
                                </form>
                              </div>
                              <div class="col m-1">
                                <form action="{{ route('hijoLlamadas', ['id'=>$hijo->id]) }}">
                                  <button class="btn btn-primary">Llamadas </button>
                                </form>
                              </div>
                              <div class="col m-1">
                                <form action="{{ route('hijoGaleria', ['id'=>$hijo->id]) }}">
                                  <button class="btn btn-primary">Galeria</button>
                                </form>
                              </div>
                              <div class="col m-1">
                                <form action="{{ route('hijoContenido', ['id'=>$hijo->id]) }}">
                                  <button class="btn btn-primary">Contenido</button>
                                </form>
                              </div>

                              <div class="col m-1">
                                <form action="{{ route('hijoUbicacion', ['id'=>$hijo->id]) }}">
                                  <button class="btn btn-primary">Ubicacion</button>
                                </form>
                              </div>
                            </div>

                          </div>



                    </div>
                  </div>
                </div>
                @endforeach

              </div>
        </div>
    </div>

</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo dispositivo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('crear_hijo')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" >
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido" >
                </div>
                <div class="mb-3">
                    <label for="alias" class="form-label">Alias</label>
                    <input type="text" name="alias" class="form-control" id="alias" >
                  </div>
                <div class="mb-3">
                <div class="mb-3">
                  <label for="celular" class="form-label">Celular</label>
                  <input type="text" name="celular" class="form-control" id="celular">
                </div>

                <button type="submit" class="btn btn-dark">Guardar dispositivo</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@stop

@section('css')




@stop

@section('js')
<script src=""></script>

@stop

