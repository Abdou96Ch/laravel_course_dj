@extends('master.layout');

@section('title')
    {{$post->title}}
@endsection

@section('content')
<div class="row ">
    <div class="col-md-8">
        <div class="row">
            <div class="col md-12 mb-2 ">
                <div class="card h-100 " style="width: 18rem;">
                <img src="{{ $post->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body}}</p>
                    </div>
                    <!-- Bouton pour modifier le post -->
                    <a href="" class="btn btn-warning  mb-2">Modifier</a>
                    
                    <!-- On ajoute un formulaire pour la suppression pour y confirmer -->
                    <form id = "{{$post->id}}" action="" method="post">
                        <!-- Au niveau de chaque formulaire on ajoute le csrf -->
                        @csrf
                        <!-- La methode delete pour la supression à travers le formulaire -->
                        @method('DELETE')
                        <!-- boutton supprimer avec Pop-up de confirmation de suppression de post -->
                        <button class ="btn btn-danger" type="submit" >Supprimer</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection