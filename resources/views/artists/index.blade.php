@extends('layout.main');

@section('content')
<main>
<div class="container my-4">
    <h1 class="mb-4">Elenco Artisti</h1>
    <div class="border border-1">
    <table class="table mb-0 table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr class="vertical-align-middle">
                        <th scope="row">{{$artist->id}}</th>
                        <td>{{$artist->name}}</td>
                        <td>{{$artist->surname}}</td>
                        <td>{{$artist->type}}</td>
                        <td><a href="{{route('artists.show', $artist)}}" class="btn btn-primary"><i class="fa-regular fa-eye" title="Vedi" style="color: #ffffff;"></i></a>
                        <a href="{{route('artists.edit', $artist)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" title="Modifica" style="color: #ffffff;"></i></a>

                            <form action="{{route('artists.destroy', $artist)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $artist->name }} ?')" method="POST" class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" title="Elimina" style="color: #ffffff;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    </div>
</div>
</main>

@endsection
