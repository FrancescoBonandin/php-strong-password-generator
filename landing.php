<?php

    session_start()

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>landing</title>
    </head>

    <body>

        <div>

            <h3>
                la tua password è:
            </h3>

            <?php
                echo $_SESSION['password']
            ?>
            
        </div>

    </body>

</html>