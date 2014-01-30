<?php
/*
 * Header of page
 */

include_once './HTML/LanguageDetect.php'; //Script for get language from browser default:English
/**
 * Title of page
 */
$TITLE = $LANGUAGE_TITLE_PROGETTO3; //Title
/**
 * Meta description of page this variable set Snippet in google.com
 */
$METATAG_Description = $LANGUAGE_METADESC_PROJECT3;
/**
 * Other element that must to be add to the head of then webpage.
 */
$HEAD = '<link href="./Style/progetto.css" rel="stylesheet" type="text/css">';
?>
<!DOCTYPE html>
<html>

    <?php include_once './HTML/Head.php'; ?>

    <body>
        <div id="contentet">

            <div class="header">
                <img id="Logo" src="./IMG/logo.png"/>

                <?php include_once './HTML/menu.php'; ?>

            </div>

            <div id="Main">
                <?php include_once './Views/proj_3.php'; ?>
            </div>


        </div>
        <?php include './HTML/foot.html'; ?>
    </body>
</html>
