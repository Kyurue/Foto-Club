@extends('layouts.app')
@section('content')
<style>
.blog {
  margin-top: 15px;
  margin-bottom: 15px;
  background: white;
}
.blog .foto {
  background: rgb(233, 233, 233);
}
.blog img{
  width: 100%;
}
.blog .info {
  background: white;
}
.blog .info .card{
  width: 100%;
}
</style>
<body>
    
<div class="container pt-2 pb-2">
    <div class="row blog">
        <div class="col-md-7 pt-2 pb-2 foto">
            <img src="https://media.wired.com/photos/5d09594a62bcb0c9752779d9/master/pass/Transpo_G70_TA-518126.jpg" alt="test">
        </div>
        <div class="col-md-5 pt-2 pb-2 info">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">((title placeholder))</h5>
                    <p class="card-text">
                        ((description placeholder))<br>
                        ((meer random info overfoto placeholder))
                        <span class="label label-default rank-label"><a class="navbar-brand d-none d-md-block" href="#">edit <i class="fas fa-edit"></a></i></span>
                    </p>
                    <a href="/home" class="btn btn-outline-success">terug</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection