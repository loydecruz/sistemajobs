@extends('layouts.home')
@section('title', 'ServJobs')
@section('description', 'Descricao ServJobs')
@section('keywords', 'palabras, chaves, serv, jobs')

@section('content')
<h1>Tutorial Laravel 5</h1>
{{$msg}}

@foreach ($array as $index => $val)
    <p>{{$index}} = {{$val}}</p>
@endforeach
@stop
