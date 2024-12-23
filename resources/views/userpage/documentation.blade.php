@extends('layout.layout')

@section('title', 'Docomentation - HopeAid')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold">Dokumentasi Donasi</h1>
        <p class="text-center text-muted mb-5 fst-italic">
            Terima kasih atas donasi Anda! Berikut adalah beberapa momen di mana donasi Anda telah membantu para korban
            bencana.
        </p>
        @if ($documentations->count() > 0)
            <div class="d-flex flex-wrap">
                @foreach ($documentations as $doc)
                    <div class="card ms-5 mt-5" style="width: 18rem;">
                        @if ($doc->photo_dokum)
                            <img src="{{ asset('image_documentation/' . $doc->photo_dokum) }}" class="card-img-top"
                                alt="...">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title fw-bold">{{ $doc->judul_dokum }}</h4>
                            <p class="card-text">{{ $doc->deskripsi_dokum }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center">
                <p class="text-muted">Belum ada dokumentasi donasi yang tersedia.</p>
            </div>
        @endif
    </div>
@endsection
