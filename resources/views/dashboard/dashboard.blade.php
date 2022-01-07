@extends('layouts.app')

@section('content')
<div class="d-flex">
  <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark sticky-top" style="width: 250px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4">DASHBOARD</span> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li><button class="btn btn-primary">Ajouter un projet</button></li>
        <li class="nav-item"> <a href="#" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a> </li>
        <li> <a href="#" class="nav-link admin-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Dashboard</span> </a> </li>
        <li> <a href="#" class="nav-link admin-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">My Orders</span> </a> </li>
        <li> <a href="#" class="nav-link admin-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Settings</span> </a> </li>
        <li> <a href="#" class="nav-link admin-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Bookmarks</span> </a> </li>
    </ul>
    <hr>
    <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> <strong> {{ Auth::user()->name }} </strong> </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Déconnection</a></li>
        </ul>
    </div>
  </div>
  <div>
    @yield('right-side')
  </div>
</div>


@endsection
