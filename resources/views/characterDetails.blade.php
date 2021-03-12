@extends ('layouts.origin')
@section('title', 'Details des héros')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/characterdetails.css') }}">
@endsection
@section('content')
    <h1>Détails des Héros</h1>
    <div id="characterDetails">
        <div class="character">
            <p class="title">Héros:</p>
            <p>{{ $heroes->name}}</div>
            <p class="title">Dessinateur:</p>
            <p>{{$heroes->draftsman}}</p>
            <p class="title">Année de Création:</p>
            <p>{{$heroes->creation_year}}</p>
            <p class="title">Comics affilié:</p>
            <p>{{$heroes->comic_related}}</p>
        </div>
    </div>
@endsection