@extends('layout')
<a class="link" href="{{route('account.index')}}">TO LIST</a>
<a class="link" style="margin-left: 30px; " href="{{route('account.create')}}">CREATE</a>
@section('content')
<form class="centre" style="display: block; " action="{{route('account.update', $account)}}" method="POST" style="display: block;">
IBAN: <input class="imput" type="text" name="iban" value="{{$account->iban}}" readOnly/>
NAME: <input class="imput" type="text" name="name" value="{{$account->name}}" readOnly/>
SURNAME: <input class="imput" type="text" name="surname" value="{{$account->surname}} "readOnly/>
PERSON ID: <input class="imput" type="text" name="personId" value="{{$account->personId}}"readOnly/>
AMOUNT IN $$$: <input class="imput" type="text" name="sum" value="{{$account->sum}}"readOnly/>
AMOUNT TO ADD: <input class="imput" type="text" name="sumAdd" />
AMOUNT TO REMOVE: <input class="imput" type="text" name="sumRem" />
@csrf
@method('put')
<button class="btn create" type="submit">EDIT</button>
</form>
@endsection

