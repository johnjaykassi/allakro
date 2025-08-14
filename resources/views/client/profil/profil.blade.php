@extends('client.layout.app', ['title'=> "Profil"])

@section('main')
<section class="container py-3 my-5">
    <h3 class="text-center ">Mon profil</h3>
    <div class="row">
        <div class="col-3 border">
            <div>
                <span class="h4">Options</span>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item rounded"><a class="nav-link" href="{{ route("profil") }}">Compte</a></li>
                <a class="btn btn-sm btn-success my-2 form-control" href="{{ route("create.born") }}">Ajouter nouveau né</a>
                <a class="btn btn-sm btn-danger my-2 form-control" href="{{ route("create.death") }}">Ajouter nouveau décès</a>
                <a class="btn btn-sm btn-secondary my-2 form-control" href="{{ route("create.arrange") }}">Ajouter un Aménagement</a>
                <a class="btn btn-sm btn-dark my-2 form-control" href="{{ route("create.deme") }}">Ajouter une demenagement</a>
                <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a>
            </ul>
        </div>
        <div class="col-9 border">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nom & prénom</div>
                       {{ Auth::user()->name }}
                    </div>
                   
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Adresse email</div>
                        {{ Auth::user()->email }}
                    </div>
                   
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Téléphone</div>
                        {{ Auth::user()->tel }}
                    </div>
                </li>
            </ul>
            <div class="my-3">
                 <a class="btn btn-sm btn-secondary " href="{{ route("profil.edit") }}">Modifier le profil</a>
                
            </div>
            
        </div>
    </div>
</section>
@endsection