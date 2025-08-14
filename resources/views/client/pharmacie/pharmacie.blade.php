@extends('client.layout.app', ['title'=> "Pharmacies de garde"])

@section('content')
    <div class="container">
        <h1>Ajouter une Pharmacie de Garde</h1>

        <form action="{{ route('pharmacies.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nom de la Pharmacie</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
