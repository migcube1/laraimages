@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Subir imágenes</h1>

                {{-- <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group mb-2">
                                <input type="file" name="file" id="file" accept="image/*">
                                <br>
                                @error('file')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">
                                Cargar imagen
                            </button>

                        </form>
                    </div>
                </div> --}}

                <form action="{{ route('admin.files.store') }}" class="dropzone" id="my-great-dropzone" method="POST">

                    {{-- @csrf --}}


                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


    <script>
        Dropzone.options.myGreatDropzone = {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            dictDefaultMessage: 'Arrastre las imágenes al recuadro para subirla',
            acceptedfiles: "image/*", //Tipo de archivos arrastrados
            maxFilesize: 2, //MB
            maxFiles: 4, //Máximo de archivos subidos
            //paramName: 'file', //Nombre del input (id)

        };
    </script>
@endsection
