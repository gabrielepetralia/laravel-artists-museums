@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Modifica Musei</h1>

        <form action="{{ route('museums.update', $museum) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input
                  id="name"
                  value="{{ old('name', $museum->name) }}"
                  class="form-control"
                  name="name"
                  placeholder="Insert Name"
                  type="text"
                >
            </div>

            <div class="mb-4">
                <label for="city" class="form-label">City</label>
                <input
                  id="city"
                  value="{{ old('city', $museum->city) }}"
                  class="form-control"
                  name="city"
                  placeholder="Insert City"
                  type="text"
                >
            </div>

            <div class="mb-4">
                <label for="coordinate_x" class="form-label">Coordinate X</label>
                <input
                  id="coordinate_x"
                  value="{{ old('coordinate_x', $museum->coordinate_x) }}"
                  class="form-control"
                  name="coordinate_x"
                  placeholder="Insert coordinate x"
                  type="number"
                >
            </div>

            <div class="mb-4">
                <label for="coordinate_y" class="form-label">Coordinate Y</label>
                <input
                  id="coordinate_y"
                  value="{{ old('coordinate_y', $museum->coordinate_y) }}"
                  class="form-control"
                  name="coordinate_y"
                  placeholder="Insert coordinate y"
                  type="number"
                >
            </div>



                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
                <a href="{{route('artworks.index')}}" class=" btn btn-primary align-self-center">Indietro</a>
            </form>
        </div>
    </main>
@endsection
