@php
$footer_links = config("footer-links");
@endphp


<footer>


    <div class="links position-relative overflow-hidden">
        <div class="container">
            <div class="row row-cols-2 justify-content-between align-items-center py-4">
                <div class="col text-light d-flex flex-wrap">
                    @foreach($footer_links as $title => $links)
                    <div class="col-4">
                        <span class="fw-bold text-uppercase roboto-condensed-400 fs-5 d-block pb-2">{{$title}}</span>
                        @foreach($links as $link)
                        <div class="col">
                            <a class="text-decoration-none text-light fs-6" href="">{{$link}}</a>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <div class="col ">
                    <img class="position-absolute top-50 end-0 translate-middle-y" src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc_logo">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark-subtle">
        <div class="container">

            <div class="row  justify-content-between align-items-center py-4 roboto-condensed-400">
                <div class="col">
                    <a class="text-light text-decoration-none text-uppercase p-2 fw-bold border border-2 border-primary" href="">Sign-up now!</a>
                </div>
                <div class="col d-flex justify-content-end align-items-bottom">
                    <a class="text-primary text-decoration-none text-uppercase fw-bold p-2 fs-5 me-2" href="">follow us</a>
                    <div class="fs-3 d-flex gap-2">
                        <a class="px-1 text-dark" href=""><i class="bi bi-facebook"></i></a>
                        <a class="px-1 text-dark" href=""><i class="bi bi-twitter-x"></i></a>
                        <a class="px-1 text-dark" href=""><i class="bi bi-youtube"></i></a>
                        <a class="px-1 text-dark" href=""><i class="bi bi-pinterest"></i></a>
                        <a class="px-1 text-dark" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>