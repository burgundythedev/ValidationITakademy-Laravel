@extends ('layouts.origin')
@section('title', 'Les dessinateurs')

@section('style') 
    <link rel="stylesheet" href="/css/draftsman.css">
@endsection

@section('content')
<h1>Voici nos dessinateurs:</h1>
<div class="table-data">
    <div class="book-list">
        <table>    
            {{--affichage des donnees de la db books dans un tableau --}}
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <a href=""></a>
                    </td>  
                    <td></td>  
                    <td></td>
                    <td></td>
                </tr>  
            </tbody>
        </table>
    </div>
    <div class="book-list">
        <table>    
            {{--affichage des donnees de la db books dans un tableau --}}
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <form action="" method="get">
                        @csrf
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="update">Update</button>
                    </form>
                    </td>
                    <td>   
                        <form action="/deleteBook" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>  
            </tbody>
        </table>
    </div>
</div>

@endsection