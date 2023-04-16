@extends('admin.layouts.home')
@section('title', 'Voli')
@section('contain')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <h1>Voli</h1>
        <a href="{{ route('admin.flights.create') }}" class="btn btn-outline-primary">Aggiungi Voli</a>

    </div>
    <div class="offset-2 col-8">
        <table class="table shadow">
            <thead>
                <tr>
                    <th scope="col">Numero volo</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Data del volo</th>
                    <th scope="col">Capitano</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($flights as $flight)
                <tr>
                    <td>{{ $flight->numero_volo }}</td>
                    <td>{{ $flight->partenza }}</td>
                    <td>{{ $flight->destinazione }}</td>
                    <td>{{ $flight->data_volo }}</td>
                    <td>@if($flight->capitan->name) {{ $flight->capitan->name }} @else -- @endif</td>
                    <td>
                        <form action="{{ route('admin.flights.destroy', $flight->id) }}" method="post">
                            @csrf
                            @method('Delete')
                            <button class="btn btn-sm btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono voli</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $flights->links() }}
    </div>
</div>
@endsection
