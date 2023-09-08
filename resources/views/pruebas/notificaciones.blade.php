@extends('app')

@section('content')
    <div class="container-fluid d-flex justify-content-center aling-items-center">
        <div class="card" style="margin: 2%; width: 100%;">

            <div class=" text-center" style="margin: 2%">
                <h1 class="text-dark mb-5">Notificaciones </h1>

            </div>

            <div class="card-body" id="notificaciones-view">
                @if (auth()->user())
                    @forelse ($postNotifications as $notification)
                        <div class="alert alert-warning notification" id="{{ $notification->created_at }}">
                            <strong>Descripción: </strong>
                            <p>{{ $notification->data['nombre'] }}</p>
                            <strong>Tipo: </strong>
                            <p>{{ $notification->data['tipo'] }}</p>
                            <strong>Fecha: </strong>
                            <p>{{ date($notification->data['fecha']) }}</p>
                            <strong>Hijo: </strong>
                            <p>{{ $notification->data['hijo']['name'] }}</p>
                            <p class="time-notification" style="float: right;">
                                {{ $notification->created_at->diffForHumans() }}</p>
                            {{-- <button class="mark-as-read btn btn-sm btn-dark" data-id="{{ $notification->data['contenido'] }}">Marcar como
                            leído</button> --}}
                            <br>
                        </div>
                        @if ($loop->last)
                            <a href="{{ route('markAsRead') }}" id="mark-all">Marcar todo como leído</a>
                        @endif

                    @empty
                        <p id="notification-empty"> No hay notificaciones</p>
                    @endforelse
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var id = "{{ Auth::user()->id }}";
        // console.log(id);
        var pusher = new Pusher('109c670c473fed2434ca', {
            cluster: 'us2',
        });
        var canal = 'channel2' + id;
        var evento = 'event-' + id;
        console.log(canal);
        console.log(evento);

        var channel = pusher.subscribe(canal);
        channel.bind('event-' + id, function(data) {
            console.log($('.notification').length);
            // moment.locale();
            //moment.locale('es');
            $('.notification').each(function() {
                // console.log('entra');
                relativo = moment(convertir(Date.parse($(this).attr("id"))),
                    "YYYY-MM-DD hh:mm:ss").fromNow();
                $(this).find('.time-notification').text(relativo);
                //   console.log(p);
                //    p.text('time');
            });
            $('#notificaciones-view').prepend('<div class="alert alert-warning notification" id="' + convertir(Date
                    .parse(data['contenido']['created_at'])) +
                '">' + '<strong>Descripción: </strong>' + '<p>' + data['contenido']['contenido'] + '</p>' +
                '<strong>Tipo: </strong>' + '<p>' + data['contenido']['tipo_contenido'] + '</p>' +
                '<strong>Fecha: </strong>' + '<p>' + data['contenido']['fecha'] + '</p>' +
                '<strong>Hijo: </strong>' + '<p>' + data['hijo']['name'] + '</p>' +
                '<p class="time-notification" style="float: right;">' +
                moment(convertir(Date.parse(data['contenido']['created_at'])),
                    "YYYY-MM-DD hh:mm:ss").fromNow() + '</p>'+
                    '<br>');

            if ($('#notification-empty').length == 1) {
                $('#notification-empty').remove();
                $('#notificaciones-view').append(
                    ' <a href="{{ route('markAsRead') }}" id="mark-all">Marcar todo como leído</a>');
            }
        });

        function convertir(time) {
            var date = new Date(time);
            var ds = date.getSeconds();
            if (date.getSeconds() < 10) {
                ds = '0' + date.getSeconds();
            }
            var dm = date.getMinutes();
            if (date.getMinutes() < 10) {
                dm = '0' + date.getMinutes();
            }
            var dh = date.getHours();
            if (date.getHours() < 10) {
                dh = '0' + date.getHours();
            }

            var tiempo = date.getFullYear() + "-" + (date.getMonth() + 1) +
                "-" + date.getDate() +
                " " + dh +
                ":" + dm +
                ":" + ds;
            return tiempo;
        }
    </script>
@endsection
