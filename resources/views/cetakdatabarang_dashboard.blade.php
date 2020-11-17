@extends('layouts.appp')



@section('content')

            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Cetak Laporan Data Barang</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Pilihan Aktivitas Cetak Laporan Data Barang</h3>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Cetak Laporan Data Barang Masuk</h5></center>
                                        <a href="/cetaklaporanbarangmasuk"><img class="card-img-top img-fluid p-2" src="../assets/images/laporanmasuk.jpg" alt="Card image cap"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Cetak Laporan Data Barang Keluar</h5></center>
                                        <a href="cetakdatabarangkeluar_view.html"><img class="card-img-top img-fluid p-2" src="../assets/images/laporankeluar.jpg" alt="Card image cap"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Cetak Laporan Stok Barang</h5></center>
                                        <a href="cetakdatastokbarang_view.html"><img class="card-img-top img-fluid p-2" src="../assets/images/laporanbarang.jpg" alt="Card image cap" data-toggle="modal" data-target="#myModal"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                        </div>
                        
                    </div>
                </div>
            </div>

@endsection