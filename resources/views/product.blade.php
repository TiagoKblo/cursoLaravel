@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if($id != null && $id != '')
<p>Exibindo produto de código "id": {{$id}}</p>

@endif

@endsection
