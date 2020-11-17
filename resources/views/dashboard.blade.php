@extends('layouts.appp')



@section('content')

            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Welcome to Dashboard {{ Auth::user()->name }}</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li> -->
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                        <h3 class="text-center">Pilihan Aktivitas Pengelolaan Data Barang</h3>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Data Barang Masuk</h5></center>
                                        <a href="/barangmasuk"><img class="card-img-top img-fluid p-2" src="../assets/images/barangmasuk.jpg" alt="Card image cap"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Data Barang Keluar</h5></center>
                                        <a href="/barangkeluar"><img class="card-img-top img-fluid p-2" src="../assets/images/barangkeluar.jpg" alt="Card image cap"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Master Data Barang</h5></center>
                                        <a href="/masterdatabarang_view"><img class="card-img-top img-fluid p-2" src="../assets/images/masterbarang.jpg" alt="Card image cap" data-toggle="modal" data-target="#myModal"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                        </div>
                        
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="text-muted">Cetak Laporan Data Barang</h5></center>
                                        <a href="/cetaklaporan"><img class="card-img-top img-fluid p-2" src="../assets/images/laporan.jpg" alt="Card image cap" data-toggle="modal" data-target="#myModal"></a>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                        </div>
                        
                    </div>
                </div>
            </div>

@endsection