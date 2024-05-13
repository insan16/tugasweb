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
                <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
                <h4>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                        <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                        <li><i class="fa fa-files-o"></i>Pendidikan</li>
                    </ol>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pendidikan
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}">
                            <button class="btn btn-primary">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </a>
                        <br><br>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon_bag"></i> Nama</th>
                                    <th><i class="icon_bag"></i> Tingkatan</th>
                                    <th><i class="icon_bag"></i> Tahun Masuk</th>
                                    <th><i class="icon_bag"></i> Tahun Selesai</th>
                                    <th><i class="icon_bag"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pendidikan as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        @if ($item->tingkatan==1)
                                            Tk
                                        @elseif ($item->tingkatan==2)
                                            SD
                                        @elseif ($item->tingkatan==3)
                                            SMP
                                        @elseif ($item->tingkatan==4)
                                            SMA/SMK
                                        @elseif ($item->tingkatan==5)
                                            D3
                                        @elseif ($item->tingkatan==6)
                                            D4/S1
                                        @elseif ($item->tingkatan==7)
                                            S2
                                        @elseif ($item->tingkatan==8)
                                            S3
                                        @endif
                                    </td>
                                    <td>{{ $item->tahun_masuk }}</td>
                                    <td>{{ $item->tahun_keluar }}</td>
                                    <td>
                                    <div class="btn-group">
                                        <form action="{{ route('pendidikan.destroy',$item->id) }}" method="POST">
                                            <a class="btn btn-warning" href="{{ route('pendidikan.edit',$item->id)}}">
                                                <i class="fa fa-edit"></i>Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash-o">Hapus</i>
                                            </button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
