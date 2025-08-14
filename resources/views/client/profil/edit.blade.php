@extends('client.layout.app', ['title' => 'Modifier le profil'])

@section('main')
    <section class="container">
        <div class="d-flex justify-content-center">

            <div class="col-12 col-md-5 my-5">
                <h3 class="mt-5 mb-4 text-center bg-primary rounded py-3 text-white">Modification du profil</h3>
                <form class="row g-3" method="post" action="{{ route("profil.update") }}">
                    {{ method_field("PUT") }}
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Non & prénom</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nom" placeholder="Nom & prénom">
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Adresse email</label>
                        <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="xxx@oooo.xxx">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="col-12">
                        <label class="form-label">Téléphoe</label>
                        <input type="text" name="tel" class="form-control" value="{{ Auth::user()->tel }}" placeholder="xxx00000000">
                        @error('tel')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary form-control">Validé </button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
