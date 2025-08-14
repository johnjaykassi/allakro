@extends('client.layout.app', ['title'=> "Nouveaux nées"])

@section('main')
<section class="container my-5 style-container">
    <h1 class="my-5 text-center"><i class="bi bi-caret-right-fill"></i> Liste des nouveaux nés</h1>
<div class="row">
    <div class="col-9 block">
        <div class="mt-3">
            @if ($borns->count() == 0)
                <div class="col-12 alert alert-warning text-center">
                    <span class=""><i class="bi bi-exclamation-triangle-fill"></i> Pas de nouveau-né</span>
                </div>
            @else
            <div class="row">
                @foreach ($borns as $item)
                    <article class="card col-6">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $item->firstname." ".$item->lastname }}</strong></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Né le {{ $item->date_born }} &#45; {{ $item->sexe }}</h6>
                            <span class="card-subtitle h6">Père: {{ $item->dad_name }}</span> &#47;
                            <span class="card-subtitle h6">Mère: {{ $item->mother_name }}</span>
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
        <a class="btn btn-sm btn-success my-2 form-control" href="{{ route("create.born") }}">Ajouter nouveau né</a>
       {{--  <a class="btn btn-sm btn-danger my-2 form-control" href="{{ route("create.death") }}">Ajouter nouveau décès</a>
        <a class="btn btn-sm btn-secondary my-2 form-control" href="{{ route("create.arrange") }}">Ajouter un Aménagement</a>
        <a class="btn btn-sm btn-dark my-2 form-control" href="{{ route("create.deme") }}">Ajouter une demenagement</a>
        <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a> --}}
    </div>
</div>
</section>
@endsection