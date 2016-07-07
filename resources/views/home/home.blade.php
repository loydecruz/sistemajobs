@extends('layouts.home')

@section('content')

@if (Session::has('status'))
<div class='text-success'>
    {{Session::get('status')}}
</div>
@endif

@stop
