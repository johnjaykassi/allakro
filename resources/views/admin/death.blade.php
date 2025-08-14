@extends('admin.layout.app', ['title' => 'Liste de décès'])

@section('content')
    <div class="main-panel grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Les décès ({{ $deaths->count() }})</h4>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Avatar </th>
                            <th> Nom </th>
                            <th> Prénom </th>
                            <th> Sexe </th>
                            <th> Fonction </th>
                            <th> Date de N </th>
                            <th> Date décès </th>
                            <th> Mode </th>
                            <th> Motif </th>
                            <th> Parent </th>
                            <th> Date d'ajout</th>
                            <th> Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deaths as $item)
                            <tr>
                                <td class="py-1">
                                    @if (is_null($item->avatar))
                                        <i class="mdi mdi-account-circle display-4"></i>
                                    @else
                                        <img src="{{ Storage::url($item->avatar) }}" alt="image" />
                                    @endif

                                </td>
                                <td> {{ $item->firstname }}</td>
                                <td> {{ $item->lastname }}</td>
                                <td> {{ $item->sexe }}</td>
                                <td> {{ $item->function }}</td>
                                <td>{{ $item->date_born }}</td>
                                <td>{{ $item->date_death }}</td>
                                <td>{{ $item->city_live }}</td>
                                <td> {{ $item->motif }}</td>
                                <td>{{ $item->parent_name }}</td>
                                <td> {{ $item->created_at }} </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span title="En ligne"class="bg-success">
                                            <form action="{{ route('active.death', $item->id) }}" method="post">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <button title="Mettre en ligne" type="submit" class="btn btn-success">
                                                    <i class="fa fa-check-circle text-white" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </span>
                                    @else
                                        <span title="En ligne"class="bg-success">
                                            <form action="{{ route('active.death', $item->id) }}" method="post">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <button title="Mettre en ligne" type="submit" class="btn btn-secondary">
                                                    <i class="fa fa-question-circle text-white" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
