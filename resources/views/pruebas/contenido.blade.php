@extends('app')

@section('title')
<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
  <div class="menu-item">
        <a class="menu-link active py-3" href="{{route('hijoContactos', $info->id )}}">                                    
            <span class="text-muted">Contacto</span>
        </a>                                        
  </div>
  <span class="menu-arrow d-lg-none"></span>
  <!-- <div class="menu-item">
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
    <div class="card" style="width: 100%;" >
        <div class=" text-center mb-10">
          <h1 class="text-dark mb-5">Lista de Contenido de {{$info->name}} </h1>
            
        </div>

       
        <div class="card-body py-3">
          <table class="table table-hover">
            <thead  style="font-family: Poppins;">
              <tr class="fw-bolder text-muted bg-light">
                <th class="ps-4 min-w-8px rounded-start">#</th>
                <th class="min-w-125px">Fecha</th>
                    <th class="min-w-125px" >Path</th>
                    <th class="min-w-125px">URL</th>
                    <th class="min-w-125px">Tipo</th>
                    <th class="min-w-125px" >Imagen</th>
                    
                  </tr>
                </thead>
                <tbody>
                      @php
                      $nameData=array(
                        'Nudity'=>'Desnudez',
                        'Graphic Male Nudity'=>'Desnudez Masculina Gráfica',
                        'Graphic Female Nudity'=>'Desnudez femenina gráfica',
                        'Sexual Activity'=>'Actividad Sexual',
                        'Illustrated Explicit Nudity'=>'Desnudez explícita ilustrada',
                        'Adult Toys'=>'Juguetes para adultos',
                        'Female Swimwear Or Underwear'=>'Ropa interior femenino',
                        'Male Swimwear Or Underwear'=>'Ropa interior masculino',
                        'Partial Nudity'=>'Desnudez parcial',
                        'Barechested Male'=>'Hombre con el torso desnudo',
                        'Revealing Clothes'=>'Atuendo revelador',
                        'Sexual Situations'=>'Situaciones Sexuales',
                        'Graphic Violence Or Gore'=>'Violencia Gráfica O Gore',
                        'Physical Violence'=>'Violencia física',
                        'Weapon Violence'=>'Violencia con armas',
                        'Weapons'=>'armas',
                        'Self Injury'=>'Auto lastimarse',
                        'Emaciated Bodies'=>'Cuerpos demacrados',
                        'Corpses'=>'Cuerpos',
                        'Hanging'=>'Colgante',
                        'Air Crash'=>'Accidente aéreo',
                        'Explosions And Blasts'=>'Explosiones y explosiones',
                        'Middle Finger'=>'Dedo del medio',
                        'Drug Products'=>'Productos farmacéuticos',
                        'Drug Use'=>'El consumo de drogas',
                        'Pills'=>'Pastillas',
                        'Drug Paraphernalia'=>'Parafernalia de drogas',
                        'Tobacco Products'=>'Productos de tabaco',
                        'Smoking'=>'Fumar',
                        'Drinking'=>'Bebiendo',
                        'Alcoholic Beverages'=>'Bebidas alcohólicas',
                        'Gambling'=>'Juego',
                        'Nazi Party'=>'Fiesta nazi',
                        'White Supremacy'=>'La supremacía blanca',
                        'Extremist'=>'Extremista',
                        );
                        $parentNameData=array(
                        'Explicit Nudity'=>'Desnudez explícita',
                        'Suggestive'=>'Sugestivo',
                        'Violence'=>'Violencia',
                        'Visually Disturbing'=>'Visualmente perturbador',
                        'Rude Gestures'=>'gestos groseros',
                        'Drugs'=>'drogas',
                        'Tobacco'=>'Tabaco',
                        'Alcohol'=>'Alcohol',
                        'Gambling'=>'Juego',
                        'Hate Symbols'=>'Símbolos de odio',
                        );
                          $a=0;
                      @endphp
                      @foreach ($contenidos as $contenido)
                      @php
                          $a=$a+1;
                      @endphp
                          <tr>
                            <th class="ps-4">{{$a}}</th>
                            <td>{{$contenido->fecha}}</td>
                            <td>{{$contenido->path}}</td>
                            <td>{{$contenido->url}}</td>
                            <td>{{$nameData[$contenido->contenido]}}/{{$parentNameData[$contenido->tipo_contenido]}}</td>
                           {{--   <td class="d-flex justify-content-center">
                              <img id="myImg{{$contenido->id}}" class="myImg w-25 h-25" src="{{Storage::disk('s3')->url($contenido->url)}}"
                               alt="imagen" style="height:100 px;max-width:300px" onclick="getImage({{$contenido->id}})">
                              </td>   --}}                                           
                               <td>
                                <a  href="{{Storage::disk('s3')->url($contenido->url)}}"
                                    data-lightbox="imagen"
                                    data-title="{{$contenido->tipo_contenido}}"  >
                                    <img src="{{Storage::disk('s3')->url($contenido->url)}}" alt="" width="60" height="70">
                                </a>
        
                            </td>
                          </tr>

                      @endforeach

                  
                </tbody>
                    
              </table>  

                
                
              
        </div>
    </div>

</div>

<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


  

@stop

@section('css')
   
<link rel="stylesheet" href="{{ asset('lightbox/lightbox.min.css') }}">


@stop

@section('js')
<script src="{{ asset('lightbox/lightbox.min.js') }}" ></script>


@stop