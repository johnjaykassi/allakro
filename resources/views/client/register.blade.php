@extends('client.layout.app', ['title' => 'Inscription'])

@section('main')
    <section class="container">
        <div class="d-flex justify-content-center">

            <div class="col-12 col-md-5 my-5">
                <h3 class="mt-5 mb-4 text-center bg-p-violet rounded py-3 text-white">Inscription</h3>
                <form class="row g-3" method="post" action="{{ route("store.user") }}">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Non & prénom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom & prénom">
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Adresse email</label>
                        <input type="email" name="email" class="form-control" placeholder="xxx@oooo.xxx">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="col-12">
                        <label class="form-label">Téléphoe</label>
                        <input type="text" name="tel" class="form-control" placeholder="xxx00000000">
                        @error('tel')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>


                    <div class="col-md-6">
                        <label  class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  class="form-label">Confirmez le mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le mot passe">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn bg-p-violet text-white form-control">Je m'inscris</button>
                    </div>
                    <div class="text-center">
                        <span>Avez-vous déjà un compte ?</span>
                        <a href="{{ route("login") }}" class="btn btn-sm btn-success">Se connecter</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
