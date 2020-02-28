@extends('layouts.app')
@section('content')
<style> .wrapper {
  display: flex;
  justify-content: space-between;
}

.main,
.sidebar {
  border: 3px solid black;
  background-color: #fff;
}

.main {
  width: 70%;
  height: 150vh;
}

.sidebar {
  width: 29%;
  height: 25vh;
}

.sidebar {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
</style>
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <div class="pi-draggable py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="p-2 col-md-8 mr-auto text-right text-white"><img class="d-block pi-draggable" src="https://i.pinimg.com/originals/a6/f3/c5/a6f3c55ace829310723adcb7a468869b.png"></div>
      </div>
    </div>
  </div>
    <div class="container2">
    <div class="wrapper" >
    <div class="sidebar"> Info </div>
    <div class="main"> Foto's </div>
  </div>
  </div>
@endsection