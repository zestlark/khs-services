<?php
if (isset($_POST['stars'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $heading = $_POST['heading'];
    $message = $_POST['message'];
    $stars = $_POST['stars'];

    $data = $stars . PHP_EOL . $heading . PHP_EOL . $message . PHP_EOL . $name . PHP_EOL . $email . PHP_EOL;
    $reviewfile = fopen("../database/review/log/" . uniqid() . ".txt", "w") or die("Unable to open file!");
    fwrite($reviewfile, $data);
    fclose($reviewfile);

    echo 'true';
}
?>