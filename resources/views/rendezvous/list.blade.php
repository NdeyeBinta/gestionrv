@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Rendez-vous</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Identifiant </th>
                            <th>Lebelle</th>
                            <th>Date</th>
                            <th>Medecin</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach($liste_rendezvous as $rendezvous)
                            <tr>
                                <td>{{$rendezvous->id}}</td>
                                <td>{{$rendezvous->libelle}}</td>
                                <td>{{$rendezvous->date}}</td>
                                <td>{{$rendezvous->medecins_id}}</td>
                                <td><a href="{{route('editrendezvous',['id'=>$rendezvous->id])}}">Editer</a></td>
                                <td><a href="{{route('deleterendezvous',['id'=>$rendezvous->id])}}" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
