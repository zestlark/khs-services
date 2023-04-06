<?php

if (isset($_FILES['images'])) {
    foreach (new DirectoryIterator('../../public/videoshow/') as $fileInfo) {
        if (!$fileInfo->isDot()) {
            unlink($fileInfo->getPathname());
        }
    }
    for ($count = 0; $count < count($_FILES['images']['name']); $count++) {
        $extension = pathinfo($_FILES['images']['name'][$count], PATHINFO_EXTENSION);
        $new_name = uniqid() . '.' . $extension;
        $filename = '../../public/videoshow/' . $new_name;
        move_uploaded_file($_FILES['images']['tmp_name'][$count], $filename);
        // compressImage($filename, $filename, 60);
    }
    $imagelink = './public/videoshow/' . $new_name;
}

$videoshowfile1 = fopen("../../database/videoshow/videoshow.videolink.txt", "w") or die("Unable to open file!");
fwrite($videoshowfile1, $imagelink);
fclose($videoshowfile1);

echo 'true';
?>