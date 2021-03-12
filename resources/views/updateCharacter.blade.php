@extends ('layouts.origin')
@section('title', 'Update ton Héros')
@section('style')
    <link rel="stylesheet" href="/css/updateCharacter.css">
@endsection
@section('content')
    <h1>Update ton héros</h1>
    <div class="form">
       <form action="/updateCharacter" method="post">
            @csrf
            <div class="update">
                <input type="hidden" name="id" value="{{$heroes->id}}">
                <div class="db">  
                    <label for="character-name">Nom du Héros:</label>
                    <input id="add" type="text" name="name" value="{{$heroes->name}}">
                </div> 
                <div class="db"> 
                    <label for="character-draftsman" type='number'>Dessinateur:</label>
                    <input id="add" type='text' name="draftsman" value="{{$heroes->draftsman}}">
                </div>
                <div class="db"> 
                    <label for="character-year">Année de Création:</label>
                    <input id="add" type='number' name="creation_year" value="{{$heroes->creation_year}}">
                </div>
                <div class="db">
                    <label for="book">Comics Affilié</label>
                    <input id="add" type='text' name="comic_related" value="{{$heroes->comic_related}}">
                </div>
                <div class="button"> 
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection