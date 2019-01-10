<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Urea</h1>
        <form name="cerrarSesion" method="POST" action="cerrarSesion">
            {!! csrf_field(); !!}
            <input type="submit" name="cerrarSesion" value="Cerrar Sesión">
        </form>

        <form name="nuevo" method="POST" action="adDatosUrea">
            {!! csrf_field(); !!}
            <input type="submit" name="nuevoUrea" value="Añadir datos Urea">
        </form>
        <form name="formulario" method="POST" action="soluciones">
            {!! csrf_field(); !!}
            <input type="submit" name="urea" value="Urea"></br>
            <input type="submit" name="urea" value="Solución NGreen"></br>
            <input type="submit" name="urea" value="Solución 32% (V-183)"></br>
            <input type="submit" name="urea" value="Solución 32% (V-182)"></br>
            <input type="submit" name="urea" value="Solución 32% (V-181)"></br>
            <input type="submit" name="urea" value="Solución 25% (Tanque 1)"></br>
            <input type="submit" name="urea" value="Solución 25% (Tanque 2)"></br>
            <input type="submit" name="urea" value="Torre de refrigeración"></br>
        </form>
    </body>
</html>
