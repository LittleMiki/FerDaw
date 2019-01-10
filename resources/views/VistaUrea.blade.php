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

        </style>

    </head>

    <?php
    $datos = \Session::get('tUrea');
    ?>
    <div class="container-fluid">
        <div id="titulo" class="row cabeza">

            <img id="logo" src="images/logo.jpg">
            <h1 class="offset-4 col-5" id="princi">Urea</h1>

            <form name="cerrarSesion" method="POST" action="cerrarSesion">
                {!! csrf_field(); !!}
                <input type="submit" id="sesion" class="btn btn-danger" name="cerrarSesion" value="Cerrar Sesión">
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <td>Fecha      </td>
                <td>N2 Total   </td>
                <td>Humedad   </td>
                <td>Biurret   </td>
                <td>Granulometria</td>
            </tr>
            <?php
            foreach ($datos as $d) {
                ?>
                <tr>
                    <td><?php echo $d->fecha; ?> </td>
                    <td><?php echo $d->n2Total; ?> </td>
                    <td><?php echo $d->humedad; ?> </td>
                    <td><?php echo $d->biuret; ?> </td>
                    <td><?php echo $d->granulometria; ?></td>
                </tr>       
                <?php
            }
            ?>
        </table>

        <form name="cerrarSesion" method="POST" action="Volver">
            {!! csrf_field(); !!}
            <input type="submit" name="volver" class="btn btn-light" value="volver">
        </form>
    </div>

</html>
