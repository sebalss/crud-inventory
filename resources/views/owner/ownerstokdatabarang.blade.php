@extends('layouts.apppp')



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
                            <h2 class="pageheader-title">Stok Data Barang</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li> -->
                                        <li class="breadcrumb-item active" aria-current="page">Laporan Stok Barang</li>
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
                        @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                          {{session('sukses')}}
                        </div>
                        @endif

                        <div class="card">
                            <h5 class="card-header">Stok Data Barang</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($laporan as $masterdatabarang)
                                            <tr>
                                                <td>{{$masterdatabarang -> id}}</td>
                                                <td>{{$masterdatabarang -> nama_barang}}</td>
                                                <td>{{$masterdatabarang -> stok}}</td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Stok</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <!-- ============================================================== -->
                    <!-- Modal -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Modal -->
                    <!-- ============================================================== -->
                    </div>

                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->
                
            </div>
        </div>
    </div>

@endsection