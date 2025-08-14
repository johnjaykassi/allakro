@extends('client.layout.app', ['title'=> "Ajouter un service"])

@section('main')
<section class="container">
    <div class="d-flex justify-content-center">

        <div class="col-12 col-md-5 my-5">
            <h3 class="mt-5 mb-4 text-center border border-primary rounded py-3"><i class="bi bi-chevron-double-up"></i> Ajouter un service</h3>
            <form class="row g-3" method="post" action="{{ route("store.job") }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label class="form-label">Non </label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom ">
                    @error('nom')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Prénom </label>
                    <input type="text" class="form-control" name="prenom" placeholder="prénom ">
                    @error('prenom')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Téléphone </label>
                    <input type="tel" class="form-control" name="tel" placeholder="Téléphone ">
                    @error('tel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

               

                <div class="col-12">
                    <label class="form-label">Service </label>
                    <input type="text" class="form-control" name="service" placeholder="Le service ">
                    @error('service')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Qualification/ Compétence</label>
                    <textarea type="date" name="competence" class="form-control" placeholder="Qualification et compétences"></textarea>
                    @error('competence')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea type="date" name="message" class="form-control" placeholder="Message"></textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="col-md-12">
                    <label  class="form-label">Photo de profil</label>
                    <input type="file" name="avatar" class="form-control" placeholder="Non de la ville">
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>

               
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">Ajouter</button>
                </div>
               
            </form>
        </div>
    </div>
</section>
@endsection