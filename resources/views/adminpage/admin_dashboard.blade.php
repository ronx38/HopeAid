@extends('layout.layout_admin')

@section('title', 'HopeAid - Database')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Page</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            {{-- <i class=""></i> --}}
            <a href="/admin/create-donation" class="btn btn-sm btn-primary">Add Donation</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Donasi</th>
                        <th>Deskripsi</th>
                        <th>Target Donasi</th>
                        <th>Terkumpul</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Judul Donasi</th>
                        <th>Deskripsi</th>
                        <th>Target Donasi</th>
                        <th>Terkumpul</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $donasi as $item )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul_donasi }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>Rp. {{ number_format($item->target, 2, ',', '.') }}</td>
                        <td>Rp. {{ number_format($item->collected, 2, ',', '.') }}</td>
                        @if ($item->donasi_photo)
                        <td><img src="{{ asset('image_donation/'.$item->donasi_photo) }}" width="100"></td>
                        @endif
                        <td>
                            <a href="/admin/update-donation/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{  $item->id  }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Item</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin akan menghapus <span class="fw-bold">{{ $item->judul_donasi }}</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    <form action="/admin/delete-donation/{{ $item->id }}" method="POST" style="display:inline;">
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
