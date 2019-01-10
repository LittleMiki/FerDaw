<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(to top, rgba(75,154,0,1) 0%,rgba(255,255,255,1) 100%);
                color: #636b6f;
                font-family: 'Arial', sans-serif;
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


            #titulo{
                background: white;

            }
            
            #sesion{
                font-size: 2vh;
                margin-top: 4vh;
            }
            #logo{
                border-bottom: 8px solid #00522A;
            }
            .cabeza{
                border-bottom: 7px solid #4B9A03;
            }
            #princi{
                margin-top: 4vh;
                color: #4B9A03;
            }
            .opcion{
                font-size: 2vh;
                width: 100%;
            }
            #menu{
                margin: auto;
                margin-top: 50px;
            }
            table *{
                padding: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div id="titulo" class="row cabeza">

                <img id="logo" src="images/logo.jpg">
                <h1 class="offset-4 col-5" id="princi">Planta Urea</h1>

                <form name="cerrarSesion" method="POST" action="cerrarSesion">
                    {!! csrf_field(); !!}
                    <input type="submit" id="sesion" class="btn btn-danger" name="cerrarSesion" value="Cerrar Sesión">
                </form>
            </div>
        </div>

        <div class="row">
            <div id="menu">
                <table>
                <form name="nuevo" method="POST" action="adDatosUrea">
                    {!! csrf_field(); !!}
                    <tr><td><input type="submit" name="nuevoUrea" class="opcion btn btn-success" value="Nuevo análisis"></td>
                </form>
                <form name="formulario" method="POST" action="soluciones">
                    {!! csrf_field(); !!}
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Urea"></td>
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Solución NGreen"></td></tr>
                <tr><td> <input type="submit" name="urea" class="opcion btn btn-success" value="Solución 32% (V-183)"></td>
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Solución 32% (V-182)"></td>
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Solución 32% (V-181)"></td></tr>
                <tr> <td><input type="submit" name="urea" class="opcion btn btn-success" value="Solución 25% (Tanque 1)"></td>
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Solución 25% (Tanque 2)"></td>
                    <td><input type="submit" name="urea" class="opcion btn btn-success" value="Torre de refrigeración"></td></tr>
                </form>
                </table>
            </div>
        </div>
    </body>
</html>
