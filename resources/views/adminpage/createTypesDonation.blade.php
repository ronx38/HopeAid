@extends('layout.layout_admin')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Types of Donation</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Types of Donation</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Add Types of Donation
            </div>
            <div class="card-body">
                <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="jenis">Jenis Donasi:</label>
                        <input type="text" class="form-control @error('item_donasi') is-invalid @enderror" id="item_donasi" required name="item_donasi" value="{{ old('item_donasi') }}">
                        @error('item_donasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
