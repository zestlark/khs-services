<?php
if (isset($_GET['delete']) == true) {
    $name = $_GET['filename'];
    $url = "../../public/clients/" . $name;
    unlink($url);
    echo "true";
}
?>