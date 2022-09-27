@extends('admin.layouts.home')
@section('title', 'Modifica Passeggero')
@section('contain')
    <div class="row">
        <div class="col">
            <h2>Modifica Passeggero</h2>
        </div>
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-12">
            <form action="{{ route('admin.passengers.store') }}" method="POST">
                @csrf
                @include('admin.passengers.form')

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection
