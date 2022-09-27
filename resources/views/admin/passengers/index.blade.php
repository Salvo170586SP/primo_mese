@extends('admin.layouts.home')
@section('title', 'Passeggeri')
@section('contain')
    <div class="row">
        <div class="col-12">
            <h1>Passeggeri</h1>
            <a class="btn btn-outline-primary" href="{{ route('admin.passengers.create') }}">Aggiungi Passeggero</a>
        </div>
        <div class="col-12 my-3">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        </div>
        <div class="offset-2 col-8">
            <table class="table shadow">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Data di Nascita</th>
                        <th scope="col">Voli prenotati</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($passengers as $passenger)
                        <tr>
                            <td><img width="60" class="rounded"
                                    src="{{ asset('build/assets/images/placeholder.jpg') }}" alt="foto"></td>
                            <td>{{ $passenger->Name }}</td>
                            <td>{{ $passenger->Surname }}</td>
                            <td>{{ $passenger->Birthday }}</td>
                            <td class="py-4"><a class="btn btn-sm btn-primary " href="{{ route('admin.flights.show', $passenger->id) }}">Voli prenotati</a></td>
                            <td class="d-flex justify-content-end align-items-start py-4">
                                <a class="btn btn-sm btn-primary"
                                    href="{{ route('admin.passengers.show', $passenger->id) }}">Vedi</a>
                                <a class="btn btn-sm btn-secondary mx-2"
                                    href="{{ route('admin.passengers.edit', $passenger->id) }}">Modifica</a>
                                <form action="{{ route('admin.passengers.destroy', $passenger->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Cancella</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Non ci sono passeggeri</td>
                        </tr>
                    @endforelse

                </tbody>
                {{ $passengers->links() }}
            </table>
        </div>
    </div>
@endsection
