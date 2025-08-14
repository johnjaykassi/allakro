@extends('client.layout.app', ['title'=> "Personnes qui deménagent"])

@section('main')
<section class="container my-5 style-container">
    <h1 class="my-5 text-center"><i class="bi bi-caret-right-fill"></i> Liste des personnes qui deménagent</h1>
<div class="row">
    <div class="col-9 block">
        <div class="mt-3">
            @if ($demes->count() == 0)
                <div class="col-12 alert alert-warning text-center">
                    <span class=""><i class="bi bi-exclamation-triangle-fill"></i> Pas de personne qui deménage</span>
                </div>
            @else
            <div class="row">
                @foreach ($demes as $item)
                <article class="card col-5 m-2">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $item->firstname." ".$item->lastname }}</strong></h5>
                        <p class="card-subtitle h6 mb-2 text-muted">Fonction: {{ $item->function }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">Né le {{ $item->date_born }} &#45; {{ $item->sexe }}</h6>
                        <p class="card-subtitle h6 my-1 ">Provenance :  {{ $item->provenance }}</p>
                        <p class="card-subtitle h6 my-1">Parent: {{ $item->parent_name }}</p>
                        <p class="card-subtitle h6 my-1">Mode d'hébergement: {{ $item->mode_heb }}</p>
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
      
        <a class="btn btn-sm btn-dark my-2 form-control" href="{{ route("create.deme") }}">Ajouter un demenagement</a>
        {{--  <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a> --}}
    </div>
</div>
</section>
@endsection