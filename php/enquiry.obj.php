<?php
$enquirydatapah = "../database/enquiry/";
$enquiryrawarray = scandir($enquirydatapah);
// $enquiryrawarray = array_diff($enquiryrawarray, array('.', '..'));
array_splice($enquiryrawarray, 1, 1);
array_splice($enquiryrawarray, 0, 1);
// print_r($enquiryrawarray);

$enquirydata = [];
$enquirys = array();

function enaddtoarray($name, $service, $number, $email, $date)
{
    global $enquirys;
    array_push(
        $enquirys,
        (object) [
            'name' => $name,
            'service' => $service,
            'number' => $number,
            'email' => $email,
            'date' => $date
        ]
    );
}

for ($i = 0; $i < count($enquiryrawarray); $i++) {
    global $enquirydata;
    $fileenquirydata = file($enquirydatapah . $enquiryrawarray[$i], FILE_IGNORE_NEW_LINES);
    for ($j = 0; $j < count($fileenquirydata); $j++) {
        array_push($enquirydata, $fileenquirydata[$j]);
    }
}

for ($i = 0; $i < count($enquirydata); $i++) {
    enaddtoarray($enquirydata[$i], $enquirydata[$i + 1], $enquirydata[$i + 2], $enquirydata[$i + 3], $enquirydata[$i + 4]);
    $i++;
    $i++;
    $i++;
    $i++;
}

$enquirys = array_reverse($enquirys);
?>