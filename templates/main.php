<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= $title; ?> </title>
    </head>

    <body style="margin: 0px;">
        
        <nav style="background-color: gray;"> 
            <a href="index.php" style="text-decoration: none; color: #000000; padding-left: 3px;">
                <strong>Navbar</strong>
            </a> 
        </nav>
        
            <div style="margin: 3px;">
                <?php
                    # loads a specific view
                    require $view; 
                ?>
            </div>

    </body>
</html>