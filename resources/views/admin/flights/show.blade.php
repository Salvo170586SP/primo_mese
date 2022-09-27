@extends('admin.layouts.home')

@section('contain')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Voli di {{ $passenger->Name }}</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numero Volo</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Destinazione</th>
                        <th scope="col">Data del volo</th>
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
