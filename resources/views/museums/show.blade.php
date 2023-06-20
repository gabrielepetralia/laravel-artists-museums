@extends('layout.main')

@section('content')
<main>
    <div class="container my-4">
      <div class="d-flex justify-content-between">
        <h2 class="mb-3">Dettaglio Scheda | {{ $museum->name }}</h2>

        <div>
          <a href="{{ route('artists.edit', $museum) }}" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square" title="Modifica"></i></a>
          <form class="d-inline" action="{{ route('artists.destroy', $museum) }}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $museum->name }} ?')" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can text-white" title="Elimina"></i></button>
          </form>
        </div>
      </div>

      <div class="card-body d-flex flex-column gap-1">
        <h5 class="mb-3"><div class="fw-bold">Name:</div> {{$museum->name}}</h5>
        <h5 class="mb-3"><div class="fw-bold">City:</div> {{$museum->city}}</h5>
        <h5 class="mb-3"><div class="fw-bold">Coordinate:</div> x:{{$museum->coordinate_x}} y:{{$museum->coordinate_y}}</h5>
        <div class="d-flex justify-content-center">
          <a href="{{route('museums.index')}}" class=" btn btn-primary mt-5 w-25 fs-4 align-self-center">Indietro</a>
        </div>
      </div>
  </div>
</main>
@endsection
