@extends('admin.layouts.home')
@section('title', 'Capitani')
@section('contain')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <h1>Capitani</h1>
        <a href="{{ route('admin.capitans.create') }}" class="btn btn-outline-primary">Aggiungi capitani</a>
    </div>
    <div class="offset-2 col-8">
        <table class="table shadow">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Data di nascita</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($capitans as $capitan)
                <tr>
                    <td>{{ $capitan->name }}</td>
                    <td>{{ $capitan->surname }}</td>
                    <td>{{ $capitan->birthday }}</td>
                    <td>
                        <form action="{{ route('admin.capitans.destroy', $capitan->id) }}" method="post">
                            @csrf
                            @method('Delete')
                            <button class="btn btn-sm btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono capitani</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $capitans->links() }}
    </div>
</div>
@endsection
