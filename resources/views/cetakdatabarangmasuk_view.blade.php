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
                            <h2 class="pageheader-title">Cetak Data Barang Masuk</h2>
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
                            <h5 class="card-header">Cari Data Barang Masuk berdasarkan Tanggal</h5>
                            <div class="card-body">
                                    <form action="/cari_laporanbarangmasuk" method="POST" class="form-inline">
                                        {{csrf_field()}}
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label class="sr-only">Dari Tanggal</label>
                                            <input type="date" name="dari" class="form-control date-inputmask" id="datepicker" placeholder="Dari Tanggal">
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label class="sr-only">Sampai Tanggal</label>
                                            <input type="date" name="sampai" class="form-control date-inputmask" id="datepicker" placeholder="Sampai Tanggal">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary mb-2 btn-sm">Cari</button>
                                    </form>

                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered first" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Supplier</th>
                                                <th>Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($suratjalanbarangmasuk as $row)
                                            <tr>
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> tanggal}}</td>
                                                <td>{{$row -> supplier}}</td>

                                                <td>{{$row -> catatan}}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Supplier</th>
                                                <th>Catatan</th>
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