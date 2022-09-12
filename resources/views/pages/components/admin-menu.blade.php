<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ request()->routeIs('regions.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('regions.index')}}">Regions</a>
      </li>
      <li class="nav-item {{ request()->routeIs('locations.*') ? 'active' : '' }}">
        <a class="nav-link"  href="{{route('locations.index')}}">Locations</a>
      </li>
      <li class="nav-item {{ request()->routeIs('rates.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('rates.index')}}">Rates</a>
      </li>
      <li class="nav-item {{ request()->routeIs('video.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('video.index')}}">Rate Videos</a>
      </li>
      <li class="nav-item {{ request()->routeIs('home.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('home.edit')}}">Home Page</a>
      </li>
      <li class="nav-item {{ request()->routeIs('presentation.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('presentation.edit')}}">Presentation Page</a>
      </li>
      <li class="nav-item {{ request()->routeIs('partner.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('partner.edit')}}">Partner Page</a>
      </li>
      <li class="nav-item {{ request()->routeIs('unhappy.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('unhappy.edit')}}">Unhappy Page</a>
      </li>
      <li class="nav-item {{ request()->routeIs('partner-video.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('partner-video.index')}}">Partner Videos Page</a>
      </li>
      <li class="nav-item {{ request()->routeIs('promotions.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('promotions.index')}}">Promotion Texts</a>
      </li>
      <li class="nav-item {{ request()->routeIs('reaches.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('reaches.index')}}">Edit Pop Up</a>
      </li>
      <li class="nav-item {{ request()->routeIs('questions.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('questions.index')}}">Edit Q N A</a>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav">
  <li class="nav-item ">
        <a href="{{route('export')}}" type="button" class="btn btn-success">Export Emails</a>
      </li>
      <li class="nav-item ">
        <a href="{{route('logout')}}" type="button" class="btn btn-danger">Logout</a>
      </li>
    </ul>
</nav>