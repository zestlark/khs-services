<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- aos library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Gallery</title>
</head>

<body>
    <div class="container">
        <div id="gallery" class="webpage_section">
            <div class="container">
                <div class="heading">Gallery</div>
                <div id="photos">
                    <?php
                    $path = '../public/gallery';
                    $galleryimages = scandir($path);
                    $galleryimages = \array_diff(scandir($path), array('.', '..'));
                    $galleryimages_count = count($galleryimages);
                    $galleryimages = array_reverse($galleryimages);

                    for ($i = 0; $i < $galleryimages_count; $i++) {
                        echo '<img onclick="galleryimageopen(\'../public/gallery/' . $galleryimages[$i] . '\')" src="../public/gallery/' . $galleryimages[$i] . '" alt="">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function galleryimageopen(data) {
        window.open(data, '_blank');
    }
</script>
</html>