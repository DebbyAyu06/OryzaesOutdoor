@extends('artikel/template/app')

@section('content')

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <h1 class="text-white">Oryzaes</h1>
    </div>
</div>

<!-- deskripsi -->
<div class="container my-5 d-grid gap-5">
    <div class="row">
        <div class="col">
            <img src="../assets/img/ory.jpg" class="rounded" alt="images" width="500px">
        </div>
        <div class="col" id="deskripsi">
            <p style="text-align: justify;">
                Oryzaes Outdoor merupakan salah satu penyedia jasa penyewaan alat camping dan outdoor yang
                terletak di Banyuwangi. Oryzaes Outdoor berdiri sejak tahun 2014 yang bergerak di bidang usaha penyewaan
                alat outdoor. Jumlah keseluruhan alat yang disewakan yaitu 900 alat yang terbagi dalam beberapa jenis.
                Dalam satu bulan oryzaes outdoor dapat melayani 180 hingga 200 kali penyewaan alat. Oryzaes outdoor
                memiliki berbagai jenis alat yang dapat digunakan dalam aktivitas seperti berkemah, panjat tebing, dan
                salah satu yang sangat meningkat pesat saat ini adalah mendaki gunung.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid" id="kontak">
    <div class="container">
        <div class="row justify-content-around text-black">
            <div class="col-5">
                <a>
                    <i class="fas fa-map-marker-alt fa-3x" style="color: black;"></i>
                    <span id="alamat">Alamat Kami</span>
                </a>
                <p style="text-align: justify;">
                    Jl. MH Thamrin perum villa bukit mas blok O-30, Lingkungan Payaman, Giri, Banyuwangi Regency, East
                    Java 68423
                </p>
            </div>
            <div class="col-3">
                <p>
                    <span>Kontak</span>
                </p>
                <a style="text-align: justify;">
                    <i class="fas fa-phone-square-alt" style="color: black;"></i>
                    <span>0852-3618-3195</span>
                </a>
            </div>
            <div class="col-3">
                <p>
                    <span>Sosial Media</span>
                </p>
                <a style="text-align: justify;">
                    <i class="fab fa-instagram-square" style="color: black;"></i>
                    <span>@oryzaes</span>
                </a>
                <p style="text-align: justify;">
                    <i class="fab fa-facebook-square" style="color: black;"></i>
                    <span>Oryzaes Outdoors</span>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="sticky-footer bg-secondary p-md-3">
    <div class="container my-auto">
        <div class="copyright text-center my-auto text-white">
            <span>Copyright &copy; Oryzaes 2022</span>
        </div>
    </div>
</footer>

@endsection