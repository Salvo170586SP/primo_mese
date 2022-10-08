@extends('admin.layouts.home')
@section('title', 'Capitani')
@section('contain')
    <div class="row">
        <div class="col-12">
            <h1>Capitani</h1>
        </div>
        <div class="offset-2 col-8">
            <table class="table shadow">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Data di nascita</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($capitans as $capitan)
                        <tr>
                            <td>{{ $capitan->name }}</td>
                            <td>{{ $capitan->surname }}</td>
                            <td>{{ $capitan->birthday }}</td>
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