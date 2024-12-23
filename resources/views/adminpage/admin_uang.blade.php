@extends('layout.layout_admin')

@section('title', 'HopeAid - Database')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">List of Uang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">List of Uang Page</li>
    </ol>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jenis Donasi ID</th>
                        <th>User ID</th>
                        <th>Nominal</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Jenis Donasi ID</th>
                        <th>User ID</th>
                        <th>Nominal</th>
                        <th>Photo</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $uang as $item )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->jenis_donasi_id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>Rp. {{ number_format($item->nominal, 2, ',', '.') }}</td>
                        @if ($item->photo)
                        <td><img src="{{ asset('bukti/'.$item->photo) }}" width="200"></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
