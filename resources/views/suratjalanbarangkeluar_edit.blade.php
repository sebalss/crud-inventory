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
                            <h2 class="pageheader-title">Ubah Surat Jalan Barang Keluar</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/barangkeluar" class="breadcrumb-link">Surat Jalan Barang Keluar</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ubah Data Surat Jalan Barang Keluar</li>
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

                                <form action="/{{$suratjalan_barangkeluar -> id}}/suratjalanbarangkeluar_update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputText3">No. Surat Jalan</label>
                                        <input id="inputText3" readonly type="text" name="id" placeholder="" class="form-control" value="{{$suratjalan_barangkeluar -> id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Tanggal</label>
                                        <input id="inputText3" type="date" name="tanggal" placeholder="" class="form-control" value="{{$suratjalan_barangkeluar -> tanggal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Nama Penerima</label>
                                        <input id="inputText3" type="text" name="nama_penerima" placeholder="" class="form-control" value="{{$suratjalan_barangkeluar -> nama_penerima}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3" >{{$suratjalan_barangkeluar -> alamat}}</textarea>
                                      </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                                </form>

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