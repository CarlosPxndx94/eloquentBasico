<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel Eloquent Basico</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<style type="text/css">
    body{
        margin-top: 3em;
    }
</style>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">Eloquent Basico</a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Consultas Eloquent<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('all') }}" class="">
                                Todos los USuarios (all)
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('get', 'f') }}" class="">
                                Lista de Usuarios Femenina (get)
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('get', 'm') }}" class="">
                                Lista de Usuarios Masculina (get)
                            </a>
                        </li>
                    </ul>
                </li>               
            </ul>
        </div>
    </nav>
    
     @yield('content')
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>