<?php
if (isset($_POST['heading'])) {

    $heading = $_POST['heading'];
    $highlighted_heading = $_POST['highlighted_heading'];
    $paragraph = $_POST['paragraph'];

    $file1 = fopen("../../database/home/home.heading.txt", "w") or die("Unable to open file!");
    fwrite($file1, $heading);
    fclose($file1);

    $file2 = fopen("../../database/home/home.heading.highlight.txt", "w") or die("Unable to open file!");
    fwrite($file2, $highlighted_heading);
    fclose($file2);

    $file3 = fopen("../../database/home/home.paragraph.txt", "w") or die("Unable to open file!");
    fwrite($file3, $paragraph);
    fclose($file3);

    echo 'true';
}
?>