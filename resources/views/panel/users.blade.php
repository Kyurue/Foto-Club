@extends('layouts.dashboard')
@section('content')
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gebruikers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <tbody class="table">
                            <thead class="text-primary">
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>rol</th>
                                <th>bewerk</th>
                                <th>verwijder</th>
                            </thead>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection