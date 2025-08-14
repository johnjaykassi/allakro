@extends('client.layout.app', ['title'=> "Les Services disponibles"])

@section('main')
<section class="container my-5 style-container">
    <h1 class="my-5 text-center"><i class="bi bi-caret-right-fill"></i> Liste des services disponibles</h1>
<div class="row">
    <div class="col-9 block">
        <div class="mt-3">
            @if ($jobs->count() == 0)
                <div class="col-12 alert alert-warning text-center">
                    <span class=""><i class="bi bi-exclamation-triangle-fill"></i> Pas de service</span>
                </div>
            @else
            <div class="row">
                @foreach ($jobs as $item)
                    <article class="card col-5 m-2">
                        <div class="card-body">
                            <img class="border img img-fluid rounded-circle" style="height:60px; widht:60px" src="{{ Storage::url($item->avatar) }}" alt="avatar">
                            <h5 class="card-title"><strong class="ml-5">{{ $item->firstname." ".$item->lastname }}</strong></h5>
                            <p class="card-subtitle h6 mb-2 text-muted">Service: {{ $item->service }}</p>
                            <p class="card-subtitle h6 my-1 ">Téléphone :  {{ $item->tel }}</p>
                            <p class="card-subtitle h6 my-1">Message: {{ $item->message }}</p>
                            <p class="card-subtitle h6 my-1">Compétences: {{ $item->qualification_competence }}</p>

                        </div>
                    </article>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div class="col-3 ">
        <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a>
    </div>
</div>
</section>
@endsection
