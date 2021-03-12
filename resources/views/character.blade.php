@extends ('layouts.origin')
@section('title', 'Les Personnages')

@section('style') 
    <link rel="stylesheet" href="/css/character.css">
@endsection
@section('add')
    <li><a href ="/addCharacter">Add Ton Héros de Comics</a></li> 
@endsection

@section('content')
    <h1>Vos personnages de Comics préférés:</h1>
    <div class="table-data">
        <div class="book-list">
            <img class="home-pics" src="https://pbs.twimg.com/profile_images/1214180130362290177/fMcumfOv.jpg" alt="librabry">
            <table>    
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nom du Héros</th>
                        <th scope="col">Dessinateur</th>
                        <th scope="col">Année de création</th>
                        <th scope="col">Nom du Comic affilié</th>
                        <th scope="col">Custom ton Héros de Comics</th>
                        <th scope="col">Delete ton Héros de Comics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($heroes as $character)
                    <tr>
                        <th scope="row">{{$character->id}}</th>
                        <td>
                            <a href="/characterDetails/{{$character->id}}">{{$character->name}}</a>
                        </td>  
                        <td>{{$character->draftsman_id}}</td>  
                        <td>{{$character->creation_year}}</td>
                        <td>{{$character->comic_related}}</td>
                        <td>
                            <form action="/updateCharacter/{{$character->id}}" method="get">
                                @csrf
                                <input type="hidden" name="id" value="{{$character->id}}">
                                <button type="submit" name="update">Update</button>
                            </form>
                        </td>
                        <td>   
                            <form action="/deleteCharacter" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$character->id}}">
                                <button type="submit" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
            <img class="home-pics" src="https://pbs.twimg.com/profile_images/1214180130362290177/fMcumfOv.jpg" alt="librabry">
        </div>    
    </div>
@endsection