@extends('layouts.home')
@section('content')
 <h1>Alterar senha</h1>
 @if (Session::has('status'))
  <div class="alert alert-success">
   {{ Session::get('status') }}
  </div>
 @endif
 @if (count($errors) > 0)
  <div class="alert alert-danger">
   Os dados estão incorretos.
  </div>
 @endif
 <hr />
 <form method="POST" action="{{url('password/email')}}">
  {{csrf_field()}}
  <div class="form-group">
   <label for="email">Email</label>
   <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
   <div class="text-danger">{{$errors->first('email')}}</div>
  </div>
  <button type="submit" class="btn btn-primary">Link para redefinir senha</button>
 </form>
@stop
