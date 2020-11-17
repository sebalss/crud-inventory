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
                                        <li class="breadcrumb-item"><a href="/barangkeluar" class="breadcrumb-link">Surat Jalan Barang Keluar</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Barang Keluar</li>
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
                        <!-- <div class="section-block" id="select">
                            <h3 class="section-title">Select</h3>
                            <p>Use custom button styles for actions in forms, dialogs, and more with support for multiplestates, and more.</p>
                        </div> -->
                        <div class="card">
                            <div class="card border-top">
                                @foreach($suratjalanbarangkeluar as $row)
                                <h5 class="card-header">Chart Data Barang Keluar | <a href="/cetaksuratkeluar/pdfexport/{{$row->id}}" type="button" class="btn btn-success btn-sm">Print Surat Jalan</a> | <a style="width:80px" href="/barangkeluar" type="button" class="btn btn-primary btn-sm">Kembali</a></h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" name="data_barang" class="table table-striped table-bordered first" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($row->masterbarang as $h)
                                                <tr>    
                                                    
                                                    <td>{{ $h->id }}</td>
                                                    <td>{{ $h->nama_barang }}</td>
                                                    <td>{{ $h-> pivot -> jumlah }}</td>
                                                </tr>
                                                @endforeach
                                                @endforeach
                                            </tbody>
                                            
                                            <tfoot>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script>
    @foreach($suratjalanbarangkeluar as $item)
        @foreach($item->masterbarang as $h)
            function abcd{{$item -> id}}{{$h -> id}}()
                {
                    document.getElementById("abc{{$item->id}}{{$h -> id}}").submit();
                }
        @endforeach
    @endforeach
</script>
@endsection