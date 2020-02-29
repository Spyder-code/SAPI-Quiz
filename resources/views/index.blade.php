@extends('layouts/home')
@section('title','Home')
@section('bg', asset('assets/images/background/home.png'))
@section('container')
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col" style="padding-top:200px">
                <div class="row">
                    <div class="col text-center" style="color:white">
                        <a href="{{url('hewan')}}" class="btn btn-danger mt-3 mr-5" style=" height:50px; width:160px; font-size:20pt">Hewan</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="color:white">
                        <a href="{{url('buah')}}" class="btn btn-warning  mt-3 mr-5" style=" height:50px; width:160px; font-size:20pt">Buah</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="color:white">
                        <a href="{{url('kendaraan')}}" class="btn btn-secondary  mt-3 mr-5" style=" height:50px; width:160px; font-size:20pt">Kendaraan</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="color:white">
                        <a href="{{url('profesi')}}" class="btn btn-primary  mt-3 mr-5" style=" height:50px; width:160px; font-size:20pt">Profesi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




