@extends('layouts.app')
@section('content')
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
<div class="container2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('afbeelding') }}</div>

                <div class="card-body">
                <!-- Geen flauw idee wat ik bij route moet neerzetten -->
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titel') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Omschrijving') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Categorie" class="col-md-4 col-form-label text-md-right">{{ __('Categorie') }}</label>

                            <div class="col-md-6">
                                <select>
                                    <option>Natuur</option>
                                    <option>Mode</option>
                                    <option>Games</option>
                                    <option>Meme</option>
                                </select>
                                <!-- <input id="Categorie" type="text" class="form-control @error('Categorie') is-invalid @enderror" name="Categorie"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Leeftijdscategorie" class="col-md-4 col-form-label text-md-right">{{ __('Leeftijd') }}</label>

                            <div class="col-md-6">
                            <input type="radio" name="Leeftijd" id="Leeftijd21" value="21+">
                            <label for="Leeftijd21">21+</label>
                            <input type="radio" name="Leeftijd" id="Leeftijd20" value="21+">
                            <label for=":eeftijd20">20/ jonger</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Keywords') }}</label>

                            <div class="col-md-6">
                                <textarea id="Keywords" type="text" class="form-control @error('Keywords') is-invalid @enderror" name="Keywords" ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right">{{ __('Afbeelding') }}</label>

                            <div class="col-md-6">
                                <input id="Image" type="file" accept="image/png, image/jpeg"  name="Afbeelding">
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection