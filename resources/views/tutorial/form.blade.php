<h1>POST</h1>
<form method="post" action="{{url('home/form')}}">
    <label>Nome: </label>
    <input type="text" name="name" value="{{$name}}" />
    {{csrf_field()}}
    <button type="submit">Enviar</button>
</form>

Nome: {{$name}}
