<?php
if (isset($_GET['delete']) == true) {
    $name = $_GET['filename'];
    $url = "../../database/review/log/" . $name;
    unlink($url);
    echo "true";
}
?>