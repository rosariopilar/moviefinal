@extends('layouts.movie2')

@section('template_title')
    Update Pelicula
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Pelicula</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('peliculas.update', $pelicula->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pelicula.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
