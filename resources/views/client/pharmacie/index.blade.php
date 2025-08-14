@extends('client.layout.app', ['title'=> "Pharmacies de garde"])

@section('content')
    <h1>Liste des Pharmacies de Garde</h1>

    <ul>
        @foreach ($pharmacies as $pharmacy)
            <li>{{ $pharmacy->name }} - {{ $pharmacy->address }}</li>
        @endforeach
    </ul>
@endsection
