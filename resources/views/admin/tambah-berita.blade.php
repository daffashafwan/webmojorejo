@extends('layouts.admin.master')

@section('content')
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Tambah Berita</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="" class="form-row">
                <div class="form-group">
                    <textarea id="konten" class="form-control" name="konten"></textarea>
                    <div class="btn-group mr-2 mb-2 mt-2" role="group" aria-label="Icons Text group">
                        <a href="{{url()->previous()}}"class="btn btn-secondary">
                            <i class="fa fa-fw fa-arrow-alt-circle-left"></i>
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-fw fa-save"></i>
                        </button>
                        <button type="submit" class="btn btn-primary">
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
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection