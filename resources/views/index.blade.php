@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('index') }}"><i class="fa fa-home"></i> Beranda</a></li>
        </ol>
    </section>
    <br>
    <section class="content">
        <div class="row">
            <img class="img-responsive pad" src="{{ asset('mahasiswa.jpg') }}" alt="Photo"
                style="height: 450px; width:100%;">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <br />
                <div class="login-logo">
                    <b>DEPRESI PADA MAHASISWA</b> <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="attachment-block clearfix">
                <center>
                    <h4><b>Mengenal Depresi yang dialami oleh mahasiswa</b></h4>
                </center>
                <div class="attachment-pushed" style="margin-left:0 !important;">
                    <div class="attachment-text">
                        Depresi pada mahasiswa adalah kondisi mental yang ditandai oleh perasaan sedih yang mendalam,
                        kehilangan minat atau kesenangan dalam aktivitas sehari-hari, serta berbagai gejala fisik dan
                        emosional yang dapat mengganggu fungsi akademik, sosial, dan pribadi mereka. Gejala depresi meliputi
                        kesedihan yang berkepanjangan, perasaan putus asa, perubahan pola tidur dan nafsu makan, kelelahan,
                        serta kesulitan berkonsentrasi. Faktor penyebabnya beragam, mulai dari tekanan akademik yang tinggi,
                        masalah keuangan, hingga hubungan interpersonal yang bermasalah. Selain itu, perubahan hidup
                        signifikan seperti transisi dari sekolah menengah ke perguruan tinggi juga bisa memicu depresi.
                        Depresi ini berdampak negatif pada prestasi akademik, kehidupan sosial, dan kesehatan umum
                        mahasiswa, sehingga penting untuk mengenali tanda-tandanya dan mencari bantuan yang tepat.
                        Penanganan depresi bisa melalui konseling, terapi, penggunaan medikasi, serta dukungan sosial dari
                        teman dan keluarga. Manajemen stres dan gaya hidup sehat juga berperan penting dalam membantu
                        mahasiswa mengatasi depresi dan meningkatkan kesejahteraan mereka. Pendekatan holistik yang
                        melibatkan dukungan dari lingkungan kampus, keluarga, serta profesional kesehatan mental sangat
                        diperlukan untuk membantu mahasiswa menjalani kehidupan yang lebih seimbang dan produktif.

                        <br>
                        <br>
                        <h4>Gejala depresi pada mahasiswa</h4>
                        <p><b>1. Emosional</b></p>
                        <li>Kesedihan yang mendalam dan berkepanjangan</li>
                        <li>Perasaan putus asa atau tidak berharga</li>
                        <li>Mudah marah atau frustrasi</li>
                        <li>Hilangnya minat atau kesenangan dalam aktivitas yang sebelumnya dinikmati</li>
                        <br>
                        <p><b>2. Kognitif</b></p>
                        <li>Kesulitan berkonsentrasi atau mengambil keputusan</li>
                        <li>Pikiran negatif atau pesimis</li>
                        <li>Pikiran tentang kematian atau bunuh diri</li>
                        <br>
                        <p><b>3. Fisik</b></p>
                        <li>Perubahan pola tidur (insomnia atau tidur berlebihan)</li>
                        <li>Perubahan nafsu makan dan berat badan</li>
                        <li>Kelelahan atau penurunan energi</li>
                        <li>Keluhan fisik tanpa penyebab medis yang jelas</li>
                        <br>
                        <br>
                        <h4>Penyebab Depresi pada Mahasiswa</h4>
                        <p><b>1. Tekanan Akademik</b></p>
                        <li>Tuntutan akademik yang tinggi</li>
                        <li>Deadline tugas yang ketat</li>
                        <li>Ujian dan nilai</li>
                        <br>
                        <p><b>2. Masalah Keuangan</b></p>
                        <li>Biaya pendidikan yang tinggi</li>
                        <li>Beban hutang mahasiswa</li>
                        <li>Kebutuhan untuk bekerja sambil kuliah</li>
                        <br>
                        <p><b>3. Hubungan Interpersonal</b></p>
                        <li>Masalah dengan teman sekamar atau teman sekelas</li>
                        <li>Isolasi sosial atau kesepian</li>
                        <li>Masalah dalam hubungan romantis</li>
                        <br>
                        <p><b>4. Perubahan Hidup</b></p>
                        <li>Transisi dari sekolah menengah ke perguruan tinggi</li>
                        <li>Berpindah jauh dari rumah dan keluarga</li>
                        <li>Menyesuaikan diri dengan lingkungan baru</li>
                        <br>
                        <p><b>5. Faktor Genetik atau Biologis</b></p>
                        <li>Riwayat keluarga dengan gangguan mood</li>
                        <li>Ketidakseimbangan kimia di otak</li>
                        <br>
                        <br>
                        <h4>Dampak Depresi pada Mahasiswa</h4>
                        <li><b>Akademik :</b> Penurunan prestasi akademik, penundaan tugas, dan penurunan motivasi belajar.
                        </li>
                        <li><b>Sosial :</b> Isolasi sosial, konflik interpersonal, dan penurunan partisipasi dalam kegiatan
                            sosial.</li>
                        <li><b>Kesehatan :</b> Masalah kesehatan fisik yang disebabkan oleh stres dan kurangnya perawatan
                            diri.</li>
                        <li><b>Kesejahteraan Umum :</b> Penurunan kualitas hidup dan kesejahteraan emosional secara
                            keseluruhan.</li>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('adminlte/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/raphael/raphael-min.js') }}"></script>
    <script type="text/javascript">
        var table = $('#data-product').DataTable();
    </script>
@endsection
