@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Modifica Artisti</h1>

        <form action="{{ route('artists.update', $artist) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input
                  id="name"
                  value="{{ old('name', $artist->name) }}"
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
                  value="{{ old('surname', $artist->surname) }}"
                  class="form-control"
                  name="surname"
                  placeholder="Insert surname"
                  type="text"
                >
            </div>

            <div class="mb-4">
                <label for="type" class="form-label">Type</label>
                <input
                  id="type"
                  value="{{ old('type', $artist->type) }}"
                  class="form-control"
                  name="type"
                  placeholder="Insert type"
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


