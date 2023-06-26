@extends('layout.main')

@section('content')
<main>
<div class="container my-4">
  <div class="d-flex justify-content-between">
    <h1 class="mb-4">Elenco Opere d'arte</h1>
    <div>
      <a href="{{ route('artworks.create')}}" title="Add New Artwork" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
    </div>
  </div>

      @if (session('trashElement'))
          <div class="alert alert-success" role="alert">
              {{ session('trashElement') }}
          </div>
      @endif
  <div class="border border-1">
    <table class="table mb-0 table-hover">
      <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Artist</th>
            <th scope="col">Museum</th>
            <th scope="col">Actions</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($artworks as $artwork)
          <tr class="vertical-align-middle">
            <th scope="row">{{$artwork->id}}</th>
            <td>{{$artwork->name}}</td>
            <td>{{$artwork->date}}</td>
            <td>{{$artwork->artist?->name}}</td>
            <td>{{$artwork->museum?->name}}</td>
            <td>
              <a href="{{route('artworks.show', $artwork)}}" class="btn btn-primary text-white"><i class="fa-regular fa-eye" title="Vedi"></i></a>
              <a href="{{route('artworks.edit', $artwork)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square text-white" title="Modifica"></i></a>

              <form action="{{route('artworks.destroy', $artwork)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $artwork->name }} ?')" method="POST" class="d-inline">

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger text-white"><i class="fa-regular fa-trash-can" title="Elimina"></i></button>
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
