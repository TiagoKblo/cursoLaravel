@extends('layouts.main')

@section('title', 'Kblo Eventos')

@section('content')

<h1>Algum titulo</h1>
<img src="/img/banner.jpg" alt="Banner">

@if (10 > 5)
    <p>A condição é verdadeira</p>

@endif
<h1>Meu nome é: {{$nome}} eu tenho {{$idade}}anos e moro em {{$cidade}} e trabalho como {{$profissao}}</h1>

@for ($i =0; $i < count($arr); $i++)
     <p>{{$arr[$i]}} -- {{$i}}</p>
     @if ($i == 2)
        <p>o "i" é 2</p>
     @endif
@endfor

@foreach ($nomes as $nome)
<p>{{$loop->index}}</p>
<p>{{$nome}}</p>
@endforeach

@php
    $name = "Golias";
    echo $name;
@endphp

{{-- Comentários do Blade é invisível --}}

@endsection
