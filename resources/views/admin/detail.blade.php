@extends('layouts.app')
 
@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
 
    <div class="row">
            <div class="col-md-4">
                <img src="{{$data->img_url}}" alt="">
 
            </div>
            <div class="col-md-8">
                <span>
                   <h1>
                        <span>{{$data->judul}}</span>
                        <span>({{$data->tahun}})</span>
                    </h1>
                    <h6>
                          <span>Rating</span>
                        <span class="badge bg-secondary">{{$data->rating }}</span>
                    </h6>
               </span>
               <br>
               <br>
               <h3>Sinopsis:</h3>   
               <p>{{$data->sinopsis }}</p>   
 
            </div>
 
    </div>
</div>
 
@endsection