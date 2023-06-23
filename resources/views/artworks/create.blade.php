@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Inserisci nuova opera d'arte</h1>

        <form action="{{ route('artworks.store') }}" method="POST">
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
                <label for="date" class="form-label">Date</label>
                <input
                  id="date"
                  value="{{ old('date') }}"
                  class="form-control"
                  name="date"
                  placeholder="Insert Date"
                  type="date"
                >
            </div>



                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
                <a href="{{route('artworks.index')}}" class=" btn btn-primary align-self-center">Indietro</a>
            </form>
        </div>
    </main>
@endsection

