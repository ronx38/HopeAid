@extends('layout.layout')

@section('title', 'FAQ - HopeAid')

@section('content')

<div class="container mt-4">
    <h2 class="d-flex justify-content-center mb-4 fw-bold fst-italic">Frequently Ask and Question</h2>
    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">1. Apa itu website HopeAid ini?</h4>
        Website ini adalah platform untuk menggalang dana dan barang guna membantu korban bencana alam atau kemanusiaan. Anda dapat berdonasi dalam bentuk uang maupun barang sesuai kebutuhan yang tertera pada kampanye.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">2. Apa saja bentuk donasi yang diterima?</h4>
        Kami menerima:
        <ul>
            <li class="fst-italic">Uang: Donasi finansial yang akan disalurkan langsung ke korban atau untuk pembelian kebutuhan darurat.</li>
            <li class="fst-italic">Barang: Kebutuhan pokok seperti pakaian, makanan, obat-obatan, perlengkapan bayi, selimut, dll.</li>

        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">3. Bagaimana cara berdonasi dalam bentuk uang?</h4>
        <ul>
            <li>Buka form untuk donasi</li>
            <li>Klik tombol Donasi Uang.</li>
            <li>Masukkan jumlah donasi.</li>
            <li>Lakukan pembayaran melalui metode yang tersedia (transfer bank, e-wallet, kartu kredit).</li>
        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">4. Bagaimana cara berdonasi dalam bentuk barang?</h4>
        <ul>
            <li>Buka form untuk donasi</li>
            <li>Klik tombol Donasi Barang.</li>
            <li>Lihat daftar kebutuhan yang dibutuhkan.</li>
            <li>Kirim barang ke alamat posko yang tertera, atau jadwalkan penjemputan (jika tersedia di lokasi Anda).</li>
        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">5. Apakah barang donasi harus baru?</h4>
        Tidak harus baru, tetapi kami menghimbau barang yang didonasikan berada dalam kondisi layak pakai dan higienis, terutama untuk pakaian dan perlengkapan lainnya.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">6. Bagaimana saya tahu barang atau uang saya sampai ke yang membutuhkan?</h4>
        Kami memastikan transparansi dengan:
        <ul>
            <li>Mengunggah laporan berkala tentang distribusi barang dan uang.</li>
            <li>Menyediakan foto, video, atau bukti dokumentasi penyaluran di halaman kampanye.</li>
        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">7. Apa saja barang yang dibutuhkan?</h4>
        Barang yang umumnya dibutuhkan:
        <ul>
            <li>Pakaian layak pakai (anak-anak dan dewasa).</li>
            <li>Sembako (beras, mie instan, makanan kaleng).</li>
            <li>Obat-obatan dan perlengkapan P3K.</li>
            <li>Perlengkapan bayi (popok, susu formula).</li>
            <li>Selimut, tikar, atau tenda darurat.</li>
        </ul>
        Daftar kebutuhan dapat bervariasi berdasarkan jenis bencana dan lokasi.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">8. Apakah ada batas minimum untuk donasi uang?</h4>
        Batas minimum donasi uang adalah Rp10.000, namun Anda bebas berdonasi sesuai kemampuan.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">9. Apakah donasi uang dapat dikembalikan?</h4>
        Donasi uang tidak dapat dikembalikan, kecuali jika terjadi kesalahan teknis. Hubungi tim kami jika membutuhkan bantuan terkait hal ini.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">10. Apakah barang donasi saya aman selama proses distribusi?</h4>
        Kami bekerja sama dengan mitra terpercaya untuk memastikan barang donasi sampai kepada penerima dengan aman dan tepat waktu.
    </div>

    <div class="alert alert-primary" role="alert">
        <h4 class="fw-bold">11. Apakah data saya aman?</h4>
        Keamanan data Anda adalah prioritas kami. Kami menggunakan teknologi enkripsi dan kebijakan privasi yang ketat untuk melindungi informasi Anda.
    </div>
</div>

@endsection
