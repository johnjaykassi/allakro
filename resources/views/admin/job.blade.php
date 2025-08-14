@extends('admin.layout.app', ['title' => 'Liste des services'])

@section('content')
    <div class="main-panel grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Les  services ({{ $job->count() }})</h4>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Avatar </th>
                            <th> Nom </th>
                            <th> Prénom </th>
                            <th> Service </th>
                            <th> Qualification/Comptétences</th>
                            <th> Téléphone  </th>
                            <th> Message </th>
                            <th> Date d'ajout</th>
                            <th> Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $item)
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
                                <td> {{ $item->service }}</td>
                                <td><textarea name="" id="" cols="30" rows="10">{{ $item->qualification_competence }}</textarea> </td>
                                <td>{{ $item->tel }}</td>
                                <td><textarea name="" id="" cols="30" rows="10">{{ $item->message }}</textarea> </td>
                                <td> {{ $item->created_at }} </td>
                                <td>
                                    @if ($item->status == 1)
                                    <span title="En ligne"class="bg-success">
                                        <form action="{{ route('active.job', $item->id)}}" method="post">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <input type="number" name="inline" value="0" hidden>
                                            <button title="Mettre en ligne" type="submit" class="btn btn-success">
                                                <i class="fa fa-check-circle text-white" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </span>
                                @else
                                    <span title="En ligne"class="bg-success">
                                        <form action="{{ route('active.job', $item->id)}}" method="post">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <input type="number" name="inline" value="1" hidden>
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
