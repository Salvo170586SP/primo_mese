@extends('admin.layouts.home')

@section('contain')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Voli di {{ $passenger->Name }}</h2>
        </div>

        <div class="col-5 my-5">
            <form class="d-flex align-items-center " action="{{ route('admin.addFlight') }}" method="POST">
                @csrf
                @method('GET')
                <input type="hidden" name="passenger_id" value="{{ $passenger->id }}">
                
                
                <select class="form-select form-select-sm" name="flight_id" aria-label=".form-select-sm example">
                    <option value="" selected>Seleziona un volo</option>
                    @foreach ($flightsOff as $flight)
                    <option value="{{ $flight->id }}">{{ $flight->numero_volo }}</option>
                    @endforeach
                </select>
                <button class="btn btn-sm btn-secondary mx-4" type="submit">Aggiungi</button>
            </form>
        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numero Volo</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Destinazione</th>
                        <th scope="col">Data del volo</th>
                        <th scope="col"><a class="btn btn-sm btn-danger" href="{{ route('admin.detachFlightAll', $passenger->id) }}">Elimina tutti</a></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($flights as $flight)
                        <tr>
                            <td>{{ $flight->numero_volo }}</td>
                            <td>{{ $flight->partenza }}</td>
                            <td>{{ $flight->destinazione }}</td>
                            <td>{{ $flight->data_volo }}</td>
                            <td><a class="btn btn-sm btn-danger"
                                    href="{{ route('admin.detachFlight', [$flight->id, $flight->pivot->passenger_id]) }}">Cancella</a>
                            </td>
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
