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
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h3 class="box-title">Isi Data Diri</h3>
                        </center>
                    </div>
                    <div class="box-body table-responsive">
                        <form action="{{ route('diagnosa') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>Nama:</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>NIM :</label>
                                        <input type="number" name="nim" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>Program Studi:</label>
                                        <input type="text" name="prodi" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>Semester :</label>
                                        <input type="number" name="semester" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>Alamat:</label>
                                        <textarea name="alamat" class="form-control" cols="3" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label>NO HP/WHATSAPP :</label>
                                        <input type="number" name="no_hp" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="box-header">
                                <center>
                                    <h3 class="box-title">Pilih Gejala Depresi</h3>
                                </center>
                            </div>
                            <br>
                            @foreach ($gejala as $key => $value)
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group has-feedback">
                                            <label>{{ $value->name }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group has-feedback">
                                            <select name="{{ $value->id }}" class="form-control">
                                                <option value="">Pilih</option>
                                                @foreach ($aturan as $key => $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <br>
                            <br>
                            <div class="row">
                                <center>
                                    <button type="submit" class="btn btn-primary">Diagnosa
                                        Depresi</button>
                                </center>
                            </div>
                        </form>
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
