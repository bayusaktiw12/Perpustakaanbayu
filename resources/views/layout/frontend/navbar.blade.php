<nav class="navbar p-0 fixed-top d-flex flex-row">
  <div class="navbar-menu-wrapper flex-grow d-flex align-items-center justify-content-end">

    <div class="navbar-profile">
      <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/BAYU.jpeg') }}">
      <span class="text-white ml-2">{{ Auth::user()->name }}</span>
    </div>

  </div>
</nav>