<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mis libros</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .card{
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
                padding: 12px;
                margin-bottom: 12px
            }
        </style>
    </head>
    <body class="antialiased">
        
        <h2>Nuevo libro</h2>
        <form action="{{route("nuevo_libro")}}" method="post">
            {{csrf_field()}}
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
            <input type="text" name="autor" class="form-control" id="autor" placeholder="Autor">
            <input type="number" name="fecha" class="form-control" id="fecha" placeholder="Fecha">
            <button class="btn btn-primary" type="submit">Añadir</button>
        </form>


        <h2>Mi lista de libros</h2>

        @foreach ($micolecciondelibros as $libro)
            <div class="card">
                <p>{{$libro->titulo}}</p>
                <p>{{$libro->autor}}</p>
                <p>{{$libro->fecha}}</p>        
            </div>    

        @endforeach

    </body>
</html>
