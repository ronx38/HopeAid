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
            Update Documentation
        </div>
        <div class="card-body">
            <form action="/admin/documentation/update-documentation/{{ $id->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="jenis">Judul Dokumentasi:</label>
                    <input type="text" class="form-control mb-4" id="judul_dokum" required name="judul_dokum">

                    <label for="jenis">Deskripsi Dokumentasi:</label>
                    <input type="text" class="form-control mb-4" id="deskripsi_dokum" required name="deskripsi_dokum">

                    <label for="jenis">Foto Dokumentasi:</label>
                    <input type="file" class="form-control" id="photo_dokum" required name="photo_dokum" accept=".png, .jpeg, .jpg">

                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
