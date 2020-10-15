@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire de modifiaction des Rendez-vous</div>

                <div class="card-body">
                    @if (isset($confirmation))
                        @if ($confirmation == 1)
                            <div class="alert alert-success">Rendez-vous ajouté</div>
                        @else
                            <div class="alert alert-danger">Rendez-vous non alouté</div>
                        @endif
                    @endif
                    <form method="POST" action="{{route('updaterendezvous')}}">
                        @csrf
                        <div class="form-group">
                            <label  class="control-label" for="id">Identifiant du Rendez-vous</label>
                            <input  class="form-control"  readonly='true' type="text" name="id" id="id" value="{{$rendezvous->id}}"/>
                        </div> 
                        <div class="form-group">
                            <label  class="control-label" for="libelle">Libelle du Rendez-vous</label>
                            <input  class="form-control" type="text" name="libelle" id="libelle" value="{{$rendezvous->libelle}}"/>
                        </div>                   
                        <div class="form-group">
                            <label  class="control-label" for="date">Date du Rendez-vous</label>
                            <input  class="form-control" type="date" name="date" id="date" value="{{$rendezvous->date}}"/>
                        </div>
                        <div class="form-group">
                            <label  class="control-label" for="medecins_id">Medecin du Rendez-vous</label>
                            <input  class="form-control" type="text" name="medecins_id" id="medecins_id" value="{{$rendezvous->medecins_id}}"/>
                        </div>
                        <div class="form-group">
                            <input  class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                            <a  class="btn btn-danger" href="{{route('getallrendezvous')}}">Annuler</a>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
