@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>
<body class="mx-auto text-lowercase text-left text-body" >
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
  <div class="py-5 text-center" style="background-image: url(&quot;https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940&quot;); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">Upload hier je Foto's!</h3>
          <p class="mb-3 lead">Wilt u graag uw fotografische talent laten zien?</p>
          <p class="mb-4">Dagelijks krijgen wij aanmeldingen van mensen die hun foto's aan de wereld willen laten zien. wilt u eventueel ook uw talent laten zien registreer dan nu op onze site! het is gratis en zeker het proberen waard!</p> <a class="btn btn-outline-primary" href="register">Registreer nu!</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
