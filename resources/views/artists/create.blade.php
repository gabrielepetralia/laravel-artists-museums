@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Inserisci nuovo Artista</h1>

        <form action="{{ route('artists.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input
                  id="name"
                  value="{{ old('name') }}"
                  class="form-control"
                  name="name"
                  placeholder="Insert Name"
                  type="text"
                >
            </div>
            <div class="mb-4">
                <label for="surname" class="form-label">Surname</label>
                <input
                  id="surname"
                  value="{{ old('surname') }}"
                  class="form-control"
                  name="surname"
                  placeholder="Insert Surname"
                  type="text"
                >
            </div>
            <div class="mb-4">
                <label for="type" class="form-label">Type</label>
                <input
                  id="type"
                  value="{{ old('type') }}"
                  class="form-control"
                  name="type"
                  placeholder="Insert Type"
                  type="text"
                >
            </div>

            

                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
                <a href="{{route('artists.index')}}" class=" btn btn-primary align-self-center">Indietro</a>
            </form>
        </div>
    </main>
@endsection
