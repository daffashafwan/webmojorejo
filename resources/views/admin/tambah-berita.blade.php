@extends('layouts.admin.master')

@section('content')
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Tambah Berita</h3>
        </div>
        <div class="block-content block-content-full">
            <form enctype="multipart/form-data" action="{{route('admin.berita.tambah.store')}}" method="POST" class="form-row">
                @csrf
                <div class="form-group">

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
                    
                    <label class="col-form-label" for="judul_berita">Judul Berita</label>
                    <input type="text" class="form-control" name="judul_berita" id="judul_berita">
                    <label class="col-form-label" for="konten">Isi Berita</label>
                    <textarea id="isi_berita" class="form-control" name="isi_berita"></textarea>
                    <div class="btn-group mr-2 mb-2 mt-2" role="group" aria-label="Icons Text group">
                        <a href="{{url()->previous()}}"class="btn btn-secondary">
                            <i class="fa fa-fw fa-arrow-alt-circle-left"></i>
                        </a>
                        <button type="submit" name="action" value="simpan" class="btn btn-warning">
                            <i class="fa fa-fw fa-save"></i>
                        </button>
                        <button type="submit" name="action" value="publish" class="btn btn-primary">
                            <i class="fa fa-fw fa-check-circle"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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