<?php
if (isset($_POST['paragraph'])) {

    $paragraph = $_POST['paragraph'];
    $imagelink = $_POST['imagelink'];

    if (isset($_FILES['images'])) {
        foreach (new DirectoryIterator('../../public/about/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                unlink($fileInfo->getPathname());
            }
        }
        for ($count = 0; $count < count($_FILES['images']['name']); $count++) {
            $extension = pathinfo($_FILES['images']['name'][$count], PATHINFO_EXTENSION);
            $new_name = uniqid() . '.' . $extension;
            $filename = '../../public/about/' . $new_name;
            move_uploaded_file($_FILES['images']['tmp_name'][$count], $filename);
            // compressImage($filename, $filename, 60);
        }
        $imagelink = './public/about/' . $new_name;
    }

    $aboutfile1 = fopen("../../database/about/about.paragraph.txt", "w") or die("Unable to open file!");
    fwrite($aboutfile1, $paragraph);
    fclose($aboutfile1);

    $aboutfile2 = fopen("../../database/about/about.imglink.txt", "w") or die("Unable to open file!");
    fwrite($aboutfile2, $imagelink);
    fclose($aboutfile2);


    echo 'true';
}
?>