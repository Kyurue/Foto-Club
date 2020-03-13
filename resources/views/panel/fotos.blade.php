@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">naam</th>
                <th scope="col">categorie</th>
                <th scope="col">verwijder</th>
            </tr>
            </thead>
            <tbody>
                @foreach($form_multiple_upload as $foto )
            <tr>
                <th scope="row">{{$foto->id}}</th>
                <td>{{$foto->titel}}</td>
                <td>{{$foto->categorie}}</td>
                <td><button class="btn btn-danger"><a class="confirmation" href='#'>Delete</a></button></td>
            </tr>
            @endforeach
    </table>
    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
<script type="text/javascript">
    $('.confirmation').click(function(e){
        let result = confirm("Weet je zeker dat je de foto wilt verwijderen?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>
@endsection