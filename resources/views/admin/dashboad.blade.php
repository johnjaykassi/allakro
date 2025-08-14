@extends('admin.layout.app', ["title"=>"Tableau de bord"])

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Tableau de bord </h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>{{ date("Y-M-d") }} </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Nouveaux-nés</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $data["born"] }}</h2>
                      <i class="mdi mdi-account-multiple-plus icon-md text-dark"></i>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Décès</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $data["death"] }}</h2>
                      <i class="mdi mdi-account-multiple-minus icon-md text-dark"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Aménages</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $data["arrange"] }}</h2>
                      <i class="mdi mdi-format-vertical-align-bottom icon-md text-dark"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Déménages</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $data["deme"] }}</h2>
                      <i class="mdi mdi-format-vertical-align-top icon-md text-dark"></i>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Service</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $data["job"] }}</h2>
                      <i class="mdi mdi-briefcase icon-md text-dark"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
