<!DOCTYPE html>
<html>

    <head>
        <title>@section('title') Bike Shop @show</title>
        @section('css')
            <link rel="stylesheet" type="text/css" href="vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/black.css">
        @show
    </head>

    <body>
         
        <nav class="navbar navbar-default">
            <div class="row">
                <div class="col-md-10">
                    <h3><center><strong>Motor Bikes</strong></center></h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('bike.index') }}" class="btn btn-sm btn-success pull-right">Login</a>
                </div>
            </div>
        </nav>  

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

    @section('js')
    @show
    </body>
</html>
