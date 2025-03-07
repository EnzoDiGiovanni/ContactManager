@extends('layout')
@section('title', 'Modifier un contact')

@section('content')

  @if (session('status'))
    <div class="alert alert-succes">
      {{session('status')}}
    </div>
  @endif
  
<form action="{{ route('contacts.update', $contact) }}" method="POST">
  @method('PUT')
  @include('contacts.form-fields')
</form>



<a href="{{ route('contacts.index') }}">Voir la liste des contacts</a>
@endsection


