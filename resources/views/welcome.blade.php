<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                    <div class="col-md-2 box">
                        <a href="{{route('listar.items')}}">Listar elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('mostrar.crear')}}">Crear elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('mostrar.editar',1)}}">Editar elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <p>Eliminar un elemento</p>
                    </div>
                    <div class="col-md-2 box">
                        <p>Eliminar todo</p>
                    </div>
            </div>
        </div>
       
    </body>
</html>
