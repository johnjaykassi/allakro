@extends('admin.layout.app', ['title' => 'administrateurs'])

@section('content')
    <div class="main-panel grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Administrateurs ({{ $admins->count() }})</h4>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Avatar </th>
                            <th> Nom/Prénom </th>
                            <th> Email </th>
                            <th> Téléphone </th>
                            <th> Date d'ajout </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $item)
                            <tr>
                                <td class="py-1">
                                    @if (is_null($item->avatar))
                                        <i class="mdi mdi-account-circle display-4"></i>
                                    @else
                                        <img src="{{ Storage::url($item->avatar) }}" alt="image" />
                                    @endif

                                </td>
                                <td> {{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->tel }}</td>
                                <td> {{ $item->created_at }} </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
