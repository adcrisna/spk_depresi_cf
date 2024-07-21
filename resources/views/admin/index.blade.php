@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <div class="login-logo">
                    <b>Sistem Pakar Diagnosa Tingkat Depresi Mahasiswa</b> <br>Metode Certainty Factor
                    {{-- {{ bcrypt('password') }} --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ count($diagnosis) }}</h3>

                        <p>Jumlah Diagnosis</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.diagnosis') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ count($gejala) }}</h3>

                        <p>Jumlah Gejala</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.gejala') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ count($aturan) }}</h3>

                        <p>Jumlah Aturan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.aturan') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
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
