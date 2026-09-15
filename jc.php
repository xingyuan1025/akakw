<?php
$dir = $_REQUEST['dir'];
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $files = array();
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
                $files[] = $file;
            }
        }
        closedir($dh);
        if (count($files) > 0) {
            echo "有";
        } else {
            echo "没有";
        }
    }
} else {
    echo "不存在";
}
?>