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
        $datos = \Session::get('tV183');
        ?>
        <div align="center">
            <h1>Solucion 32% V-183</h1>
            
            <table>
                <tr>
                    <td>Fecha      </td>
                    <td>N2 Total   </td>
                    <td>N2 Amidico   </td>
                    <td>N2 Nitrico   </td>
                    <td>N2 Amonico</td>
                    <td>Densidad</td>
                    <td>PH</td>
                    
                </tr>
                <?php
                foreach ($datos as $d) {
                    ?>
                    <tr>
                        <td><?php echo $d->fecha; ?> </td>
                        <td><?php echo $d->n2_total; ?> </td>
                        <td><?php echo $d->n2_amidico; ?> </td>
                        <td><?php echo $d->n2_nitrico; ?> </td>
                        <td><?php echo $d->n2_amonico; ?></td>
                        <td><?php echo $d->densidad; ?></td>
                        <td><?php echo $d->ph; ?></td>
                        
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
