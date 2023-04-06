<?php
$reviewrawarray = scandir($reviewdatapah);
// $reviewrawarray = array_diff($reviewrawarray, array('.', '..'));
array_splice($reviewrawarray, 1, 1);
array_splice($reviewrawarray, 0, 1);
// print_r($reviewrawarray);

$reviewdata = [];
$reviews = array();

function addtoarray($rating, $title, $description, $by, $email, $reviewfilename)
{
    global $reviews;
    array_push(
        $reviews,
        (object) [
            'rating' => $rating,
            'title' => $title,
            'description' => $description,
            'by' => $by,
            'email' => $email,
            'reviewfilename' => $reviewfilename
        ]
    );
}

for ($i = 0; $i < count($reviewrawarray); $i++) {
    global $reviewdata;
    $filereviewdata = file($reviewdatapah . $reviewrawarray[$i], FILE_IGNORE_NEW_LINES);
    for ($j = 0; $j < count($filereviewdata); $j++) {
        array_push($reviewdata, $filereviewdata[$j]);
    }
}

$filenameloop = 0;
for ($i = 0; $i < count($reviewdata); $i++) {
    addtoarray($reviewdata[$i], $reviewdata[$i + 1], $reviewdata[$i + 2], $reviewdata[$i + 3], $reviewdata[$i + 4], $reviewrawarray[$filenameloop]);
    $i++;
    $i++;
    $i++;
    $i++;
    $filenameloop++;
}

$reviews = array_reverse($reviews);
?>