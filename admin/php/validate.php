<?php
if (isset($_POST['username'])) {

    $password = $_POST['password'];
    $username = $_POST['username'];
    $mainpass = file_get_contents('../../database/admin/password.txt');
    if ($username == "khs" and $password == $mainpass) {
        echo 'true';
    }
}
?>