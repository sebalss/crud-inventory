@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px;">Sistem Informasi Pengelolaan Barang</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <img src="../assets/images/template.jpg" width="700px" height="600px">



                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
