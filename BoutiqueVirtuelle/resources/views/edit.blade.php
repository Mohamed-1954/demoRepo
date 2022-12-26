@extends('layouts.layout')
@section('content')
<div class="container">
    <h2 class="bg-primary"> Page Edit Article : {{$article->$id}}</h2>
    <form method="post" action="/storing">
        @csrf
        @method("PUT")
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="design">Design</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="text" id="design" name="design" value="{{$article->design}}">
          </div>
          @error('design')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="categorie">Categorie</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="text" id="categorie" name="categorie">
          </div>
          @error('categorie')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="puv">Prix d'Unite</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="text" id="puv" name="puv">
          </div>
          @error('puv')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="unite">Unite</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="text" id="unite" name="unite">
          </div>
          @error('unite')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="image">Image</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="file" id="image" name="image">
          </div>
          @error('image')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label fw-bold" for="quantite">Quantite</label>
          <div class="col-sm-8">
            <input class="form-control w-full" type="text" id="quantite" name="quantite">
          </div>
          @error('quantite')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="row">
          <div class="col-md-1 align-items-center">
            <button type="submit" class="btn btn-primary fw-bold w-100">Creer</button>
          </div>
          <div class="col-md-1 align-items-center">
            <a class="btn btn-outline-primary fw-bold w-100" href="/">Back</a>
          </div>
        </div>
      </form>
</div>
@endsection
</body>
</html>