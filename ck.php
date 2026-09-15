<?php
header("Content-type:text/html;charset=utf-8");
$dir = $_REQUEST['dir'];
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
                echo $file . "<br>";
            }
        }
        closedir($dh);
    }
} else {
    echo "Ä¿Â¼²»´æÔÚ¡£";
}
?>