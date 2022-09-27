@extends('admin.layouts.home')
@section('title', 'Voli')
@section('contain')
    <div class="row">
        <div class="col-12">
            <h1>Voli</h1>
        </div>
        <div class="offset-2 col-8">
            <table class="table shadow">
                <thead>
                    <tr>
                        <th scope="col">Numero volo</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Destinazione</th>
                        <th scope="col">Data del volo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($flights as $flight)
                        <tr>
                            <td>{{ $flight->numero_volo }}</td>
                            <td>{{ $flight->partenza }}</td>
                            <td>{{ $flight->destinazione }}</td>
                            <td>{{ $flight->data_volo }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>Non ci sono voli</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection