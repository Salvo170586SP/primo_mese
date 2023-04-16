@extends('admin.layouts.home')
@section('title', 'Crea Volo')
@section('contain')
    <div class="row">
        <div class="col">
            <h2>Crea Volo</h2>
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
            <form action="{{ route('admin.flights.store') }}" method="POST">
                @csrf
                <input type="number" name="numero_volo" required placeholder="inserisci numero">
                <input type="text" name="partenza" required placeholder="inserisci partenza">
                <input type="text" name="destinazione" required placeholder="inserisci destinazione">
                <input type="date" name="data_volo" required placeholder="inserisci data">
                <select class="mt-4" name="capitan_id" required>
                <option value="">Seleziona Capitano</option>
                @foreach($capitans as $capitan)
                   <option value="{{$capitan->id}}"> {{ $capitan->name }} {{ $capitan->surname }}</option> 
                @endforeach
                
                </select>

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection