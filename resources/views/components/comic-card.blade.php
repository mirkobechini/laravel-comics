
@php $cover = $comic['thumb']; @endphp
<div class="card bg-dark text-light border-0">
    <div class="card-thumb overflow-hidden" style="background-image:url('{{$cover}}')">

    </div>

    <h5 class="card-title pt-3 text-uppercase fs-6">{{$comic['series']}}</h5>
</div>