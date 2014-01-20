<?php
/**
 * Funtion for detect language from Browser.
 */



    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang) {

        case "it":
            //echo "PAGE IT";
            include("./Lang/ITA.php");
            break;
        default:
            //echo "PAGE EN - Setting Default";
            include("index_en.php"); //include EN in all other cases of different lang detection
            break;
    }


?>