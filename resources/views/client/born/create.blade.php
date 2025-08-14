@extends('client.layout.app', ['title'=> "ajouté un nouveaux né"])

@section('main')
<section class="container">
    <div class="d-flex justify-content-center">

        <div class="col-12 col-md-5 my-5">
            <h3 class="mt-5 mb-4 text-center bg-success rounded py-3 text-white"><i class="bi bi-person-add"></i> Ajouter un nouveau né</h3>
            <form class="row g-3" method="post" action="{{ route("store.born") }}">
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
                    <label class="form-label">Sexe</label>
                   <select name="sexe" class="form-control" >
                        <option selected value="">--Sélectionnez le sexe--</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                   </select>
                    @error('sexe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="col-12">
                    <label class="form-label">Date de naissance</label>
                    <input type="date" name="date" class="form-control" placeholder="Date de naissance">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>


                <div class="col-md-6">
                    <label  class="form-label">Nom du père</label>
                    <input type="text" class="form-control" name="pere" placeholder="Nom du père">
                    @error('pere')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label  class="form-label">Nom de la mère</label>
                    <input type="text" class="form-control" name="mere" placeholder="Nom de la mère">
                    @error('mere')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label  class="form-label">Ville de naissance</label>
                    <input type="text" name="ville" class="form-control" placeholder="Non de la ville de naissance">
                    @error('ville')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
               
            </form>
        </div>
    </div>
</section>
@endsection