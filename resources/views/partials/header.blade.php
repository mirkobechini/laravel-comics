
@php
$menu = require base_path("./database/data/navbar.php");
@endphp


<header>
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$item}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>