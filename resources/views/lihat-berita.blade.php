@extends('layouts.home.homelayout')

@section('content')
    <div class="block">
        <div class="block-header font-size-h4">
            <a href="{{url()->previous()}}" class="text-white btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>
        <div class="block-content block-content-full">
            <div class="block-content block-content-full text-center bg-image" style="max-height: 50%; background-image: url({{url('userfiles/images/'.$berita->gambar)}});">
                <div class="content content-full overflow-hidden">
                    <div class="my-8 text-center">
                        <div style="background-color:rgba(0, 0, 0, 0.5)">
                            <h1 class="text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{$berita->judul_berita}}  aaaa</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white">{!! $berita->isi_berita !!}
            </div>
        </div>
    </div>
    
@endsection