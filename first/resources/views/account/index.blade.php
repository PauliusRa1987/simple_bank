@extends('layout')


<a class="link" href="{{route('account.create')}}">CREATE</a>
@section('content')
<ul>
@foreach($accounts as $account)
<li class="li" >
<span>IBAN: {{$account->iban}} </span>
<span>NAME: {{$account->name}} </span>
<span>SURNAME: {{$account->surname}} </span>
<span>ID: {{$account->personId}} </span>
<span>AMOUNT IN $: {{$account->sum}} </span>
<a class="btn"  href="{{route('account.edit', $account)}}">EDIT</a>
<form  style="margin-bottom: 0;" method="POST" action="{{route('account.destroy', $account)}}">
   @csrf
   @method('delete')
   <button class="btn"  type="submit">DELETE</button>
  </form>

</li>
@endforeach
</ul>
@endsection
