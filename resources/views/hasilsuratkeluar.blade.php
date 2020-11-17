@extends('layouts.appp')



@section('content')

            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Cetak Data Barang Keluar</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            
                            <h5 class="card-header">Hasil Pencarian Data Surat Keluar</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Nama Penerima</th>
                                                <th>Alamat</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($hasil as $row)
                                            @foreach($row->masterbarang as $h)
                                            <tr>
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> tanggal}}</td>
                                                <td>{{$row -> nama_penerima}}</td>
                                                <td>{{$row -> alamat}}</td>
                                                
                                                    <td>{{$h -> nama_barang}}</td>
                                                    <td>{{$h -> pivot -> jumlah}}</td>
                                                
                                            </tr>
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Nama Penerima</th>
                                                <th>Alamat</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- switch component -->
                <!-- ============================================================== -->
                
            </div>
        </div>
    </div>

@endsection