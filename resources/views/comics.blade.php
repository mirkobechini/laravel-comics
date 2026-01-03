@php
$comics = require base_path("./database/data/comics.php")
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    @extends("layouts.master")

    @section("content")

    <div class="jumbo img img-fluid w-100" style="height: 210px;">

    </div>
    <div class="bg-dark">
        <div class="container py-5">
            <div class="row row-cols-6 mb-4">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card bg-dark text-light border-0">
                        @php $cover = $comic['thumb']; @endphp
                        <div class="card-thumb overflow-hidden" style="background-image:url('{{$cover}}')">

                        </div>

                        <h5 class="card-title pt-3 text-uppercase fs-6">{{$comic["series"]}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row text-center mt-5">
                <div class="col">

                    <a class="text-decoration-none text-uppercase link fw-bold text-light border border-primary bg-primary px-5 py-2" href="">Load more</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>