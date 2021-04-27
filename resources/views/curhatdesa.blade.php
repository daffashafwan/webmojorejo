@extends('layouts.home.homelayout')

@section('content')
<style>

.contact-form{
    background: #fff;
    margin-top: 0%;
    margin-bottom: 0%;
    width: 90%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Media Aspirasi Warga Desa Mojorejo</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Curhat Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

      <div class="container contact-form">
<div class="col-xs-12 icon-box">

            <form method="post" action="{{ route('curhatdesa.store') }}">
            @csrf
                <h3>Tulis Kritik dan Saran Untuk Desa Mojorejo</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Nama Anda *" value="" />
                                <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('alamat') ? 'error' : '' }}" name="alamat" id="alamat" placeholder="Alamat Anda *" value="" />
                            @if ($errors->has('alamat'))
        <div class="error">
            {{ $errors->first('alamat') }}
        </div>
        @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="WhatsApp Anda *" value="" />
                            @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Kirim" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" placeholder="Tulis Kritik dan Saran *" style="width: 100%; height: 150px;"></textarea>
                            @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
                        </div>
                    </div>
                </div>
            </form>
            <div class="loading"></div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
</div>
</div>


  </main><!-- End #main -->
@endsection