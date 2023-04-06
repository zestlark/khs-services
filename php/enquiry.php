<?php
if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $service = $_POST['service'];
    $number = $_POST['number'];
    $mydate = getdate(date("U"));
    $cdate = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

    $data = $name . PHP_EOL . $service . PHP_EOL . $number . PHP_EOL . $mail . PHP_EOL . $cdate . PHP_EOL;
    $reviewfile = fopen("../database/enquiry/" . uniqid() . ".txt", "w") or die("Unable to open file!");
    fwrite($reviewfile, $data);
    fclose($reviewfile);

    echo 'true';
}
?>