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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h3 class="box-title">HASIL DIAGNOSA DEPRESI</h3>
                            @if (\Session::has('msg_success'))
                                <h5>
                                    <div class="alert alert-info">
                                        {{ \Session::get('msg_success') }}
                                    </div>
                                </h5>
                            @endif
                            @if (\Session::has('msg_error'))
                                <h5>
                                    <div class="alert alert-danger">
                                        {{ \Session::get('msg_error') }}
                                    </div>
                                </h5>
                            @endif
                        </center>
                    </div>
                    <div class="box-body table-responsive">
                        <br>
                        <center>
                            <h4><b>DATA MAHASISWA</b></h4>
                        </center>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Nama : </label>
                                <p>{{ $diagnosa->Mahasiswa->name }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>NIM : </label>
                                <p>{{ $diagnosa->Mahasiswa->nim }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>Program Studi : </label>
                                <p>{{ $diagnosa->Mahasiswa->prodi }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Semester : </label>
                                <p>{{ $diagnosa->Mahasiswa->semester }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>Alamat : </label>
                                <p>{{ $diagnosa->Mahasiswa->alamat }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>No HP/Whatsapp : </label>
                                <p>{{ $diagnosa->Mahasiswa->no_hp }}</p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <center>
                            <h4><b>GEJALA YANG DIPILIH</b></h4>
                        </center>
                        <table class="table table-bordered table-striped" id="data-spk">
                            <thead>
                                <tr>
                                    <th>Gejala</th>
                                    <th>Jawaban</th>
                                    <th>MB</th>
                                    <th>MD</th>
                                    <th>CF</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diagnosa->gejala as $key => $value)
                                    <tr>
                                        <td>{{ $value['gejala'] }}</td>
                                        <td>{{ $value['jawaban'] }}</td>
                                        <td>{{ $value['mb'] }}</td>
                                        <td>{{ $value['md'] }}</td>
                                        <td>{{ $value['cf'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <center>
                            <h4><b>DIAGNOSA GEJALA</b></h4>
                        </center>
                        <br>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <label>Total Nilai : </label>
                                <p>{{ $diagnosa->total }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>Status : </label>
                                <p>{{ $diagnosa->status }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label>Presentase : </label>
                                <p>{{ @$diagnosa->presentase }}%</p>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <center>
                            <h4><b>PENANGANAN DEPRESI</b></h4>
                        </center>
                        <br>
                        <div class="row text-center">
                            Penanganan depresi harus disesuaikan dengan tingkat keparahannya:
                            <br>
                            <br>
                            @if ($diagnosa->status == 'Depresi Ringan')
                                <li><b>Depresi Ringan :</b> Terapi psikologis seperti terapi kognitif-behavioral
                                    (CBT),
                                    dukungan
                                    sosial, dan perubahan gaya hidup sehat sering kali cukup efektif.</li>
                            @elseif ($diagnosa->status == 'Depresi Sedang')
                                <li><b>Depresi Sedang :</b> Kombinasi terapi psikologis dan medikasi, seperti
                                    antidepresan, mungkin
                                    diperlukan. Dukungan dari keluarga dan teman juga sangat penting.</li>
                            @else
                                <li><b>Depresi Berat :</b> Penanganan medis yang intensif, termasuk terapi obat
                                    yang
                                    lebih kuat,
                                    terapi elektrokonvulsif (ECT) dalam kasus tertentu, dan perawatan di rumah
                                    sakit
                                    jika
                                    diperlukan. Terapi psikologis intensif dan dukungan sosial sangat penting
                                    dalam
                                    tahap ini.</li>
                            @endif
                            <br>
                            Mengidentifikasi dan menangani depresi pada setiap tingkatan sangat penting untuk
                            membantu individu <br>
                            mengembalikan kesejahteraan mereka dan menjalani kehidupan yang lebih produktif dan
                            bahagia.

                        </div>
                    </div>
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
@endsection
