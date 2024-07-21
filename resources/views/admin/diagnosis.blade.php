@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
    <style>
        img.zoom {
            width: 130px;
            height: 100px;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            -ms-transition: all .2s ease-in-out;
        }

        .transisi {
            -webkit-transform: scale(1.8);
            -moz-transform: scale(1.8);
            -o-transform: scale(1.8);
            transform: scale(1.8);
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Data Diagnosis</li>
        </ol>
        <br />
    </section>
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
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Data Diagnosis</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped" id="data-spk">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Prodi</th>
                                    <th>Semester</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Total</th>
                                    <th>Presentase</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (@$diagnosis as $key => $value)
                                    <tr>
                                        <td>{{ @$value->id }}</td>
                                        <td>{{ @$value->Mahasiswa->name }}</td>
                                        <td>{{ @$value->Mahasiswa->nim }}</td>
                                        <td>{{ @$value->Mahasiswa->prodi }}</td>
                                        <td>{{ @$value->Mahasiswa->semester }}</td>
                                        <td>{{ @$value->Mahasiswa->alamat }}</td>
                                        <td>{{ @$value->Mahasiswa->no_hp }}</td>
                                        <td>{{ @$value->total }}</td>
                                        <td>{{ @$value->presentase }}%</td>
                                        <td>{{ @$value->status }}</td>
                                        <td width="140px">
                                            <a href="{{ route('admin.detailDiagnosis', $value->id) }}"><button
                                                    class=" btn btn-xs btn-info"><i class="fa fa-eye">
                                                        Detail</i></button></a> &nbsp;
                                            <a href="{{ route('admin.deleteDiagnosis', $value->id) }}"><button
                                                    class=" btn btn-xs btn-danger"
                                                    onclick="return confirm('Apakah anda ingin menghapus data ini ?')"><i
                                                        class="fa fa-trash"> Hapus</i></button></a> &nbsp;
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        var table = $('#data-spk').DataTable();

        $(document).ready(function() {
            $('.zoom').hover(function() {
                $(this).addClass('transisi');
            }, function() {
                $(this).removeClass('transisi');
            });
        });
    </script>
@endsection
