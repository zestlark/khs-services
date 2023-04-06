<?php
if (isset($_POST['newpass'])) {
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $currentpass = file_get_contents('../../database/admin/password.txt');
    if ($currentpass == $oldpass) {
        $file = fopen('../../database/admin/password.txt', 'w');
        fwrite($file, $newpass);
        fclose($file);
        echo 'true';
    } else {
        echo 'false';
        echo $currentpass;
    }
}
?>