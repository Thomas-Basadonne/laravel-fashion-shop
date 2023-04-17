@extends('layouts.app')

@section('title')
  <h1 class="fs-2 text-center py-2 mb-3 fw-bold">Dettaglio Scarpa</h1>
@endsection

@section('content')
<div class="card">
  <img src="{{ $shoe->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title fw-bold text-primary">Informazioni della scarpa N. {{$shoe->id}}</h3>
    <ul>
      <li>
        <p class="card-text"><span class="fw-bold text-primary"> Marca: </span>{{$shoe->marca}}</p>
      </li>
      <li>
        <p class="card-text"><span class="fw-bold text-primary"> Modello: </span>{{$shoe->modello}}</p>
      </li>
      <li>
        <p class="card-text"><span class="fw-bold text-primary"> Colore: </span>{{$shoe->colore}}</p>
      </li>
      <li>
        <p class="card-text"><span class="fw-bold text-primary"> Taglia: </span>{{$shoe->taglia}}</p>
      </li>
      <li>
        <p class="card-text"><span class="fw-bold text-primary"> Prezzo: </span>{{$shoe->prezzo}}€</p>
      </li>
    </ul>
  </div>
</div>

<a href="{{ route('shoes.index') }}" class="btn btn-outline-primary  my-5 mx-3">
  Torna alla lista
</a>
@endsection
