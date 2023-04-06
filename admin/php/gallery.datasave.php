<?php
if (isset($_GET['delete']) == true) {
    $name = $_GET['filename'];
    $url = "../../public/gallery/" . $name;
    unlink($url);
    echo "true";
}
?>