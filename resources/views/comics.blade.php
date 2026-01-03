@php
$comics = config("comics");

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
        <div class="container py-5 position-relative">
            <span class=" position-absolute text-uppercase text-light bg-primary top-0 start-0 translate-middle-y py-1 px-4 roboto-condensed-400 fs-2">current series</span>
            <div class="row row-cols-6 mb-4 ">
                @foreach($comics as $comic)
                <div class="col">
                    <x-comic-card>
                        <x-slot:series>{{$comic['series']}}</x-slot:series>
                        <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
                    </x-comic-card>
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

    <x-blue-band></x-blue-band>

    @endsection
</body>

</html>