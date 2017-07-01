<!DOCTYPE html>
<html lang="es">
<head>
    <title>Proveedores CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}"/>

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Angular and Angular material-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.4/angular-material.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::to('proveedores') }}">Proveedores</a></li>
                    <li><a href="{{ URL::to('categorias') }}">Categorias</a></li>
                    <li><a href="{{ URL::to('productos') }}">Productos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="storage">
        <table class="table table-striped task-table">
                @yield('content')
        </table>
    </div>

</body>
</html>