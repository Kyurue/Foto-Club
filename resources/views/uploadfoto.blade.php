@extends('layouts.app')
@section('content')
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
<div class="container2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('afbeelding') }}</div>

                <div class="card-body">
                <!-- Geen flauw idee wat ik bij route moet neerzetten -->
                <form method="post" action="{{url('upload_data')}}" enctype="multipart/form-data">
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
                                <textarea id="description" type="text" maxlength="225" class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
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
                            <input type="radio" name="Leeftijd" id="Leeftijd21" value="true">
                            <label for="Leeftijd21">21+</label>
                            <input type="radio" name="Leeftijd" id="Leeftijd20" value="false">
                            <label for=":eeftijd20">20/ jonger</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Keywords') }}</label>

                            <div class="col-md-6">
                                <textarea id="Keywords" type="text" class="form-control @error('Keywords') is-invalid @enderror" name="Keywords" ></textarea>
                            </div>
                        </div>

                        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-info" style="margin-top:12px"><i class="glyphicon glyphicon-check"></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</div>
@endsection