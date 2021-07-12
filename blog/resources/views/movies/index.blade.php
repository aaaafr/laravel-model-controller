@extends('layout.app') 

@section('title', 'Movies')

@section('content')
<div class="container">
<div class="title">
<h1>Movies</h1>
</div>
<section class="movie">
@foreach($movies as $index => $movie)
<div class="card">
<div class="card_img">
<img src="{{$movie->poster}}" alt="">
</div>
<div class="card_title">
<p>{{$movie->title}}</p>
</div>
</div>
@endforeach
</section>
</div>

@endsection