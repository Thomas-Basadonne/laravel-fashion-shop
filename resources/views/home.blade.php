@extends('layouts.app')

@section('title')
    
@section('content')
  
 @forelse($shoes as $shoe)
    <div class="card-box">
      <div class="card" style="width: 18rem;">
        <figure>
          <img src="{{ $shoe->image }}" alt="" class="img-fluid">
          <figcaption>Dettagli :</figcaption>
        </figure>
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
  @empty
  @endforelse
@endsection


