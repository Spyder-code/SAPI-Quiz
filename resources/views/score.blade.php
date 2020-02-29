@extends('layouts/index')
@section('title','Hewan')
@section('container')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="margin-top:80px">
                    <div class="card-header" style="font-size:70pt">
                        Your Score
                    </div>
                    <div class="card-body">
                        <h1 class="btn btn-success" style="width:100%; font-size:100pt">{{$jumlah}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var delay = 5000;
    setTimeout(function(){ window.location='http://127.0.0.1:8000';},delay);
</script>
