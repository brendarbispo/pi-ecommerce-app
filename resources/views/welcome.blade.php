@extends('layouts.main')


@section('container')
    <h1>Titulo da pagina</h1>

    @foreach ($nome as $nomes)
        <p> {{ $nomes }}</p>
    @endforeach

    @for ($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }}</p>
    @endfor
@endsection
