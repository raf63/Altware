<?php
/*
 * Header of page
 */
include_once './HTML/LanguageDetect.php';
/**
 * Title of page
 */
$TITLE = $LANGUAGE_TITLE_INDEX; //Title
$HEAD='<link href="./Style/index.css" rel="stylesheet" type="text/css">'; //Other element that must be add in the head of the Document.
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
            <?php include_once './Views/index.php';?>
            </div>


        </div>
         <?php        include './HTML/foot.html';?>
    </body>
</html>
