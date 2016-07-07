@extends('layouts.home')
@section('content')

@if (Session::has('status'))
<hr />
<div class='text-success'>
    {{Session::get('status')}}
</div>
<hr />
@endif

<img src='{{url(Auth::user()->perfiles)}}' class='img-responsive' style='max-width: 150px' />

@stop
