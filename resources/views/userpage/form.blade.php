@extends('layout.layout')

@section('title', 'Form - HopeAid')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="padding-top: 8%; padding-bottom: 8%;">
        <form method="POST" action="/form/{{ $forms->id }}" enctype="multipart/form-data" style="padding: 4%; border: 2px solid black; border-radius: 15px">
            @csrf
            <div class="fs-4">Form <span class="fw-bold">{{ $forms->judul_donasi }}</span></div>
            <div class="mb-3">
                <label class="form-label"> Name: </label>
                <input value="{{ $user->name }}" name="name" id="name" type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label"> Email: </label>
                <input value="{{ $user->email }}" name="email" id="email" type="email" class="form-control"
                    id="exampleInputPassword1" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label"> No. Telp: </label>
                <input name="telp" id="telp" type="text" class="form-control">
            </div>

            <div class="radio">
                <div class="isi-radio">
                    <input type="radio" class="radio-field" name="jenis_donasi" value="1" id="uang-radio"> Uang
                </div>

                <div class="isi-radio">
                    <input type="radio" class="radio-field" name="jenis_donasi" value="2" id="barang-radio"> Barang
                </div>
            </div>

            <div id="uang-dropdown" style="display: none;">
                <label for="amount">Pilih Nominal</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nominal-radio" id="nominal" value="10000">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 10.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nominal-radio" value="20000">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 20.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nominal-radio" value="30000">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 30.000
                    </label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Nominal Lain </label>
                    <input name="nominal" id="nominal" type="number" class="form-control" id="exampleInputPassword1">
                </div>

                <img src="{{ asset('image/qr_pembayaran.jpg') }}" alt="" width="300" class="pb-4">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran</label>
                    <input class="form-control" type="file" name="photo" accept=".jpeg, .png, .jpg">
                </div>
            </div>

            <div id="barang-dropdown" style="display: none;">
                <label>Tipe Barang</label>
                <select id="choice" name="choice">
                    <option value="Pakaian">Pakaian</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Peralatan Kesehatan">Peralatan Kesehatan</option>
                    <option value="Peralatan Dapur">Peralatan Dapur</option>
                    <option value="Perlengkapan Kebersihan">Perlengkapan Kebersihan</option>
                </select>

                <div class="mb-3">
                    <label class="form-label"> No. Resi: </label>
                    <input name="resi" id="resi" type="text" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label"> Notes: </label>
                <input name="notes" id="telp" type="text" class="form-control">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uangRadio = document.getElementById('uang-radio');
            const barangRadio = document.getElementById('barang-radio');
            const uangDropdown = document.getElementById('uang-dropdown');
            const barangDropdown = document.getElementById('barang-dropdown');

            function updateDropdowns() {
                if (uangRadio.checked) {
                    uangDropdown.style.display = 'block';
                    barangDropdown.style.display = 'none';
                } else if (barangRadio.checked) {
                    barangDropdown.style.display = 'block';
                    uangDropdown.style.display = 'none';
                } else {
                    uangDropdown.style.display = 'none';
                    barangDropdown.style.display = 'none';
                }
            }

            // Tambahkan event listener untuk radio button
            uangRadio.addEventListener('change', updateDropdowns);
            barangRadio.addEventListener('change', updateDropdowns);
        });
    </script>

@endsection
