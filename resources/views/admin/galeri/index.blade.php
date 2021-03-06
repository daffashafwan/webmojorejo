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
        <h3 class="block-title">Halaman Gambar <small>Web Desa Mojorejo</small></h3>
    </div>

    <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <div>
            <a href="{{route('admin.galeri.tambah')}}" style="text-decoration: none"
                class="btn btn-primary mb-2 text-white">Tambah Gambar</a>
        </div>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Judul Gambar</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Kategori</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Status</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeri as $g)
                <tr>
                    <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                    <td class="font-w600 font-size-sm">{{$g->judul_gambar}}</td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                        {{$g->kategori}}
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <form action="{{route('admin.galeri.ubah-status-gambar')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$g->id}}">
                            <input value="<?php echo(($g->status == 'Aktif') ? '1' : '0') ?>" type="hidden" name="gantistatus" id="">
                            <button class="badge form-control btn badge-<?php echo(($g->status == 'Aktif') ? 'success' : 'danger') ?>" type="submit"><?php echo(($g->status == 'Aktif') ? 'Aktif' : 'Tidak Aktif')?></button>
                        </form>
                    </td>
                    <td>
                        <div class="btn-group mr-2 mb-2" role="group" aria-label="Icons Text group">
                            <a data-toggle="modal" data-target="#modal-lihat-gambar-popout" type="button" path="{{url('userfiles/images/galeri/'.$g->path)}}"
                                class="modal-lihat-gambar-popout text-white btn btn-primary">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a bid="{{$g->id}}" data-toggle="modal" data-target="#modal-hapus-popout" type="button"
                                class="modal-hapus-popout text-white btn btn-danger">
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
<!-- END Dynamic Table Full Pagination -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-lihat-gambar-popout" tabindex="-1" role="dialog" aria-labelledby="modal-lihat-gambar-popout"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Lihat Gambar</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                    <div class="block-content  form-group">
                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img style="max-width: 50%; max-height: 50%" id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-edit-gambar-popout" tabindex="-1" role="dialog" aria-labelledby="modal-edit-gambar-popout"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Lihat Gambar</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="block-content  form-group">
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <input id="upload" name="gambar" type="file" onchange="readURL(this);" class="form-control border-0">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>
                        
                        <!-- Uploaded image area-->
                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img style="max-width: 50%; max-height: 50%" id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
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
<div class="modal fade" id="modal-hapus-popout" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-popout"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Hapus Berita</h3>
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
                        <h4>Yakin ingin menghapus gambar ini ?</h4>
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="{{asset('admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('admin/js/pages/be_tables_datatables.min.js')}}"></script>
<script>
    $(".modal-lihat-gambar-popout").click(function (e) {
        let path = $(this).attr("path")
        $('#imageResult').attr('src', path);
    });
    

    $(".modal-hapus-popout").click(function (e) {
        let id = $(this).attr("bid")
        $('#formHapusBerita').attr('action', '/admin/galeri/delete-gambar/' + id);
    });

</script>
@endsection
