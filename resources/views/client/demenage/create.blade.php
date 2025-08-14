@extends('client.layout.app', ['title'=> "Ajouter un aménagement"])

@section('main')
<section class="container">
    <div class="d-flex justify-content-center">

        <div class="col-12 col-md-5 my-5">
            <h3 class="mt-5 mb-4 text-center bg-dark rounded py-3 text-white"><i class="bi bi-chevron-double-up"></i> Ajouter un deménagement</h3>
            <form class="row g-3" method="post" action="{{ route("store.deme") }}">
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
                    <label class="form-label">Fonction </label>
                    <input type="text" class="form-control" name="fonction" placeholder="La fonction ">
                    @error('fonction')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Date de naissance</label>
                    <input type="date" name="date_born" class="form-control" placeholder="Date de naissance">
                    @error('date_born')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>


                <div class="col-md-12">
                    <label  class="form-label">Nouvelle destination</label>
                    <input type="text" class="form-control" name="n_destine" placeholder="Nouvelle destination">
                    @error('n_destine')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

               

                <div class="col-md-12">
                    <label  class="form-label">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Non de la ville">
                    @error('ville')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>

               
                <div class="col-12">
                    <button type="submit" class="btn btn-dark">Ajouter</button>
                </div>
               
            </form>
        </div>
    </div>
</section>
@endsection