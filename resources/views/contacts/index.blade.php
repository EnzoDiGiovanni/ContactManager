@extends('layout')
@section('title', 'Contact Manager')

@section('content')


        <h1>Liste des Contacts</h1>

   

        <a href="{{route('contacts.create')}}">Ajouter un contact</a>

        <!-- Tableau des contacts -->
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Entreprise</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->first_name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->entreprise}}</td>
                    <td>
                      <form action="{{route('contacts.destroy', $contact)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>❌</button>
                      </form>
                    </td>
                    <td>
                      <a href="{{route('contacts.edit', $contact)}}">✍🏼</a>
                    </td>
                    

                    
                </tr>
                @endforeach

            </tbody>
        </table>




