@extends('layout.main')

@section('content')
<main>
    <div class="container my-4">
      <div class="d-flex justify-content-between">
        <h2 class="mb-3">Dettaglio Scheda | {{ $artwork->name }}</h2>

        <div>
          <a href="{{ route('artworks.edit', $artwork) }}" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square" title="Modifica"></i></a>
          <form class="d-inline" action="{{ route('artworks.destroy', $artwork) }}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $artwork->name }} ?')" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can text-white" title="Elimina"></i></button>
          </form>
        </div>
      </div>

      <div class="card-body d-flex flex-column gap-1">
        <h5 class="mb-3"><div class="fw-bold">Name:</div> {{$artwork->name}}</h5>
        <h5 class="mb-3"><div class="fw-bold">Date:</div> {{$artwork->date}}</h5>
        <h5 class="mb-3"><div class="fw-bold">Artist:</div> {{$artwork->artist->name}}</h5>
        <h5 class="mb-3"><div class="fw-bold">Museum:</div> {{$artwork->museum->name}}</h5>

        <div class="d-flex justify-content-center">
          <a href="{{route('artworks.index')}}" class=" btn btn-primary mt-5 w-25 fs-4 align-self-center">Indietro</a>
        </div>
      </div>
  </div>
</main>
@endsection
