@extends('layouts.app')

@section('title', 'Index')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca</th>
      <th scope="col">Modello</th>
      <th scope="col">Colore</th>
      <th scope="col">Taglia</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($shoes as $shoe)
    <tr>
      <th scope="row">{{ $shoe->id}}</th>
      <td>{{ $shoe->marca}}</td>
      <td>{{ $shoe->modello}}</td>
      <td>{{ $shoe->colore}}</td>
      <td>{{ $shoe->taglia}}</td>
      <td>{{ $shoe->prezzo}}</td>
      <td> 
        <a href="{{route('shoes.show', $shoe)}}">
          <i class="bi bi-eye-fill"></i>
        </a>

        <a href="{{ route('shoes.edit', $shoe) }}">
          <i class="bi bi-pencil-fill text-primary ms-2"></i>
        </a>
      </td>
    </tr>
    
    @empty
    @endforelse
  </tbody>
</table>

{{ $shoes->links() }}
@endsection