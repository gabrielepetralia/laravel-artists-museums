<header class="p-3">

  <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? "active" : ""}}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ str_contains(Route::currentRouteName(), 'artists.') ? "active" : ""}}" href="{{ route('artists.index')}}">Artists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ str_contains(Route::currentRouteName(), 'museums.') ? "active" : ""}}" href="{{ route('museums.index')}}">Museums</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ str_contains(Route::currentRouteName(), 'artworks.') ? "active" : ""}}" href="{{ route('artworks.index')}}">Artworks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'museums_distance' ? "active" : ""}}" href="{{ route('museums_distance', ['param' => 'param' ])}}">Museums Distance</a>
      </li>
  </ul>

</header>
