
@php
$menu = require base_path("./database/data/navbar.php");
@endphp


<header>
    <nav class="navbar navbar-expand bg-body-light">
        <div class="container d-flex justify-content-between my-2">
            <a class="navbar-brand" href="#">
                <img width="70" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </a>
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav ">
                    @foreach ($menu as $item)
                    <li class="nav-item px-1 text-uppercase">
                        <a class="nav-link montserrat-400 text-dark" href="#">{{$item}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>