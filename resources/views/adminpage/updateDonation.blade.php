@extends('layout.layout_admin')

@section('title', 'HopeAid - Database')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Update Donation
            </div>
            <div class="card-body">
                <form action="/admin/update-donation/{{ $id->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="jenis">Judul Donasi:</label>
                        <input type="text" class="form-control mb-4" id="judul_donasi" required name="judul_donasi">

                        <label for="jenis">Deskripsi Donasi:</label>
                        <input type="text" class="form-control mb-4" id="deskripsi_donasi" required name="deskripsi_donasi">

                        <label for="jenis">Target:</label>
                        <input type="number" class="form-control mb-4" id="target_donasi" required name="target_donasi" min="0" max="999999999">

                        <label for="jenis">Photo:</label>
                        <input type="file" class="form-control" id="photo_donasi" required name="photo_donasi" accept=".png, .jpeg, .jpg">

                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
