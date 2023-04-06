<?php
function compressImage($source, $destination, $quality)
{
    // Get image info 
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Create a new image from file 
    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            imagepng($image, $destination, $quality);
            break;
        default:
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
    }


    // Return compressed image 
    return $destination;
}


// File upload path 
$uploadPath = "uploads/";

// If file upload form is submitted 
$status = $statusMsg = '';
if (isset($_FILES['images'])) {
    $status = 'error';
    if (!empty($_FILES["images"]["name"])) {

        for ($count = 0; $count < count($_FILES['images']['name']); $count++) {
            $fileName = basename($_FILES["images"]["name"][$count]);
            $imageUploadPath = $uploadPath . $fileName;
            $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

            $imageTemp = $_FILES["images"]["tmp_name"][$count];
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 55);

            if ($compressedImage) {
                $status = 'success';
                move_uploaded_file($_FILES['images']['tmp_name'][$count], '../../public/gallery/' . $fileName);
                $statusMsg = "Image compressed successfully.";
            } else {
                $statusMsg = "Image compress failed!";
            }
        }

    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
}

// Display status message 
echo $statusMsg;

?>