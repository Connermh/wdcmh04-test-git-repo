<!DOCTYPE html>
<html>
    <head>
        <title>Hello World!</title>
    </head>

    <body>
        <h1>Hello World!<br></h1>

        <h2>
            <?php
            /* I have no idea what other timezone to use because I am geographically challenged
               and frankly every single one I recognized was off by anywhere from 2-4 hours    */
            date_default_timezone_set("America/Resolute");
            echo date("h:i:s");
            ?>
        </h2>
    </body>


</html>
