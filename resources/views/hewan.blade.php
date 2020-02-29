@extends('layouts/index')
@section('title','Hewan')
@section('bg', asset('assets/images/background/bg-hewan.jpg'))
@section('container')
    <div class="container-fluid text-center mt-5" style="color:red">
        <div class="row">
            <div class="col">
                <h1>Score : {{$jumlah}}</h1>
            </div>
            <div class="col">
                <h1>Time : <div id="countdown">7</div></h1>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row" style="margin-top:80px;">
            <div class="col">
                @if($soal==1)
                    <img src="{{asset('assets/images/hewan/singa.PNG')}}" style="width:270px; height:320px;">
                <form action="{{url('hewan') }}" method="post" id="search-form">
                @csrf
                    <input type="hidden" name="soal" value="1">
                    <input type="hidden" name="jumlah" value="{{$jumlah}}">
                    <input type="text" name="nama" id="speechToText" class="mt-2" autofocus autocomplete="off">
                </form>
                @elseif($soal==2)
                    <img src="{{asset('assets/images/hewan/gajah.png')}}" style="width:270px; height:320px;">
                <form action="{{url('hewan') }}" method="post" id="search-form">
                @csrf
                    <input type="hidden" name="soal" value="2">
                    <input type="hidden" name="jumlah" value="{{$jumlah}}">
                    <input type="text" name="nama" id="speechToText" class="mt-2" autofocus autocomplete="off">
                </form>
                @elseif($soal==3)
                    <img src="{{asset('assets/images/hewan/monyet.PNG')}}" style="width:270px; height:320px;">
                <form action="{{url('hewan') }}" method="post" id="search-form">
                @csrf
                    <input type="hidden" name="soal" value="3">
                    <input type="hidden" name="jumlah" value="{{$jumlah}}">
                    <input type="text" name="nama" id="speechToText" class="mt-2" autofocus autocomplete="off">
                </form>
                @elseif($soal==4)
                    <img src="{{asset('assets/images/hewan/kucing.PNG')}}" style="width:270px; height:320px;">
                <form action="{{url('hewan') }}" method="post" id="search-form">
                @csrf
                    <input type="hidden" name="soal" value="4">
                    <input type="hidden" name="jumlah" value="{{$jumlah}}">
                    <input type="text" name="nama" id="speechToText" class="mt-2" autofocus autocomplete="off">
                </form>
                @elseif($soal==5)
                    <img src="{{asset('assets/images/hewan/jerapa.PNG')}}" style="width:270px; height:320px;">
                <form action="{{url('hewan') }}" method="post" id="search-form">
                @csrf
                    <input type="hidden" name="soal" value="5">
                    <input type="hidden" name="jumlah" value="{{$jumlah}}">
                    <input type="text" name="nama" id="speechToText" class="mt-2" autofocus autocomplete="off">
                </form>
                @endif

            </div>
        </div>
    </div>
@endsection

