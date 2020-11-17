@extends('layouts.apppp')



@section('content')

            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Welcome to Dashboard {{ Auth::user()->name }} </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
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
                        <h2 class="text-center">Pilihan Aktivitas Laporan Data Barang</h2>
                    </div>
                    
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- .card -->
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid" src="../assets/images/laporanmasuk.jpg" alt="Card image cap">
                                            <div class="figure-action">
                                                <a href="/ownerlaporanbarangmasuk" class="btn btn-block btn-sm btn-primary">Cetak Laporan Barang Masuk</a>
                                            </div>
                                        </div>
                                        <!-- /.figure-img -->
                                        <!-- .figure-caption -->
                                        <figcaption class="figure-caption">
                                            <!-- <p class="text-muted mb-0"> Give some text description </p> -->
                                        </figcaption>
                                        <!-- /.figure-caption -->
                                    </figure>
                                    <!-- /.card-figure -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- .card -->
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid" src="../assets/images/laporankeluar.jpg" alt="Card image cap">
                                            <div class="figure-action">
                                                <a href="/ownerlaporanbarangkeluar" class="btn btn-block btn-sm btn-primary">Cetak Laporan Barang Keluar</a>
                                            </div>
                                        </div>
                                        <!-- /.figure-img -->
                                        <!-- .figure-caption -->
                                        <figcaption class="figure-caption">
                                            <!-- <p class="text-muted mb-0"> Give some text description </p> -->
                                        </figcaption>
                                        <!-- /.figure-caption -->
                                    </figure>
                                    <!-- /.card-figure -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- .card -->
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid" src="../assets/images/laporanbarang.jpg" alt="Card image cap">
                                            <div class="figure-action">
                                                <a href="/ownerlaporanstokbarang" class="btn btn-block btn-sm btn-primary">Cetak Laporan Stok Barang</a>
                                            </div>
                                        </div>
                                        <!-- /.figure-img -->
                                        <!-- .figure-caption -->
                                        <figcaption class="figure-caption">
                                            <!-- <p class="text-muted mb-0"> Give some text description </p> -->
                                        </figcaption>
                                        <!-- /.figure-caption -->
                                    </figure>
                                    <!-- /.card-figure -->
                                </div>
                                <!-- /.card -->
                            </div>
                    </div>
                </div>
            </div>

@endsection