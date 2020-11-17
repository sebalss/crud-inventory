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
                            <h2 class="pageheader-title">Ubah Master Data Barang</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data Barang</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Master Data Barang</li>
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

                                <form action="/{{$masterdatabarang->id}}/masterdatabarang_update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputText3">ID Barang</label>
                                        <input id="inputText3" readonly type="text" name="id" placeholder="" class="form-control" value="{{$masterdatabarang->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Nama Barang</label>
                                        <input id="inputText3" type="text" name="nama_barang" placeholder="" class="form-control" value="{{$masterdatabarang->nama_barang}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Stok</label>
                                        <input id="inputText3" type="text" name="stok" placeholder="" class="form-control" value="{{$masterdatabarang->stok}}">
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