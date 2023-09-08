@extends('app')

@section('title')
<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
  <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoContactos', $info->id )}}">                                    
            <span class="text-muted">Contacto</span>
        </a>                                        
  </div>
  <span class="menu-arrow d-lg-none"></span>
   <!--<div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoLlamadas', $info->id )}}">                                   
            <span class="text-muted">Llamada</span>
        </a>
    </div>-->
    <span class="menu-arrow d-lg-none"></span>
   <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoContenido', $info->id )}}">                                   
            <span class="text-muted">Contenido</span>
        </a>
    </div>
    <span class="menu-arrow d-lg-none"></span>
   <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoUbicacion', $info->id )}}">                                   
            <span class="text-muted">Ubicación</span>
        </a>
    </div>
    <span class="menu-arrow d-lg-none"></span>
   <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoGaleria', $info->id )}}">                                   
            <span class="text-muted">Galería</span>
        </a>
    </div>									
</div>
@endsection
@section('content')
<br>
<div class="container-fluid d-flex justify-content-center aling-items-center">
    <div class="card" style="width: 60%;">
      <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-5">Lista de Llamadas de {{$info->name}} </h1>
        <!--end::Title-->
       
    </div>
        <div class="card-body py-3">
          
              <table class="table table-hover">
                <thead  style="font-family: Poppins;">
                  <tr class="fw-bolder text-muted bg-light">
                    <th class="ps-4 min-w-8px rounded-start">#</th>
                    <th class="min-w-125px"> Estado </th>
                    <th class="min-w-125px">Fecha</th>
                    <th class="min-w-125px rounded-finish">Duracion</th>
                    
                  </tr>
                </thead>
                <tbody>
                      @php
                          $a=0;
                      @endphp
                      @foreach ($llamadas as $llamada)
                      @php
                          $a=$a+1;
                      @endphp
                          <tr>
                            <th class="ps-4"><span>{{$a}}</span></th>
                            <td ><span>{{($llamada->aceptada == 1)? "SI":(($llamada->aceptada == 0)? "NO": '--')}}</span></td>
                            <td ><span> {{$llamada->fecha}} </span></td>
                            <td ><span>{{$llamada->tiempo}}</span></td>
                            
                          </tr>
                          
                      
                      
                      @endforeach

                  
                </tbody>
                    
              </table>  

                
           
              
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
                <div class="mb-3">
                    <label for="sexo" class="form-label">sexo</label>
                    <input type="text" name="sexo" class="form-control" id="sexo">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" name="edad" class="form-control" id="edad">
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