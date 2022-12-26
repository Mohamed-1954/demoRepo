@extends('layouts.layout')
@section('content')
    <div class="container">
      <header>
        <nav>
          <ul>
            <li><a href="/">Index</a></li>
            <li><a href="/create">New</a></li>
          </ul>
        </nav>
      </header>
      <table class="table-info table-striped table-hover">
        <thead>
            <tr class="bg-secondary">
                <th scope="col">ID</th>
                <th scope="col">Designation</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Prix de vente</th>
                <th scope="col">Unité</th>
                <th scope="col">Image</th>
                <th scope="col">Quantité</th>
                <th scope="col">Show</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
        </thead>
        @foreach ($articles as $article)
            <tbody>
              <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->design}}</td>
                <td>{{$article->categorie}}</td>
                <td>{{$article->puv}}</td>
                <td>{{$article->unite}}</td>
                <td>{{$article->image}}</td>
                <td>{{$article->quantite}}</td>
                <td>
                  <a href="{{ route('show', $article->id)}}" class="btn btn-info">show</a>
                </td>
                <td>
                  <a href="{{ route('edit', $article->id)}}" class="btn btn-success">edit</a>
                </td>
                <td>
                  <form action="/delete/{{$article->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning">delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
        @endforeach
      </table>
    </div>
@endsection
</body>
</html>