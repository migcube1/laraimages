@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Subir imágenes</h1>

                <div class="card">
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
                </div>
            </div>
        </div>
    </div>
@endsection
