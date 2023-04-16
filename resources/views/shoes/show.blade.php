@extends('layouts.app')

@section('title', $shoe->marca)

@section('content')
<div class="d-flex justify-content-end my-4 mx-3">
  <a href="{{ route('shoes.index')}}" class="btn btn-primary text-end">Torna alla lista</a>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ $shoe->image}}" class="card-img-top" alt="...">
  <div class="card-body">

    <h5 class="card-title">{{$shoe->marca}}</h5>
    <p class="card-text">{{$shoe->modello}}</p>
    <p class="card-text">{{$shoe->prezzo}}€</p>
   
  </div>
</div>
@endsection
