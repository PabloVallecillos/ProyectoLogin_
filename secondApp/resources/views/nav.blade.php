@extends('basenav')
@section('contenidonav')

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ejercicio login</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login/form') }}"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
    </ul>

@stop