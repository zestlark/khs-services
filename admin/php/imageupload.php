<?php
//upload.php
if (isset($_FILES['images'])) {
    for ($count = 0; $count < count($_FILES['images']['name']); $count++) {
        $extension = pathinfo($_FILES['images']['name'][$count], PATHINFO_EXTENSION);
        $new_name = uniqid() . '.' . $extension;
        $filename = '../../public/gallery/' . $new_name;
        move_uploaded_file($_FILES['images']['tmp_name'][$count], $filename);
        // compressImage($filename, $filename, 60);
    }
    echo 'success';
}

// function compressImage($source, $destination, $quality){
//     $imgInfo = getimagesize($source);
//     $mime = $imgInfo['mime'];
//     switch ($mime) {
//         case 'image/jpeg':
//             $image = imagecreatefromjpeg($source);
//             imagejpeg($image, $destination, $quality);
//             break;
//         case 'image/png':
//             $image = imagecreatefrompng($source);
//             imagepng($image, $destination, $quality);
//             break;
//         default:
//             $image = imagecreatefromjpeg($source);
//             imagejpeg($image, $destination, $quality);
//     } 
//     return $destination;
// }
?>