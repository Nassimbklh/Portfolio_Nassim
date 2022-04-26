<?php
function replace_vars($str, $vars)
{
    foreach ($vars as $var => $value){
        $str = str_replace("%$var%", $value, $str);
    }
return $str;
}

?>