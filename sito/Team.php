<?php
/*
 * Header of page
 */
include_once './HTML/LanguageDetect.php';
/**
 * Title of page
 */
$TITLE = $LANGUAGE_TITLE_INDEX;
/**
 * Meta description of page this variable set Snippet in google.com
 */
$METATAG_Description=$LANGUAGE_METADESC_INDEX;
/**
 * Other element that must to be add to the head of then webpage.
 */
$HEAD  = '        <link href="Style/Team.css" rel="stylesheet" type="text/css"><br>';
?>
<!DOCTYPE html>
<html>

    <?php    include_once './HTML/Head.php';?>
    
    <body>
        <div id="contentet">

            <div class="header">
                <img id="Logo" src="./IMG/logo.png"/>

<?php include_once './HTML/menu.php'; ?>

            </div>

           
            <div id="Main">
              <!-- MAin part -->
                <?php include_once './Views/Team.php';?>
                
            </div>





        </div>
         <?php        include './Views/Shered/foot.html';?>
    </body>
</html>
