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
            {{-- <i class=""></i> --}}
            <a href="#" class="btn btn-sm btn-primary">Add Form</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nominal</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tipe Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nominal</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tipe Barang</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $forms as $item )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->nominal }}</td>
                        @if($item->photo)
                        <td><img src="{{ asset('bukti/'.$item->photo) }}" alt="" width="350"></td>
                        @endif
                        <td>{{ $item->tipe_barang }}</td>
                        <td>
                            {{-- <a href="{{ route('index.edit', $item->id) }}" class="btn btn-sm btn-warning">edit</a> --}}
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}"> --}}
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#">
                                Delete
                            </button>
                        </td>
                    </tr>
                    {{-- <div class="modal fade" id="exampleModal{{$k->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true"> --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Apakah anda yakin akan menghapus data {{$k->nama}} --}}
                                    Apakah anda yakin akan menghapus data
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    {{-- <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;"> --}}
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
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
