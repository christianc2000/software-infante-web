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

<div class="container-fluid d-flex justify-content-center aling-items-center">
            <div class="card " style="width: 60%;">
                <div class="containertable">
                    <br>
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Lista de Contactos de {{$info->name}} </h1>
                        <!--end::Title-->
                       
                    </div>
               
                   
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <table class="table new table">
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                       
                                        <th class="ps-4 min-w-8px rounded-start">#</th>
                                        <th class="min-w-125px">Nombre</th>
                                        <th class="min-w-125px">Numero</th>
                                      
                                    </tr>
                                      
                                </thead>
                                <tbody>
								    @php
                                       $a=0;
                                    @endphp
                                    @foreach ($contactos as $contacto)
                                        @php
                                           $a=$a+1;
                                       @endphp
                                                <tr>
                                                    
                                                    <td class="p">

                                                    {{$a}}
                                                    
                                                    </td> 
                                                    <td>  <span>{{($contacto->nombre == null)? "--": $contacto->nombre}}</span>
                                                    </td>
                                            
                                                  
                                                    <td>  <span>{{($contacto->numero == null)? "--": $contacto->numero}}</span>
                                                   </td>
                                              
                                                
                                            
                
                                                  
                                               </tr>
                                    
                                             
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
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