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
<div class="card">
  <div class=" text-center mb-10">
    <h1 class="text-dark mb-5">Ubicación de {{$info->name}} </h1>
      
  </div>
 @if($existe == 'true')
  <input type="hidden"  id="lati" value="{{$localizacion->latitud}}">
  <input type="hidden"  id="longi" value="{{$localizacion->longitud}}">
  @else
  <input type="hidden"  id="lati" value="">
  <input type="hidden"  id="longi" value="">
  @endif
  <div class="card-body">
    <h1 id="mensaje">
      ACEPTE LOS PERMISOS NECESARIOS PARA OBTENER LA UBICACIÓN DEL NIÑO.
     </h1>
    <div id="map"  style="height: 800px; "> </div> 
    
  </div>
  
</div>
  
@stop

@section('css')
   



@stop

@section('js')


<script>

  	 function initMap() {
     var lati = document.getElementById('lati').value;
     var longi = document.getElementById('longi').value;
     console.log(lati);
      if(lati != ""){
        
      const  map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: parseFloat(lati) , lng: parseFloat(longi)},
              zoom: 13,
            });
          new google.maps.Marker({
              position: {lat: parseFloat(lati) , lng: parseFloat(longi)},
              map: map,
        title: 'Ubicacion de Mercado el Quior'
            });
            var mensaje = document.getElementById('mensaje').style.display = "none";
      }else{
        var mensaje = document.getElementById('mensaje');
      }
      
      }
      window.initMap=initMap;
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl8DaopxOLYwyY0gJV2fUky4_X99ZFwJY&callback=initMap" async defer></script>

@stop