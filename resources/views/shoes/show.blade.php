@extends('layouts.app')

@section('title', 'shoe')

@section('content')
<div class="card">
  <img src="{{ $shoe->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$shoe->marca}}</h5>
    <p class="card-text">{{$shoe->modello}}.</p>
   
  </div>
</div>
@endsection
