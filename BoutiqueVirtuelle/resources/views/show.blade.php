@extends('layouts.layout')
@section('content')
<div class="container">
    <h2 class="bg-primary">Page Show Article : {{$article->id}}</h2>
    <div>{{$article->design}}</div>
    <div>{{$article->categorie}}</div>
    <div>{{$article->puv}}</div>
    <div>{{$article->unite}}</div>
    <div>{{$article->image}}</div>
    <div>{{$article->quantite}}</div>
</div>
@endsection
</body>
</html>