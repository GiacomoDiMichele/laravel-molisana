@extends('layouts.app')

@section('content')
    <div class="">
        <h1>lista prodotti</h1>
        @foreach ($lista_prodotti as $tipo_pasta)
            <p>{{ $tipo_pasta }}</p>
        @endforeach
    </div>
@endsection
