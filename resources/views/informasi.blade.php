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
            <div class="col-sm-12">
                <br />
                <div class="login-logo">
                    <b>INFORMASI</b> <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="attachment-block clearfix">
                <center>
                    <h4><b>Depresi Ringan</b></h4>
                </center>
                <div class="attachment-pushed" style="margin-left:0 !important;">
                    <div class="attachment-text">
                        Depresi rendah atau ringan ditandai oleh gejala yang lebih ringan dan mungkin tidak selalu terlihat
                        jelas. Gejala ini mungkin tidak cukup parah untuk mengganggu kehidupan sehari-hari secara
                        signifikan, tetapi tetap dapat memengaruhi kualitas hidup. Gejala depresi ringan meliputi:
                        <br>
                        <br>
                        <li>Perasaan sedih atau murung yang berlangsung hampir setiap hari.</li>
                        <li>Kehilangan minat atau kesenangan dalam aktivitas yang biasanya dinikmati.</li>
                        <li>Kelelahan ringan.</li>
                        <li>Kesulitan konsentrasi atau mengambil keputusan, namun tidak terlalu parah.</li>
                        <li>Sedikit perubahan dalam pola tidur atau nafsu makan.</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="attachment-block clearfix">
                <center>
                    <h4><b>Depresi Sedang</b></h4>
                </center>
                <div class="attachment-pushed" style="margin-left:0 !important;">
                    <div class="attachment-text">
                        Depresi sedang lebih terasa dan dapat memengaruhi kemampuan seseorang untuk berfungsi dengan baik
                        dalam kehidupan sehari-hari. Gejala-gejalanya lebih intens dan dapat mencakup:
                        <br>
                        <br>
                        <li>Kesedihan atau perasaan kosong yang lebih konsisten.</li>
                        <li>Penurunan signifikan dalam minat atau kesenangan dalam sebagian besar aktivitas.</li>
                        <li>Perubahan yang lebih jelas dalam pola tidur (insomnia atau tidur berlebihan) dan nafsu makan.
                        </li>
                        <li>Kelelahan yang lebih parah dan kurang energi.</li>
                        <li>Kesulitan yang lebih besar dalam konsentrasi dan membuat keputusan.</li>
                        <li>Merasa tidak berharga atau bersalah berlebihan.</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="attachment-block clearfix">
                <center>
                    <h4><b>Depresi Berat</b></h4>
                </center>
                <div class="attachment-pushed" style="margin-left:0 !important;">
                    <div class="attachment-text">
                        Depresi tinggi atau parah adalah bentuk depresi yang paling serius dan dapat sangat mengganggu
                        kehidupan seseorang. Orang dengan depresi parah mungkin tidak mampu menjalani aktivitas sehari-hari
                        seperti bekerja, belajar, atau merawat diri sendiri. Gejala depresi parah meliputi:
                        <br>
                        <br>
                        <li>Kesedihan yang mendalam dan perasaan putus asa hampir sepanjang waktu.</li>
                        <li>Kehilangan total minat atau kesenangan dalam semua atau hampir semua aktivitas.</li>
                        <li>Perubahan berat badan yang signifikan atau perubahan besar dalam pola tidur.</li>
                        <li>Kelelahan yang ekstrem dan penurunan energi yang signifikan.</li>
                        <li>Kesulitan konsentrasi yang berat atau ketidakmampuan untuk berpikir jernih.</li>
                        <li>Pikiran berulang tentang kematian atau bunuh diri, atau upaya bunuh diri.</li>
                        <li>Gejala fisik seperti nyeri atau masalah pencernaan tanpa penyebab medis jelas.</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="attachment-block clearfix">
                <center>
                    <h4><b>Penanganan Depresi</b></h4>
                </center>
                <div class="attachment-pushed" style="margin-left:0 !important;">
                    <div class="attachment-text">
                        Penanganan depresi harus disesuaikan dengan tingkat keparahannya:
                        <br>
                        <br>
                        <li><b>Depresi Ringan :</b> Terapi psikologis seperti terapi kognitif-behavioral (CBT), dukungan
                            sosial, dan perubahan gaya hidup sehat sering kali cukup efektif.</li>
                        <li><b>Depresi Sedang :</b> Kombinasi terapi psikologis dan medikasi, seperti antidepresan, mungkin
                            diperlukan. Dukungan dari keluarga dan teman juga sangat penting.</li>
                        <li><b>Depresi Berat :</b> Penanganan medis yang intensif, termasuk terapi obat yang lebih kuat,
                            terapi elektrokonvulsif (ECT) dalam kasus tertentu, dan perawatan di rumah sakit jika
                            diperlukan. Terapi psikologis intensif dan dukungan sosial sangat penting dalam tahap ini.</li>
                        <br>
                        Mengidentifikasi dan menangani depresi pada setiap tingkatan sangat penting untuk membantu individu
                        mengembalikan kesejahteraan mereka dan menjalani kehidupan yang lebih produktif dan bahagia.
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
