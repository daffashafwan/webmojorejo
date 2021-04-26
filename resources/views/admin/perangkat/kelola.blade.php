@extends('layouts.admin.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/js/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Kelola <small
                    class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Jabatan dan Masa Jabatan</small>
            </h1>
        </div>
    </div>
</div>
<div class="block">
    <div class="block-header">
        <div class="col">
            <div class="float-left">
                <h5>Kelola Jabatan</h5>
            </div>
            <div class="float-right">
                <a data-toggle="modal" data-target="#modal-tambah-jabatan-popout" href="" class="btn btn-primary">Tambah Jabatan</a>
            </div>
        </div>
    </div>
    <div class="block-content block-content-full">
        <table id="tables" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">No</th>
                    <th>Nama Jabatan</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatan as $j)
                <tr>
                    <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                    <td class="font-w600 font-size-sm">{{$j->nama_jabatan}}</td>
                    <td>
                        <div class="btn-group mr-2 mb-2" role="group" aria-label="Icons Text group">
                            <a jid="{{$j->nama_jabatan}}" data-toggle="modal" data-target="#modal-edit-jabatan-popout" type="button" class="modal-edit-jabatan-popout text-white btn btn-primary">
                                <i class="fa fa-fw fa-edit"></i>
                            </a>
                            <a jid="{{$j->id}}" data-toggle="modal" data-target="#modal-hapus-jabatan-popout" type="button" class="modal-hapus-jabatan-popout text-white btn btn-danger">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="block">
    <div class="block-header">
        <div class="col">
            <div class="float-left">
                <h5>Kelola Masa Jabatan</h5>
            </div>
            <div class="float-right">
                <a data-toggle="modal" data-target="#modal-tambah-masa-jabatan-popout" href="" class="btn btn-primary">Tambah Masa Jabatan</a>
            </div>
        </div>
    </div>
    <div class="block-content block-content-full">
        <table id="tables" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">No</th>
                    <th>Tahun Mulai</th>
                    <th>Tahun Selesai</th>
                    <th>Status</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($masa_jabatan as $mj)
                <tr>
                    <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                    <td class="font-w600 font-size-sm">{{$mj->tahun_mulai}}</td>
                    <td class="font-w600 font-size-sm">{{$mj->tahun_selesai}}</td>
                    <td class="font-w600 font-size-sm">{{($mj->status == 1) ? 'Aktif' : 'Tidak Aktif'}}</td>
                    <td>
                        <div class="btn-group mr-2 mb-2" role="group" aria-label="Icons Text group">
                            <a mjid="{{$mj->id}}" mjm="{{$mj->tahun_mulai}}" mjs="{{$mj->tahun_selesai}}" data-toggle="modal" data-target="#modal-edit-masa-jabatan-popout" type="button" class="modal-edit-masa-jabatan-popout text-white btn btn-primary">
                                <i class="fa fa-fw fa-edit"></i>
                            </a>
                            <a mjid="{{$mj->id}}" data-toggle="modal" data-target="#modal-hapus-masa-jabatan-popout" type="button" class="modal-hapus-masa-jabatan-popout text-white btn btn-danger">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-tambah-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Jabatan Baru</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="tambah">
                        <label for="nama_jabatan">Masukkan Jabatan Baru</label>
                        <input id="nama_jabatan" name="nama_jabatan" type="text" class="form-control">
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-edit-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-edit-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Ganti Nama Jabatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="edit">
                        <label for="edit_nama_jabatan">Masukkan Nama Jabatan Baru</label>
                        <input id="edit_nama_jabatan" name="edit_nama_jabatan" type="text" class="form-control">
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-hapus-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Hapus Jabatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form id="formHapusBerita" action="" method="POST">
                    @method('delete')
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="hapus">
                        <h4>Yakin ingin menghapus jabatan ini ?</h4>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->


<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-tambah-masa-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-masa-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Masa Jabatan Baru</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="tambah">
                        <label for="masa_abatan">Masukkan Masa Jabatan Baru</label>
                        <input id="masa_abatan" name="masa_abatan" type="text" class="form-control">
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-edit-masa-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-edit-masa-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Ganti masa Jabatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="edit">
                        <label for="edit_masa_jabatan">Masa Jabatan Sekarang</label>
                        <input disabled id="edit_masa_jabatan" name="edit_masa_jabatan" type="text" class="form-control">
                        <label for="edit_masa_jabatan_tahun_mulai">Tahun Mulai</label>
                        <input id="edit_masa_jabatan_tahun_mulai" name="edit_masa_jabatan_tahun_mulai" type="text" class="form-control">
                        <label for="edit_masa_jabatan_tahun_selesai">Tahun Selesai</label>
                        <input id="edit_masa_jabatan_tahun_selesai" name="edit_masa_jabatan_tahun_selesai" type="text" class="form-control">
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-hapus-masa-jabatan-popout" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-jabatan-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Hapus Masa Jabatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form id="formHapusBerita" action="" method="POST">
                    @method('delete')
                    @csrf
                    <div class="block-content font-size-sm form-group">
                        <input type="hidden" name="action" value="hapus">
                        <h4>Yakin ingin menghapus masa jabatan ini ?</h4>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->
@endsection

@section('script')
<script src="{{asset('assets/admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/admin/js/pages/be_tables_datatables.min.js')}}"></script>
<script>
    $(".modal-edit-jabatan-popout").click(function (e) {
        let jid = $(this).attr("jid")
        $('#edit_nama_jabatan').val(jid);
    });

    $(".modal-edit-masa-jabatan-popout").click(function (e) {
        let mjid = $(this).attr("mjid");
        let mj = $(this).attr("mjm") + " - " + $(this).attr("mjs");
        $('#edit_masa_jabatan').val(mj);
    });

    $(".modal-hapus-jabatan-popout").click(function (e) {
        let id = $(this).attr("bid")
        $('#formHapusBerita').attr('action', '/admin/berita/delete/' + id );
    });
</script>
@endsection
