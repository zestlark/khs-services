<?php
if (isset($_POST['paragraph'])) {

    $paragraph = $_POST['paragraph'];

    $servicesfile1 = fopen("../../database/services/services.paragraph.txt", "w") or die("Unable to open file!");
    fwrite($servicesfile1, $paragraph);
    fclose($servicesfile1);

    echo 'true';
}
?>