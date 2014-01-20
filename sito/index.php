<?php
/*
 * Header of page
 */
/**
 * Title of page
 */
$TITLE = ""; //Titolo
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="Style/Style.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title><?php echo $TITLE; ?></title>
    </head>
    <body>
        <div id="contentet">

            <div class="header">
                <?php
                include './HTML/HEADER.html';
                ?>
            </div>

            <div id="Main">
                
            </div>

            <div id="Foot">
                
            </div>
        </div>
    </body>
</html>
