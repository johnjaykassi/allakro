@extends('client.layout.app', ['title'=> "Ajouter un pharmacie de garde"])

@section('main')
        <section class="container">
            <div class="d-flex justify-content-center">

                <div class="col-12 col-md-5 my-5">
                    <h3 class="mt-5 mb-4 text-center bg-secondary rounded py-3 text-white"><i class="bi bi-chevron-double-down"></i> Ajouter une Pharmacie de Garde</h3>
                    <form class="row g-3" method="post" action="{{ route("pharmacies.store") }}">
                        @csrf

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
