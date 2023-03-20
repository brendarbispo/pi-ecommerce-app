@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if ($id != null)
        <p> Produto id: {{ $id }}</p>
    @endif
