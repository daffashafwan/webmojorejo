@extends('layouts.admin.master')
@section('css')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">    
@endsection
@section('content')
<!-- Dynamic Table Full Pagination -->
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Haaman Berita <small>Web Desa Mojorejo</small></h3>
    </div>
    <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Judul Berita</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Tanggal Post</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $b)
                <tr>
                <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                    <td class="font-w600 font-size-sm">{{$b->judul_berita}}</td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                        {{$b->created_at}}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-<?php echo(($b->status == 'Aktif') ? 'success' : 'danger')?>"><?php echo(($b->status == 'Aktif') ? 'Aktif' : 'Tidak Aktif')?></span>
                    </td>
                    <td>
                        <div class="btn-group mr-2 mb-2" role="group" aria-label="Icons Text group">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-fw fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-fw fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-fw fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full Pagination -->
@endsection
@section('script')
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>    
@endsection