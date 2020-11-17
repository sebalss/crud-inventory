<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikasi Pengelolaan Data Barang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('../assets/vendor/fonts/circular-std/style.css')}}">
    <link rel="stylesheet" href="{{url('../assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{url('../assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" />
    <link rel="stylesheet" href="{{url('../assets/vendor/datepicker/tempusdominus-bootstrap-4.css')}}" />
    <link rel="stylesheet" href="{{url('../assets/vendor/inputmask/css/inputmask.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('../assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('../assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('../assets/vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('../assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('layouts.header')

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->

        
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->




        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard">
            
            @yield('content')

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{url('../assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('../assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{url('../assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{url('../assets/libs/js/main-js.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script> -->
    <script type="text/javascript">
        $('#datepicker').datepicker();
    </script>


    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{url('../assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{url('../assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('../assets/vendor/datatables/js/data-table.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

<!--     <script type="text/javascript">
     $(function(){
      $(".datepicker").datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true,
          todayHighlight: true,
      });
     });
    </script> -->

    <script>
         function inputdata(){
       var n=document.forms['databarang']['nama_barang'].value;
       var e=document.forms['databarang']['jumlah_barang'].value;       
                                               
       var tabel = document.getElementById("data_barang");
       var baris = tabel.insertRow(1);
       var kol1 = baris.insertCell(0);
       var kol2 = baris.insertCell(1);
               
       kol1.innerHTML = n;
       kol2.innerHTML = e;
      }
      </script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>    
</body>
 
</html>