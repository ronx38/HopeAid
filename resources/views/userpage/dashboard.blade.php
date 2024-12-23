@extends('layout.layout')

@section('title', 'Dashboard - HopeAid')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/carosel_1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="image/carosel_2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/carosel_3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@if ($donasi->count() > 0)
<div class="container">
    <div class="row">
        @foreach ($donasi as $item)
        <div class="col-4">
            <div class="card mt-5">
                <img src="{{ asset('image_donation/'.$item->donasi_photo) }}" class="card-img-top" alt="..." height="350">

                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $item->judul_donasi }}</h5>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    <h5 class="card-text fw-bold">Target Donasi: Rp.{{ number_format($item->target, 2, ',', '.') }}</h5>
                    <h5 class="card-text fw-bold">Terkumpul:</h5>

                    @if ($item->collected == $item->target || $item->collected > $item->target)
                        <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="{{ ($item->collected/$item->target)*100 }}" aria-valuemin="0" aria-valuemax="{{ $item->target }}">
                            <div class="progress-bar bg-success" style="width: 100%">100%</div>
                        </div>

                        <div class="d-grid" disabled>
                            <button type="button" class="btn btn-primary" disabled>Target Form Sudah Terpenuhi, Terima Kasih!</button>
                        </div>
                    @else
                        <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="{{ ($item->collected/$item->target)*100 }}" aria-valuemin="0" aria-valuemax="{{ $item->target }}">
                            <div class="progress-bar bg-success" style="width: {{ ($item->collected/$item->target)*100 }}%">{{ round($item->collected/$item->target,3)*100 }}%</div>
                        </div>
                        <div class="d-grid">
                            <a href="/form/{{ $item->id }}" class="btn btn-primary">Ayo Donasi!</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <div class="container d-flex justify-content-center mt-5">
        <h3>Tidak ada Donasi yang tersedia!</h3>
    </div>
@endif

@endsection
