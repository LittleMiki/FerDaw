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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            #login{
                font-size: 4em;
                border: thin solid #03512A; 
                background: linear-gradient(to bottom, rgba(75,154,0,1) 0%,rgba(3,79,41,1) 100%);

            }

            .btn-success{
                font-size: 4vh;
                background-color: #03512A;

            }
            #form{
                padding: 70px;
                background-color: white;
                border: thin solid #03512A;
            }
          
            #todo{
                width: auto;
                background-color: white;
            }
            #pass, #em{
                height: 80px;
            }



            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <?php
        if (isset($msg)) {
            ?>
            <script>
    alert("<?php echo $msg ?>");
            </script>
            <?php
        }
        ?>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="login">
            <div id="todo">
                <div>
                <img src="images/logo.jpg">
                </div>
                <div id="form">
                    <form method="POST" action="login">
                        {!! csrf_field(); !!}
                        <div class="form-group" >
                            <label for="em">Email</label>
                            <input type="text" class="form-control" id="em" name="em" aria-describedby="emailHelp" placeholder="Introduce email">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" placeholder="******">
                        </div>
                        <div style="margin-top: 10px" class=" offset-2 col-2">
                            <input class="btn-success" type="submit" name="btn" id="btn" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
