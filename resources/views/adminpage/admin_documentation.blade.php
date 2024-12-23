@extends('layout.layout_admin')

@section('title', 'HopeAid - Database')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Documentation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Documentation Page</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            {{-- <i class=""></i> --}}
            <a href="/admin/documentation/create-documentation" class="btn btn-sm btn-primary">Add Documentation</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Dokumentasi</th>
                        <th>Deskripsi Dokumentasi</th>
                        <th>Foto Dokumentasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Judul Dokumentasi</th>
                        <th>Deskripsi Dokumentasi</th>
                        <th>Foto Dokumentasi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $dokum as $item )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul_dokum }}</td>
                        <td>{{ $item->deskripsi_dokum }}</td>
                        @if($item->photo_dokum)
                        <td><img src="{{ asset('image_documentation/'.$item->photo_dokum) }}" alt="" width="250"></td>
                        @endif
                        <td>
                            <a href="/admin/documentation/update-documentation/{{ $item->id }}" class="btn btn-sm btn-warning">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Dokumentasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin akan menghapus data <span class="fw-bold">{{ $item->judul_dokum }}</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    {{-- <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;"> --}}
                                    <form action="/admin/documentation/create-documentation/{{ $item->id }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
