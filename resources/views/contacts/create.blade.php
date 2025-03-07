@extends('layout')
@section('title', 'Créer un nouveau contact ') 

@section('content')
  
<form action="{{ route('contacts.store') }}" method="POST">
  @include('contacts.form-fields', ['contact'=>new App\Models\Contact()])
</form>



<a href="{{ route('contacts.index') }}">Retour à l'accueil</a>
