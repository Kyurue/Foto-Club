@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <!--<title>Laravel Multiple File Upload Example</title> -->
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
</head>
<body><br>
<!--div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Sorry !</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif -->

<!--<h3 class="jumbotron"><i class="glyphicon glyphicon-upload"></i> Laravel Multiple File Upload</h3> -->

<div class="container2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('afbeelding') }}</div>

                <div class="card-body">
<form method="post" action="{{url('upload_data')}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group row">
                            <label for="titel" class="col-md-4 col-form-label text-md-right">{{ __('titel') }}</label>

                            <div class="col-md-6">
                                <input id="titel" type="text" class="form-control @error('titel') is-invalid @enderror" name="titel" value="{{ old('titel') }}" required autocomplete="titel" autofocus>

                                @error('titel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>oof</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="omschrijving" class="col-md-4 col-form-label text-md-right">{{ __('omschrijving') }}</label>

                            <div class="col-md-6">
                                <textarea id="omschrijving" type="text" maxlength="225" class="form-control @error('omschrijving') is-invalid @enderror" name="omschrijving"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __('categorie') }}</label>

                            <div class="col-md-6">
                                <select name="categorie" id="categorie">
                                    <option value="natuur">Natuur</option>
                                    <option value="muziek">Muziek</option>
                                    <option value="gebouwen">Gebouwen</option>
                                    <option value="landen">landen</option>
                                    <option value="ruimte">Ruimte</option>
                                </select>
                                <!-- <input id="Categorie" type="text" class="form-control @error('Categorie') is-invalid @enderror" name="Categorie"> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leeftijd" class="col-md-4 col-form-label text-md-right">{{ __('leeftijd') }}</label>

                            <div class="col-md-6">
                            <input type="radio" name="leeftijd" id="leeftijd" value="true">
                            <label for="leeftijd">21+</label>
                            <input type="radio" name="leeftijd" id="leeftijd" value="false">
                            <label for="leeftijd">20/jonger</label>
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
</body>
</html>
@endsection