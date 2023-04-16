@extends('admin.layouts.home')
@section('title', 'Crea Capitano')
@section('contain')
    <div class="row">
        <div class="col">
            <h2>Crea Capitano</h2>
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
            <form action="{{ route('admin.capitans.store') }}" method="POST">
                @csrf
                <input type="text" name="name" required placeholder="inserisci nome">
                <input type="text" name="surname" required placeholder="inserisci cognome">
                <input type="date" name="birthday" required placeholder="inserisci data di nascita">

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection