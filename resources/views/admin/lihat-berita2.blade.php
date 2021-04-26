@extends('layouts.home.homelayout')

@section('content')

	
	<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$berita->judul_berita}}</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>{{$berita->judul_berita}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <img style="object-position: center;" src="/userfiles/images/{{$berita->gambar}}" class="card-img-top mb-5">
          {!! $berita->isi_berita !!}
        
      </div>
    </section>

  </main><!-- End #main -->
@endsection