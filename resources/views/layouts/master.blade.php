<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="public\bootstrap\css\bootstrap.min.css"> -->
    <link rel="stylesheet" href="public\bootstrap\css\formcss.css">
    <link rel="stylesheet" href="public\bootstrap\css\custom.css">
    
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/custom.css') }}" />
    <link rel="stylesheet" href="resources\css\custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>
<body>

<div class="container">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">COVID DATA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-end">
                        <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About US</a>
                        </li>
                        <!-- <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li> -->
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Admin Login</a>
                        </li> --> 
                    </ul>
                </div>
            </div>
        </nav>
</div>


<!-- end hero -->
<div class="container">
    <div class=" mt-3 col-12">
        @isset($message_success)
            <div class="container">
                <div class="row">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {!! $message_success!!}
                    </div>
                </div>
            </div>
        @endisset

        @isset($message_warning)
            <div class="container">
                <div class="row">
                    <div class="alert alert-warning" role="alert">
                            {!! $message_warning !!}
                    </div>
                </div>
            </div>
        @endisset
    </div>
</div>
<div class="container ">
    <div class="row">
        @yield('content')
    </div>
</div>
</div>
<!-- <div class="container">
<div class="row ">
        <div class="card mt-3">
        <div class="row">
                <div class="card-header text-center footer">
                    All rights reserved &copy 2020
                </div>
            </div>
        </div>
    </div>
</div> -->

    
    <!-- <script src="public\bootstrap\js\jquery.js"></script>
    <script src="public\bootstrap\js\bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="public\bootstrap\js\formjquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
