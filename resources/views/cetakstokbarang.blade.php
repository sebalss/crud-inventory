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
                            <h2 class="pageheader-title">Master Data Barang</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li> -->
                                        <li class="breadcrumb-item active" aria-current="page">Master Data Barang</li>
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
                            <h5 class="card-header">Master Data Barang | <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#myModal">Tambah Master Data Barang</button></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Stok</th>
                                                <th style="width:16%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($laporanadmin as $masterdatabarang)
                                            <tr>
                                                <td>{{$masterdatabarang -> id}}</td>
                                                <td>{{$masterdatabarang -> nama_barang}}</td>
                                                <td>{{$masterdatabarang -> stok}}</td>
                                                <td><a href="/{{$masterdatabarang -> id}}/masterdatabarang_edit" type="button" class="btn btn-outline-primary btn-sm">Ubah</a>
                                                    <a href="/{{$masterdatabarang -> id}}/masterdatabarang_hapus" type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin menghapus data tersebut?')">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Stok</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <!-- ============================================================== -->
                    <!-- Modal -->
                    <!-- ============================================================== -->

                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                        
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Tambah Master Data Barang</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        
                              <!-- Modal body -->
                              <div class="modal-body">
                                <form action="/masterdatabarang_view" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputText3">ID Barang</label>
                                        <input id="inputText3" type="text" name="id" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Nama Barang</label>
                                        <input id="inputText3" type="text" name="nama_barang" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Stok</label>
                                        <input id="inputText3" type="text" name="stok" placeholder="" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">OK</button>
                                </form>
                              </div>
                        
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                        
                            </div>
                          </div>
                        </div>

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