<!doctype html>
<html lang="en">
<head class="head">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootadmin.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/642ec4bc32.js" crossorigin="anonymous"></script>

    <title>panel</title>
    <style>
        .margin {
            color: white;
            margin-left: 10px;
        }
    </style>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <!-- {{-- <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a> --}} -->
    <a class="navbar-brand" href="#">Beheerders Paneel</a>

    <div class="navbar-collapse collapse">
        <!-- {{-- <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul> --}} -->
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li><a href="#" class="margin">Home</a></li>
            <li><a href="{{ url('/panel/users') }}" class="margin">Gebruikers</a></li>
            <li><a href="#" class="margin">Pagina's</a></li>
            <li><a href="#" class="margin">Instellingen</a></li>
        </ul>
    </div>
<!-- 
    {{-- <div class="content p-4">
        <h2 class="mb-4">Blank/Starter</h2>
        {{-- <div class="card mb-4">
            <div class="card-body">
            </div> --}}
        {{-- </div>
    </div> --}} -->
</div>
</body>
</html>