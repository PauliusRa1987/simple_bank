@extends('layout')
<a class="link" href="{{route('account.index')}}">TO LIST</a>
@section('content')
<div class="centre">
<form action="{{route('account.store')}}" method="POST" style="display: block;">

NAME: <input class="imput"  type="text" name="name" />
SURNAME: <input class="imput"  type="text" name="surname" />
PERSON ID: <input class="imput"  type="text" name="personId" />
@csrf
<button class="btn create" type="submit">CREATE</button>
</form>
</div>
@endsection

