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
                            <h2 class="pageheader-title">Input Data Barang Masuk</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Surat Jalan Barang Masuk</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Barang Masuk</li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        @if(session('sukses'))
                            <div class="alert alert-success" role="alert">
                              {{session('sukses')}}
                            </div>
                        @endif

                        @if(session('gagal'))
                            <div class="alert alert-danger" role="alert">
                              {{session('gagal')}}
                            </div>
                        @endif
                        <div class="card">
                            <h5 class="card-header">Ubah Data Barang</h5>
                            <div class="card-body">
                                <form method="POST" action="/{{$suratjalan_barangmasuk -> id}}/inputdatabarangmasuk_update">
                                    {{csrf_field()}}
                                    <div class="form-group">   
                                            <label for="inputText3" class="col-form-label">No. Surat Jalan</label>
                                            <input id="inputText3" readonly="" name="suratjalanbarangmasuk_id" type="text" class="form-control" value="{{$suratjalan_barangmasuk->id}}">
                                    </div>
                                    <div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Nama Supplier</label>
                                            <input id="inputText3" readonly="" type="text" class="form-control" value="{{$suratjalan_barangmasuk -> supplier}}">
                                    </div>
                                    <!-- <div class="form-group">
                                            <label hidden>Tanggal</label>
                                            <input type="date" hidden class="form-control date-inputmask" name="tanggal" id="datepicker" placeholder="" value="{{$suratjalan_barangmasuk -> tanggal}}">
                                    </div>
                                    <div class="form-group">
                                            <label for="inputText3" hidden class="col-form-label">Supplier</label>
                                            <input id="inputText3" hidden name="supplier" type="text" class="form-control" value="{{$suratjalan_barangmasuk -> supplier}}">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleFormControlTextarea1" hidden>Catatan</label>
                                            <textarea class="form-control" hidden name="catatan" id="exampleFormControlTextarea1" rows="3">{{$suratjalan_barangmasuk -> catatan}}</textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="input-select">Nama Barang</label>
                                        <select class="form-control" name="masterdatabarang_id" id="input-select">
                                            <option>-Pilih Data Barang-</option>
                                            @foreach($data_masterdatabarang as $masterdatabarang)
                                            <option value="{{$masterdatabarang -> id}}">{{$masterdatabarang -> nama_barang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Jumlah</label>
                                        <input id="inputText3" type="text" name="jumlah" placeholder="" value="{{$suratjalan_barangmasuk -> jumlah}}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">OK</button>
                                </form>
                            </div>
                        </div><!-- 

                        <div class="card">
                            <h3 class="card-header">Tahap memasukkan data barang masuk</h3>
                            <div class="card-body">
                                <p>Masukkan data barang masuk terlebih dahulu hingga selesai, kemudian memasukkan data tanggal, no. surat jalan, supplier, dan catatan. Lalu simpan data. </p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
                        <!-- <div class="section-block" id="select">
                            <h3 class="section-title">Select</h3>
                            <p>Use custom button styles for actions in forms, dialogs, and more with support for multiplestates, and more.</p>
                        </div> -->
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end select options  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- checkboxes and radio -->
                <!-- ============================================================== -->
                </div>
            </div>
        </div>

@endsection