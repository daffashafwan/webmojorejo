@extends('layouts.admin.master')

@section('content')
    <div class="block">
        <div class="block-header font-size-h4">
            <a href="{{url()->previous()}}" class="text-white btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i></a>
            <a data-toggle="modal" data-target="#modal-gambar-popout" href="" class="text-white btn btn-primary"><i class="fas fa-image"></i></a>
        </div>
        <div class="block-content block-content-full">
            <div class="block-content block-content-full text-center bg-image" style="max-height: 50%; background-image: url({{url('userfiles/images/'.$berita->gambar)}});">
                <div class="content content-full overflow-hidden">
                    <div class="my-8 text-center">
                        <a data-toggle="modal" data-target="#modal-judul-popout" href="">
                            <div style="background-color:rgba(0, 0, 0, 0.5)">
                                <h1 class="text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{$berita->judul_berita}}</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{route('admin.berita.edit.post', ['id'=>request()->route('id')])}}" method="POST">
                @csrf
                <input type="hidden" name="action" value="isi">
                <textarea name="isi_berita" id="isi_berita" cols="30" rows="10">{!! $berita->isi_berita !!}</textarea>
                <button class="btn btn-primary" type="submit">Simpan Isi Berita</button>
            </form>
            <a class="btn btn-success" href="{{route('admin.berita.index')}}">Selesai</a>
        </div>
        
    </div>


    <!-- Pop Out Block Modal -->
    <div class="modal fade" id="modal-judul-popout" tabindex="-1" role="dialog" aria-labelledby="modal-judul-popout" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Ganti Judul Baru</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('admin.berita.edit.post', ['id'=>request()->route('id')])}}" method="POST">
                        @csrf
                        <div class="block-content font-size-sm form-group">
                            <input type="hidden" name="action" value="judul">
                            <label for="judul_berita">Masukkan Judul Berita Baru</label>
                            <input id="judul_berita" name="judul_berita" type="text" class="form-control">
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
    <div class="modal fade" id="modal-gambar-popout" tabindex="-1" role="dialog" aria-labelledby="modal-gambar-popout" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Ganti Gambar Baru</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form enctype="multipart/form-data" action="{{route('admin.berita.edit.post', ['id'=>request()->route('id')])}}" method="POST">
                        @csrf
                        <div class="block-content font-size-sm form-group">
                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                <input type="hidden" name="action" value="gambar">
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
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Ok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Pop Out Block Modal -->
    
@endsection

@section('script')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
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
   var konten = document.getElementById("isi_berita");
     CKEDITOR.replace(konten,{
     language:'en-gb',
     filebrowserBrowseUrl: '/browser/browse.php',
    filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
    filebrowserUploadUrl: '/uploader/upload.php',
    filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
   });
   var editor = CKEDITOR.replace( 'isi_berita' );
    CKFinder.setupCKEditor( editor );
   CKEDITOR.config.allowedContent = true;
   
</script>
@include('ckfinder::setup')
@endsection