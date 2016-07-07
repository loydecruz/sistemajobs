@extends('layouts.home')

@section('content')
 <h1>Login</h1>

 <div class="container text-danger">
  @if (Session::has('message'))
   {{Session::get('message')}}
  @endif
 </div>
 <hr />
 <form method="post" action="{{url('auth/login')}}">
  {{csrf_field()}}
  <div class="form-group">
   <label for="email">Email:</label>
   <input type="email" name="email" class="form-control" value="{{Input::old('email')}}" />
   <div class="text-danger">{{$errors->first('email')}}</div>
  </div>
  <div class="form-group">
   <label for="password">Password:</label>
   <input type="password" name="password" class="form-control" />
   <div class="text-danger">{{$errors->first('password')}}</div>
  </div>
  <div class="form-group">
   <label for="remember">Continuar Conectado:</label>
   <input type="checkbox" name="remember" />
  </div>
  <button type="submit" class="btn btn-primary">Fazer Login</button>
 </form> <br> <br>

 <a href="{{url('auth/register')}}">Criar uma conta</a> <br>

 <!-- <a href='{{url("password/email")}}'>Alterar Senha</a> -->
@stop
