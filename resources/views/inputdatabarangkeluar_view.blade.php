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
                            <h2 class="pageheader-title">Input Data Barang Keluar</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li> -->
                                        <li class="breadcrumb-item active" aria-current="page">Surat Jalan Barang Keluar</li>
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

                        @if(session('gagal'))
                            <div class="alert alert-danger" role="alert">
                              {{session('gagal')}}
                            </div>
                        @endif


                        <div class="card">
                            <h5 class="card-header">Surat Jalan Barang Keluar | 
                            <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#myModal">Tambah Surat Jalan Barang Keluar</button>

                            <!-- <a href="/tambahbarangmasuk"><button type="button" class="btn btn-primary btn-sm">Tambah Surat Jalan</button></a> -->

                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered first" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Nama Penerima</th>
                                                <th>Alamat</th>
                                                <th style="width:32%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($suratjalanbarangkeluar as $row)
                                            <tr>
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> tanggal}}</td>
                                                <td>{{$row -> nama_penerima}}</td>
                                                <td>{{$row -> alamat}}</td>
                                                <td><a style="width:200px" href="/{{$row -> id}}/inputdatabarangkeluar" type="button" class="btn btn-primary btn-xs">Tambah Data Barang</a>
                                                    <a style="width:80px" href="/{{$row -> id}}/suratjalanbarangkeluar_edit" type="button" class="btn btn-dark btn-xs">Ubah</a>
                                                    <a  style="width:200px"href="/{{$row -> id}}/inputdatabarangkeluar_detail" type="button" class="btn btn-secondary btn-xs">Detail Data Barang</a>
                                                    
                                                    <a style="width:80px" href="{{$row -> id}}/suratjalanbarangkeluar_hapus" type="button" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data tersebut?')">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No. Surat Jalan</th>
                                                <th>Tanggal</th>
                                                <th>Nama Penerima</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
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
                    <!-- Modal -->
                    <!-- ============================================================== -->

                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                        
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Tambah Surat Jalan Barang Masuk</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        
                              <!-- Modal body -->
                              <div class="modal-body">
                                <form action="/barangkeluar" method="POST">
                                    {{csrf_field()}}
                                   <!--  <div class="form-group">
                                        <label for="inputText3">No. Surat Jalan</label>
                                        <input id="inputText3" type="text" name="id" placeholder="" class="form-control">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="inputText3">Tanggal</label>
                                        <input id="inputText3" type="date" name="tanggal" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3">Nama Penerima</label>
                                        <input id="inputText3" type="text" name="nama_penerima" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
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
            
        </div>
    </div>
</script>
@endsection