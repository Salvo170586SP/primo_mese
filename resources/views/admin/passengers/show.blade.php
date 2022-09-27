@extends('admin.layouts.home')
@section('title', 'Dettagli Passeggero')
@section('contain')
<div class="row">
    <div class="col-12">
        <h2>Dettagli Passeggero</h2>
    </div>
    <div class="offset-4 col-6 my-5">
        <div class="card" style="width: 20rem;">
            <img src="{{ asset('build/assets/images/placeholder.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $passenger->Name }} {{ $passenger->Surname }}</h5>
              <p class="card-text">Data di nascita: {{ $passenger->Birthday }}</p>
            </div>
          </div>
    </div>
</div>

@endsection
