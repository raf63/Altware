<?php
/*
 * Header of page
 */
include_once './HTML/LanguageDetect.php';
/**
 * Title of page
 */
$TITLE = ""; //Titolo



?>
<!DOCTYPE html>
<html>
    <head>
        <link href="Style/Style.css" rel="stylesheet" type="text/css">
        <link href="Style/Menu.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title><?php echo $TITLE; ?></title>
    </head>
    <body>
        <div id="contentet">

            <div class="header">
                <img id="Logo" src="./IMG/logo.png"/>
 
                <?php include_once './HTML/menu.php';?>

            </div>

            <div id="Main">
                
                
            </div>

            <div id="Foot">
                <img src="./IMG/footbar.png"/> 
                <?php echo $LANGUAGE_GENERAL_FOOT;?>     
            </div>
        </div>
    </body>
</html>
