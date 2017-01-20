



@extends('layouts.app')

@section('content')

    <h2>Titre possible</h2>
    <p>Bienvenue dans votre interface d'apprenant , venez ici gerer pas mal de truc</p>

    <ul class="nav nav-tabs">
        <li><a href="/home#accueil">Accueil</a></li>
        <li><a href="#profil">Profil</a></li>
        <li><a href="#library">Librairie</a></li>
        <li><a href="#course">Mes cours</a></li>
        <li class="active"><a href="/quizz/#profil">Mes Quizz</a></li>
        <li><a href="#class">Salle de classe</a></li>
    </ul>

    <div class="tab-content">
        <div id="profil" class="tab-pane fade in active">
            <h3>Profil</h3>
            <p>Mettre les infos du profil apprenant, avec formulaire pour modifier infos !</p>
            <ul>
                <li>Avatar</li>
                <li>Ajout infos : stack, git, autres</li>
            </ul>

            <div class="col-sm-8 col-xs-12">
                <h4>Quizz</h4>
                {!! link_to_route('quizz.create', 'Ajouter un quizz') !!}
                @foreach ($quizzs as $quizz)
                    <div>
                        Name : {!! $quizz->name !!}
                        {!! link_to_route('quizz.show', 'Voir', [$quizz->id]) !!}
                        {!! link_to_route('quizz.edit', 'Modifier', [$quizz->id]) !!}
                        {!! Form::open(['method' => 'DELETE', 'route' => ['quizz.destroy', $quizz->id]]) !!}
                        {!! Form::submit('Supprimer') !!}
                        {!! Form::close() !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection()