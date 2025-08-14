@extends('client.layout.app', ['title'=> "Personnes décédées"])

@section('main')
<section class="container my-5 style-container">
    <h1 class="my-5 text-center"><i class="bi bi-caret-right-fill"></i> Liste des personnes décédées</h1>
<div class="row">
    <div class="col-9 block">
        <div class="mt-3">
            @if ($deaths->count() == 0)
                <div class="col-12 alert alert-success text-center">
                    <span class=""><i class="bi bi-emoji-smile-fill"></i> Pas de décès</span>
                </div>
            @else
            <div class="row">
                @foreach ($deaths as $item)
                    <article class="card col-6">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $item->firstname." ".$item->lastname }}</strong></h5>
                            <p class="card-subtitle h6 mb-2 text-muted">Fonction: {{ $item->function }}</p>
                            <h6 class="card-subtitle mb-2 text-muted">Né le {{ $item->date_born }} &#45; {{ $item->sexe }}</h6>
                            <p class="card-subtitle h6 my-1 bg-warning ">Décedé le :  {{ $item->date_death }}</p>
                            <p class="card-subtitle h6 my-1">Parent: {{ $item->parent_name }}</p>
                            <p class="card-subtitle h6 my-1">Motif: {{ $item->motif }}</p>
                            <p class="card-subtitle h6 my-1">Mode: {{ $item->mode }}</p>
                            <div>
                                <span>Ville: {{ $item->city_live }}</span>
                            </div>
                        </div>
                    
                    </article>
                @endforeach
            </div>

            @endif
        </div>
    </div>
    <div class="col-3 ">
        
        <a class="btn btn-sm btn-danger my-2 form-control" href="{{ route("create.death") }}">Ajouter nouveau décès</a>
       {{--  <a class="btn btn-sm btn-secondary my-2 form-control" href="{{ route("create.arrange") }}">Ajouter un Aménagement</a>
        <a class="btn btn-sm btn-dark my-2 form-control" href="{{ route("create.deme") }}">Ajouter une demenagement</a>
        <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a> --}}
    </div>
</div>
</section>
@endsection