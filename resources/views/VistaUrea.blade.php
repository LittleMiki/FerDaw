<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <?php
        $datos = \Session::get('tUrea');
        ?>
        <div align="center">
            <h1>Urea</h1>
            
            <table>
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
                <input type="submit" name="volver" value="volver"
            </form>
        </div>

    </body>
</html>
