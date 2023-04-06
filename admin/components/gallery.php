<?php
$path = '../public/gallery/';
$galleryimages = scandir($path);
$galleryimages = \array_diff(scandir($path), array('.', '..'));
$galleryimages_count = count($galleryimages);
$galleryimages = array_reverse($galleryimages);

function strigToBinary($string)
{
    $characters = str_split($string);

    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }

    return implode('', $binary);
}
?>

<div class="container">
    <div class="sub-heading">photos</div>

    <div class="gap"></div>

    <div class="gallery-img-box">
        <?php
        for ($i = 0; $i < $galleryimages_count; $i++) {
            $binary = strigToBinary($galleryimages[$i]);
            echo '
          <div class="box" id="' . $binary . '">
            <img src="../public/gallery/' . $galleryimages[$i] . '" alt="">
            <div class="gallery-img-box-btn">
                <span onclick="gallerydelete(\'' . $galleryimages[$i] . '\')" class="delete"><i class="ri-delete-bin-6-line"></i></span>
                <span onclick="getvalidimgurl(\'' . $galleryimages[$i] . '\')"><i class="ri-file-copy-line"></i></span>
                <span onclick="galleryopenlink(\'' . $galleryimages[$i] . '\')"><i class="ri-external-link-line"></i></span>
            </div>
        </div>
          ';
        }
        ?>
    </div>
</div>