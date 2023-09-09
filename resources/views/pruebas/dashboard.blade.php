@extends('app')


@section('content')
    <section class="section bg-light">
        <div class="container">
            <h4 class="bold text-center mb-5 text-secondary">
                Mi Familia</h4>
            <div class="row gap-y">
                @foreach ($tokens as $token)
                    @php
                        $hijo = App\Models\Hijo\Hijo::where('id', $token['id_hijo'])->first(); //recura al hijo que le pertenece el token
                    @endphp

                    <div class="col-md-3 col-xs-3 col-6 px-md-5 p-1">
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row p-1">
                                        <div class="col-12">
                                            <a href="{{ route('hijoContactos', $hijo->id) }}">
                                                <img src="{{ asset('img/niño.jpg') }}" class="img-responsive mx-auto op-7"
                                                    style="max-height: 150px;">
                                                <br>
                                                <H5>{{ $hijo->alias }}</H5>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-info edit-boton" type="button" class="btn"
                                                data-hijo={{ $hijo }} data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_user"
                                                style="justify-content: center; align-items: center;">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-danger delete-boton"
                                                data-id={{ $hijo }} data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </div>
                @endforeach
                <div class="col-md-4 col-xs-4 col-6 px-md-5">
                    <td>
                        <button type="button" class="btn add-boton" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_user">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <img src="{{ asset('img/plusorange.png') }}"class="img-responsive mx-auto op-7"
                                style="max-height: 150px;">
                        </button>
                        <h5>Añadir hijo</h5>
                    </td>
                </div>
            </div>
            <br>
            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder" id="title-modal">Añadir Hijo</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_add_user_form" class="form" method="POST"
                                action="{{ route('crear_hijo') }}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Nombre</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="nombre" id="nombre"
                                                class="form-control form-control-solid mb-3 mb-lg-0 nombre-modal"
                                                placeholder="Nombre" value="" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Apellido</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="apellido" id="apellido"
                                                class="form-control form-control-solid mb-3 mb-lg-0 apellido-modal"
                                                placeholder="Apellido" value="" required />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Alias</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="alias" id="alias"
                                                class="form-control form-control-solid mb-3 mb-lg-0 alias-modal"
                                                placeholder="Alias" value="" required />
                                            <!--end::Input-->
                                        </div>

                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Numero de Celular</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="celular" id="celular"
                                                class="form-control form-control-solid mb-3 mb-lg-0 celular-modal"
                                                placeholder="Numero de Celular" value="" required />
                                            <!--end::Input-->
                                        </div>



                                        <!--end::Input group-->
                                        <!--begin::Input group-->

                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        {{-- <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">Discard</button> --}}
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
        </div>
        {{-- modal eliminar --}}
        <div class="modal fade" tabindex="-1" id="kt_modal_delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Eliminar Hijo</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <div class="modal-body">
                        <h5 id="texto-delete-modal"></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Salir</button>
                        <form id="kt_modal_delete_user_form" method="POST">
                            @csrf
                          @method("DELETE")
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script>
        $(document).ready(function() {

            $("#cerrarModal").on("click", function() {
                // Cierra el modal usando su ID (en este caso, "miModal")
                console.log("cerrar modal");
                $("#kt_modal_add_user").modal("hide");
            });
            $('.edit-boton').on('click', function() {
                var hijo = $(this).data('hijo');
                var form = $('#kt_modal_add_user_form');

                var editarUrl = "{{ route('editar_hijo', ['id' => ':hijoId']) }}";
                editarUrl = editarUrl.replace(':hijoId', hijo.id);
                $('.nombre-modal').val(hijo.name);
                $('.apellido-modal').val(hijo.apellido);
                $('.alias-modal').val(hijo.alias);
                $('.celular-modal').val(hijo.celular);
                // nuevaUrl = nuevaUrl + "/" + hijo.id;
                console.log("url: " + editarUrl);
                // Cambiar el método a PUT
                //$(form).attr('method', 'PUT');
                $(form).attr('action', editarUrl);
                // Continuar con el envío del formulario
                // form.submit();

                console.log("click en editar boton ", hijo);
                $('#title-modal').text('Editar hijo');
            });
            $('.add-boton').on('click', function() {
                var form = $('#kt_modal_add_user_form');
                var crearUrl = "{{ route('crear_hijo') }}";
                $('.nombre-modal').val('');
                $('.apellido-modal').val('');
                $('.alias-modal').val('');
                $('.celular-modal').val('');
                console.log("url: " + crearUrl);
                $(form).attr('action', crearUrl);
                $('#title-modal').text('Crear hijo');
            });
            $('.delete-boton').on('click', function() {
                console.log("ingresa delete");
                var hijo = $(this).data('id');
                console.log("hijo delete: ", hijo);
                var form = $('#kt_modal_delete_user_form');
                $('#texto-delete-modal').text("¿Está seguro de eliminar al hijo " + hijo.name + "?");
                var deleteUrl = "{{ route('eliminar_hijo', ['id' => ':hijoId']) }}";
                deleteUrl = deleteUrl.replace(':hijoId', hijo.id);
                $(form).attr('action', deleteUrl);
            })
        });
    </script>
@stop
