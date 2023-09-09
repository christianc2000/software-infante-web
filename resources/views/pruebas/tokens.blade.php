@extends('app')


@section('content')

    <div class="container-fluid d-flex justify-content-center aling-items-center">
        <div class="row">
            <div class="col">
                <div class="card" style="margin: 2%; width: 40%;">

                    <div class="card-body py-3">
                        <button type="button" class="btn btn-warning" onclick="enviarFormulario()">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                        rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Añadir Token</button>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card" style="margin: 2%; width: 60%;">

                    <div class="card-body py-3">
                        <form class="d-flex justify-content-center" action="{{ route('crearToken') }}" method="post"
                            id="form1">
                            @csrf
                            <select class="form-select form-select-solid" name="id_hijo" id="selector">
                                <option value="" disabled selected>Seleccione un hijo</option>

                                @php
                                    $a = 0;
                                @endphp
                                @foreach ($hijos as $hijo)
                                    @php
                                        $a = $a + 1;
                                        
                                        $token = App\Models\Token::where('id_hijo', $hijo->id)->first();
                                    @endphp


                                    @if ($token == null)
                                        <option value="{{ $hijo->id }}">{{ $hijo->name }} {{ $hijo->apellido }}
                                        </option>
                                    @endif
                                @endforeach


                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card" style="margin: 2%; width: 80%;">

                {{--   <a class="btn btn-primary" onclick="enviarFormulario()" role="button">Asignar Token</a>  --}}

                <div class="card-body py-3">
                    <div class=" text-center mb-10">
                        <h1 class="text-dark mb-5">Token de Usuario</h1>

                    </div>
                    <table class="table table-hover">
                        <thead style="font-family: Poppins;">
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-8px rounded-start">#</th>
                                <th class="min-w-125px">Codigo</th>

                                <th class="min-w-125px"> Usuario Asignado</th>
                                <th class="min-w-125px">Fecha Creacion</th>
                                <th class="min-w-125px">Fecha Registro</th>
                                <th class="min-w-125px">Tiempo restante</th>
                            </tr>
                        </thead>
                        @php
                            $a = 0;
                        @endphp
                        <tbody>
                            @foreach ($tokens as $token)
                                @php
                                    $a = $a + 1;
                                    $hijo = App\Models\Hijo\Hijo::where('id', $token->id_hijo)->first();
                                @endphp

                                <tr>
                                    <td class="ps-4">{{ $a }}</td>
                                    {{--  <td>{{$token->id}}</td> --}}
                                    <td>{{ $token->codigo }}</td>
                                    <td>
                                        @if (isset($hijo))
                                            {{ $hijo->name }} {{ $hijo->apellido }}
                                        @else
                                            hijo eliminado
                                        @endif
                                    </td>

                                    <td>{{ $token->fecha_creacion }}</td>
                                    @if ($token->fecha_registro != '')
                                        <td>{{ $token->fecha_registro }}</td>
                                    @else
                                        <td>Sin registrar</td>
                                    @endif
                                    <td><input type="hidden" id="input{{ $a }}"
                                            value="{{ $token->fecha_creacion }}"><strong
                                            id="demo{{ $a }}"></strong></td>

                                </tr>
                            @endforeach

                            <input type="hidden" id="cont" value="{{ $a }}">
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>


@stop

@section('css')

@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        function enviarFormulario() {
            let form = document.getElementById("form1");
            let selector = document.getElementById("selector");
            if (selector.selectedIndex == 0) {
                Swal.fire('Seleccione un Hijo primero.')
            } else {
                form.submit();
            }
        }



        $cont = document.getElementById("cont").value
        $i = 1;
        while ($cont >= $i) {
            ponerTiempo("demo" + $i)
            $i++;
        }

        function ponerTiempo(id) {
            // Set the date we're counting down to
            $fecha = document.getElementById("input" + $i).value
            var fechaCreacion = new Date($fecha);
            fechaCreacion.setMinutes(fechaCreacion.getMinutes() + 5)
            var countDownDate = fechaCreacion.getTime();


            console.log(countDownDate + " asdasdaf");
            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById(id).innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(id).innerHTML = "Token expirado";
                    document.getElementById(id).style.color = "red";
                }

            }, 1000);
        }
    </script>
@stop
