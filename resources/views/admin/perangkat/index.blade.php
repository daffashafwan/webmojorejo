@extends('layouts.admin.master')
@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/js/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
    <div class="block">
        <div class="block-header">
            <div class="col">
                <div class="float-left">
                    <h2>Kelola Perangkat Desa</h2>
                </div>
                <div class="float-right">
                    <a data-toggle="modal" data-target="#modal-tambah-popout" href="" class="btn btn-primary">Tambah Perangkat Desa</a>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <table id="tables" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th>Nama</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Jabatan</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Masa Jabatan</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perangkat as $p)
                    <tr>
                        <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                        <td class="font-w600 font-size-sm">{{$p->nama_perangkat}}</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$p->jabatan}}
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">{{$p->masa_jabatan}}</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <form action="{{route('admin.berita.ubah-status-perangkat')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$p->id}}">
                                <input value="<?php echo(($p->status == 1) ? 'aktif' : 'tidak aktif') ?>" type="hidden" name="gantistatus" id="">
                                <button class="badge form-control btn badge-<?php echo(($p->status == 1) ? 'success' : 'danger') ?>" type="submit"><?php echo(($p->status == 1) ? 'Aktif' : 'Tidak Aktif')?></button>
                            </form>
                        </td>
                        <td>
                            <div class="btn-group mr-2 mb-2" role="group" aria-label="Icons Text group">
                                <a type="button" class="text-white btn btn-primary">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <a pid="{{$p->id}}" data-toggle="modal" data-target="#modal-hapus-perangkat-popout" type="button" class="modal-hapus-perangkat-popout text-white btn btn-danger">
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
    <div class="modal fade" id="modal-tambah-popout" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-popout" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Tambah Perangkat Desa Baru</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form enctype="multipart/form-data" action="{{route('admin.perangkat.post')}}" method="POST">
                        @csrf
                        <input type="hidden" name="action" value="tambah">
                        <div class="block-content font-size-sm form-group">
                                <div class="form-group">
                                    <label for="nama_perangkat">Masukkan Nama Perangkat Desa Baru</label>
                                    <input id="nama_perangkat" name="nama_perangkat" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Silahkan Pilih Jabatan <a href="{{route('admin.perangkat.kelola')}}">Kelola Jabatan</a></label>
                                    <select class="form-control" id="jabatan" name="jabatan">
                                        <option value="0">Pilih salah satu</option>
                                        @foreach ($jabatan as $j)
                                        <option value="{{$j->nama_jabatan}}">{{$j->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Silahkan Pilih Masa Jabatan <a href="{{route('admin.perangkat.kelola')}}">Kelola Masa Jabatan</a></label>
                                    <select class="form-control" id="jabatan" name="masa_jabatan">
                                        <option value="0">Pilih salah satu</option>
                                        @foreach ($masa_jabatan as $mj)
                                        <option value="{{$mj->tahun_mulai}} - {{$mj->tahun_selesai}}">{{$mj->tahun_mulai}} - {{$mj->tahun_selesai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="jabatan" name="status">
                                        <option selected value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" name="gambar" type="file" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                    </div>    
                                </div>
                                
                                
                                
                        
                            <!-- Uploaded image area-->
                            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                            <div class="image-area mt-4"><img style="max-width: 50%; max-height: 50%" id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
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
    <div class="modal fade" id="modal-hapus-perangkat-popout" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-perangkat-popout" aria-hidden="true">
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
                    <form id="formHapusPerangkat" action="" method="POST">
                        @method('delete')
                        @csrf
                        <div class="block-content font-size-sm form-group">
                            <h4>Yakin ingin menghapus perangkat ini ?</h4>
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
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>

<script>
    $(".modal-hapus-perangkat-popout").click(function (e) {
        let pid = $(this).attr("pid");
        $('#formHapusPerangkat').attr('action', '/admin/perangkat/delete-perangkat/' + pid);
    });
</script>
@endsection