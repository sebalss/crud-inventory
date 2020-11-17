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
                            <h2 class="pageheader-title">Ubah Surat Jalan Barang Masuk</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/barangmasuk" class="breadcrumb-link">Surat Jalan Barang Masuk</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ubah Data Surat Jalan Barang Masuk</li>
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

                                <form action="/{{$suratjalan_barangmasuk -> id}}/suratjalanbarangmasuk_update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputText3">No. Surat Jalan</label>
                                        <input id="inputText3" readonly type="text" name="id" placeholder="" class="form-control" value="{{$suratjalan_barangmasuk -> id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Tanggal</label>
                                        <input id="inputText3" type="date" name="tanggal" placeholder="" class="form-control" value="{{$suratjalan_barangmasuk -> tanggal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Supplier</label>
                                        <input id="inputText3" type="text" name="supplier" placeholder="" class="form-control" value="{{$suratjalan_barangmasuk -> supplier}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Catatan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="catatan" rows="3" >{{$suratjalan_barangmasuk -> catatan}}</textarea>
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