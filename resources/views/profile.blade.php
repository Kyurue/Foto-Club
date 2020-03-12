@extends('layouts.app')
@section('content')
<style> .wrapper {
  display: flex;
  justify-content: space-between;
}
.avatar {
  object-fit: cover;
  width:250px;
  height: 250px;
}

.main,
.sidebar {
  background-color: #fff;
}
.main {
  width: 70%;
  height: 120vh;
  border: 3px solid black;
}
.sidebar {
  width: 29%;
  height: 50vh;
}
.sidebar {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
</style>
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <div class="pi-draggable py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/storage/avatars/{{ $user->avatar }});  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="p-2 col-md-8 mr-auto text-right text-white"><img class="d-block pi-draggable avatar" src="/storage/avatars/{{ $user->avatar }}"></div>
      </div>
    </div>
  </div>
    <div class="container2">
    <div class="wrapper" >
    <div class="sidebar"> 
    <span class="label label-default rank-label">naam : {{$user->name}}</span><br>
    <span class="label label-default rank-label">e-mail : {{$user->email}}</span><br>
    <span class="label label-default rank-label">leeftijd: {{$user->age}}</span><br>
    <span class="label label-default rank-label">type user: {{$user->role}}</span><br>
    <span class="label label-default rank-label">gebruiker sinds: {{$user->created_at}}</span><br>
    <span class="label label-default rank-label"><a class="navbar-brand d-none d-md-block" href="updatePage">edit <i class="fas fa-edit"></a></i></span>
    </div>
    <div class="main"> Foto's </div>
  </div>
  </div>
@endsection