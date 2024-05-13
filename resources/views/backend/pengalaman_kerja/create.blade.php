@extends('backend.layouts.template')

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
<div class="mt-5">
    <form action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja.update', $pengalaman_kerja->id) : route('pengalaman_kerja.store') }}" method="POST">
        {!! csrf_field() !!}
        {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
        
        @if(isset($pengalaman_kerja))
            <input type="hidden" name="id" value="{{ $pengalaman_kerja->id }}"> <br/>
        @endif

        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : '' }}" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : '' }}" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="text" class="form-control" name="tahun_masuk" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : '' }}" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Tahun Keluar</label>
            <input type="text" class="form-control" name="tahun_keluar" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : '' }}" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection