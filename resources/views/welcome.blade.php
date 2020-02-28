@extends('layouts.app')
@section('content')
<body class="mx-auto text-lowercase text-left text-body" >
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <div class="py-5 text-center" style="background-image: url(&quot;https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940&quot;); background-size: cover;">
    <div class="container">
      <div class="row">
      @guest
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">Upload hier je Foto's!</h3>
          <p class="mb-3 lead">Wilt u graag uw fotografische talent laten zien?</p>
          <p class="mb-4">Dagelijks krijgen wij aanmeldingen van mensen die hun foto's aan de wereld willen laten zien. wilt u eventueel ook uw talent laten zien registreer dan nu op onze site! het is gratis en zeker het proberen waard!</p> <a class="btn btn-outline-primary" href="register">Registreer nu!</a>
        </div>
        @else
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">Upload nu uw Foto's!</h3>
          <p class="mb-3 lead">Wilt u graag uw fotografische talent laten zien? Druk dan op de knop hieronder!</p>
          <p class="mb-4"></p> <a class="btn btn-outline-primary" href="uploadfoto">Upload foto!</a>
        </div>
        @endguest
      </div>
    </div>
  </div>
  <div class="container2">
  </div>
</body>
@endsection
