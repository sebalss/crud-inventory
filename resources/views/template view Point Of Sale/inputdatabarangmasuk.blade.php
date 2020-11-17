<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="card">
                                @forelse($suratjalan_barangmasuk as $row)
                                <h5 class="card-header">Chart Data Barang Masuk</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" name="data_barang" class="table table-striped table-bordered first" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($row->masterbarang as $h)
                                                <tr>    
                                                    
                                                    <td>{{ $h->id }}</td>
                                                    <td>{{ $h->nama_barang }}</td>
                                                    <td>{{ $h-> pivot -> jumlah }}</td>
                                                        
                                                    <td><a style="width:80px" href="/{{$row -> id}}/{{$h -> id }}/inputdatabarangmasuk_hapus" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data tersebut?')">Hapus</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data</td>
                                        </tr>
                                                
                                                @endforelse
                                            </tbody>
                                            
                                            <tfoot>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>