@extends('layout.main')


@section('content')
  <main>
      <div class="container my-4">
        <div class="d-flex justify-content-between">
          <h2 class="mb-3">Dettaglio Scheda | {{$artist->name}}</h2>
          <div>
            <a href="{{route('artists.edit', $artist)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" title="Modifica" style="color: #ffffff;"></i></a>
                <form class="d-inline" action="{{route('artists.destroy', $artist)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $artist->name }} ?')" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" title="Elimina" style="color: #ffffff;"></i></button>
                </form>
          </div>

        </div>

            <div class="card-body d-flex flex-column">
              <h5 class="mb-3"><div class="fw-bold">Name:</div> {{$artist->name}}</h5>
              <h5 class="mb-3"><div class="fw-bold">Surname:</div> {{$artist->surname}}</h5>
              <h5 class="mb-3"><div class="fw-bold">Type:</div> {{$artist->type}}</h5>
              <div class="d-flex justify-content-center">
                <a href="{{route('artists.index')}}" class=" btn btn-primary mt-5 w-50 fs-4 align-self-center">Indietro</a>
              </div>
            </div>
      </div>
  </main>
@endsection
