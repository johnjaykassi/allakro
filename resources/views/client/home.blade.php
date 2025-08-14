@extends('client.layout.app', ['title' => 'Connexion'])

@section('main')


<section class="container style-container">
    <h1 class="my-5 text-center">Registre des habitants</h1>
    <div class="row">
        <div class="col-9">
            <div class="mt-3 block">
                <h3 class=""><i class="bi bi-caret-right-fill"></i> Liste des nouveaux-nés ({{ $articles["borns"]->count() }})</h3>
                <div class="row">
                    @foreach ($articles["borns"] as $item)
                        <article class="card col-5 m-2">
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
            </div>

            <div class="my-3 block">
                <h3 class=""><i class="bi bi-caret-right-fill"></i> Liste des décès ({{ $articles["death"]->count() }})</h3>
                <div class="row">
                    @foreach ($articles["death"] as $item)
                        <article class="card col-5 m-2">
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
            </div>

            <div class="my-3 block">
                <h3 class=""><i class="bi bi-caret-right-fill"></i> Liste des personnes qui Aménagent ({{ $articles["arrange"]->count() }})</h3>
                <div class="row">
                    @foreach ($articles["arrange"] as $item)
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
            </div>

            <div class="my-3 block">
                <h3 class=""><i class="bi bi-caret-right-fill"></i> Liste des personnes qui deménagent ({{ $articles["deme"]->count() }})</h3>
                <div class="row">
                    @foreach ($articles["deme"] as $item)
                        <article class="card col-5 m-2">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $item->firstname." ".$item->lastname }}</strong></h5>
                                <p class="card-subtitle h6 mb-2 text-muted">Fonction : {{ $item->motif }}</p>
                                <h6 class="card-subtitle mb-2 text-muted">Né le {{ $item->date_born }} &#45; {{ $item->sexe }}</h6>
                                <p class="card-subtitle h6 my-1">Parent : {{ $item->parent_name }}</p>
                                <p class="card-subtitle h6 my-1">Nouveau destination : {{ $item->nou_destination }}</p>
                                <div>
                                    <span>Ville: {{ $item->city_live }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
            <div class="my-3 block">
                <h3 class=""><i class="bi bi-caret-right-fill"></i> Liste des personnes qui cherche service ({{ $articles["job"]->count() }})</h3>
                <div class="row">
                    @foreach ($articles["job"] as $item)
                        <article class="card col-5 m-2">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $item->firstname." ".$item->lastname }}</strong></h5>
                                <p class="card-subtitle h6 mb-2 text-muted">Téléphone : {{ $item->tél }}</p>
                                <p class="card-subtitle h6 my-1">Service : {{ $item->service }}</p>
                                <h6 class="card-subtitle mb-2 text-muted">Né le {{ $item->date_born }} &#45; {{ $item->sexe }}</h6>
                                <p class="card-subtitle h6 my-1">Qualification_compétence : {{ $item->qualification_competence }}</p>
                                <p class="card-subtitle h6 my-1">Message : {{ $item->message }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-3 ">
            <a class="btn btn-sm btn-success my-2 form-control" href="{{ route("create.born") }}">Ajouter nouveau né</a>
            <a class="btn btn-sm btn-danger my-2 form-control" href="{{ route("create.death") }}">Ajouter nouveau décès</a>
            <a class="btn btn-sm btn-secondary my-2 form-control" href="{{ route("create.arrange") }}">Ajouter un Aménagement</a>
            <a class="btn btn-sm btn-dark my-2 form-control" href="{{ route("create.deme") }}">Ajouter une demenagement</a>
            <a class="btn btn-sm btn-outline-primary my-2 form-control" href="{{ route("create.job") }}">Ajouter un job</a>
        </div>
    </div>
</section>

<section class="explore-section section-padding" id="section_2">
    <div class="col-12 text-center">
        <h2 class="mb-4 text-center">QUELQUES ACTUALITES </h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="list-style: none; display:flex; flex-direction:row; ">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Santé<sup>5</sup></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Numérique<sup>5</sup></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Maladies&Epidémies<sup>5</sup></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Hopital<sup>5</sup></button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Pharmacie<sup>4</sup></button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">SOCIAL</h5>

                                            <p class="mb-0">Côte d’Ivoire-AIP/ La journée mondiale de lutte contre le travail des enfants commémorée à Allakro </p>
                                            <h6><P></P></h6>
                                        </div>
                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>
                                    <img src="{{asset('images/actualites/action_social.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">SANTE</h5>

                                                <p class="mb-0">L'ONUCI offre un centre d'éveil de protection social aux habitants d'Allakro dans
                                                    la sous-prefecture de Noé.</p>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                    </div>

                                    <img src="{{asset('images/actualites/centre_eveil.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Numérique</h5>

                                                <p class="mb-0">L'Université Virtuelle de Côte d'Ivoire au service du quartier précaire d'Allakro lance
                                                    une application pour sa population.</p>
                                            </div>

                                            <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                        </div>

                                        <img src="{{asset('images/actualites/humanite-numerique-uvci-allakro.jpg')}}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">SOCIAL</h5>

                                            <p class="mb-0">Côte d’Ivoire-AIP/ La journée mondiale de lutte contre le travail des enfants commémorée à Allakro </p>
                                            <h6><P></P></h6>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>

                                    <img src="{{asset('images/actualites/les-enfants-dallakro-linfodrome.webp')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Clinique Médicale Latrille</h5>

                                        </div>
                                    </div>
                                    <img src="{{asset('images/actualites/cm_petite.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Centre de Santé Urbain COLOMBIE</h5>

                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/cm_petite.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Centre Médical Spécialisé</h5>

                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/cm_petite.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Centre médical TRAORE SEYDOU</h5>

                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/cm_petite.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Centre Médical Sourire d'Enfance</h5>

                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/cm_petite.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Pharmacie Plaque 2</h5>
                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/pharmacie.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Pharmacie Bonne Santé</h5>
                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/pharmacie.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Pharmacie des Graces</h5>
                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/pharmacie.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Pharmacie Comoé</h5>
                                        </div>


                                    </div>

                                    <img src="{{asset('images/actualites/pharmacie.jpg')}}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/custom.js"></script>

@endsection



