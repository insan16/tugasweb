@extends('backend/layouts.template')

@section('content')

<section id="main">
    <!-- Form Validation-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Pengalaman Kerja
                </header>
                <div class="panel-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <a href="{{ route('pengalaman_kerja.create') }}"><button class="btn btn-primary" type="button"><i
                                class="fa fa-plus">Tambah</i></button></a>
                </div>
                <br><br>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th><i class="icon_bag"></i> Nama</th>
                                        <th><i class="icon_document"></i> Jabatan</th>
                                        <th><i class="icon calendar"></i> Tahun Masuk</th>
                                        <th><i class="icon_calendar"></i> Tahun Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengalaman_kerja as $item)
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->jabatan}}</td>
                                        <td>{{$item->tahun_masuk}}</td>
                                        <td>{{$item->tahun_keluar}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
</section>
</section>
@endsection