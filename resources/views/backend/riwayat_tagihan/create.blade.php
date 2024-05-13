@extends('backend/layouts.template')

@section('content')
<main id="main" class="main">

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_document_alt"></i> RiwayatTagihan</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ url('dashboard')}}">Home</a></li>
                        <li><i class="icon_document_alt"></i>RiwayatTagihan</li>
                        <li><i class="fa fa-files-o"></i>RiwayatTagihan</li>
                    </ol>
                </div>
            </div>
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            {{ isset($admin_lecturer)?'Mengubah':'Menambahkan'}} RiwayatTagihan
                        </header>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="riwayat_tagihan_form" method="POST"
                                      action="{{ isset ($riwayat_tagihan) ? route('riwayat_tagihan.update',$riwayat_tagihan->id):route('riwayat_tagihan.store')}}">
                                    {!! csrf_field() !!}
                                    {!! isset($riwayat_tagihan) ? method_field('PUT'):''!!}
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Nama <span
                                                class="required"></span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="nama" name="nama" minlength="5" type="text" value="{{isset($riwayat_tagihan)?$riwayat_tagihan->nama : ''}}"
                                                   required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2">Jabatan </label>
                                        <div class="col-lg-10">
                                            <input id="nomer_telepon" type="text" name="nomer_telepon" class="form-control" value="{{ isset($riwayat_tagihan) ? $riwayat_tagihan->nomer_telepon:''}}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2">Umur </label>
                                        <div class="col-lg-10">
                                            <input id="alamat" type="text" name="alamat" class="form-control" value="{{ isset($riwayat_tagihan) ? $riwayat_tagihan->alamat:''}}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2">Alamat </label>
                                        <div class="col-lg-10">
                                            <input id="jumlah_tagihan" type="text" name="jumlah_tagihan" class="form-control" value="{{ isset($riwayat_tagihan) ? $riwayat_tagihan->jumlah_tagihan:''}}"
                                                   required>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{route('riwayat_tagihan.index')}}"
                                               class="btn btn-default">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection

