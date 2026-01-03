@php
$menu = config("blue-band-menu");
@endphp
<div class="bg-primary">
    <div class="container py-4">
        <div class="row row-col-5 justify-content-around g-0">
            @foreach($menu as $item)
            <div class="col">
                <div class="card bg-primary border-0 d-flex flex-row justify-content-center align-items-center">
                    @php $image = $item['image']; @endphp
                    <img src="{{ Vite::asset('resources/img/'.$image) }}" class="card-thumb" style="width: 100px;" alt="$item['text']">
                    <span class="d-block text-uppercase text-light card-body">{{$item['text']}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>