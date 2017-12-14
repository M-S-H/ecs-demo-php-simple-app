<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                margin-top: 40px;
                background-color: #333;
                background-image: url('https://avatars0.githubusercontent.com/u/6133251?s=460&v=4');
                background-repeat: repeat;
            }

            body h2 {
                color: blue;
                transform-origin: top left;
                animation: crazy 0.25s ease-in-out infinite;
            }

            @keyframes crazy {
                0% {
                    opacity: 1.0;
                    transform: scale(3.0);
                }
                50% {
                    opacity: 0.0;
                    transform: scale(0.5);
                }
            }

            h3 b {
                text-transform: uppercase;
                animation: colorchange 0.5s linear infinite;
            }

            @keyframes colorchange {
                0% {
                    color: blue;
                }
                20% {
                    color: green;
                }
                40% {
                    color: yellow;
                }
                60% {
                    color: orange;
                }
                80% {
                    color: red;
                }
                100% {
                    color: purple;
                }
            }
        </style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App - BOOM</h1>
                <h2>Congratulations</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>
                <h3>AWS is built by <b>wizards</b>.
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
