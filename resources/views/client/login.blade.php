@extends('client.layout.app', ['title' => 'Connexion'])

@section('main')
    <section class="container">
        <div class="d-flex justify-content-center">

            <div class="col-12 col-md-5 my-5">
                <h3 class="mt-5 mb-4 text-center bg-success rounded py-3 text-white">Se connceter</h3>
                <form class="row g-3" method="post" action="{{ route("login.user") }}">
                    @csrf

                    @if (session()->has("error"))
                    <div class="alert alert-danger text-center">
                      <span class="">{{ session()->get("error"); }}</span>
                  </div>
                  @endif
                    <div class="col-12">
                        <label class="form-label">Adresse email</label>
                        <input type="email" name="email" class="form-control" placeholder="xxx@oooo.xxx">


                    </div>
                    <div class="col-md-12">
                        <label  class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Vote mot de passe">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success form-control">Connexion</button>
                    </div>
                    <div class="text-center">
                        <span>Pas de compte ?</span>
                        <a href="{{ route("register") }}" class="btn btn-sm bg-p-violet text-white">S'inscrire</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
