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
        $datos = \Session::get('tNgreen');
        ?>
        <div align="center">
            <h1>NGREEN</h1>
            
            <table>
                <tr>
                    <td>Fecha      </td>
                    <td>SO 3   </td>
                    <td>MGO   </td>
                    <td>N2_Total   </td>
                    <td>N2_Amidico</td>
                    <td>N2_Nitrico</td>
                    <td>N2_Amonico</td>
                    <td>Densidad</td>
                    <td>PH</td>
                </tr>
                <?php
                foreach ($datos as $d) {
                    ?>
                    <tr>
                        <td><?php echo $d->fecha; ?> </td>
                        <td><?php echo $d->so3; ?> </td>
                        <td><?php echo $d->mgo; ?> </td>
                        <td><?php echo $d->n2_total; ?> </td>
                        <td><?php echo $d->n2_amidico; ?></td>
                        <td><?php echo $d->n2_nitrico; ?></td>
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
