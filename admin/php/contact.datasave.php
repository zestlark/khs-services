<?php
if (isset($_POST['paragraph'])) {

    $email = $_POST['email'];
    $paragraph = $_POST['paragraph'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $social_instagram = $_POST['social_instagram'];
    $social_facebook = $_POST['social_facebook'];
    $social_twitter = $_POST['social_twitter'];


    $file1 = fopen("../../database/contact/contact.email.txt", "w") or die("Unable to open file!");
    fwrite($file1, $email);
    fclose($file1);

    $file2 = fopen("../../database/contact/contact.paragraph.txt", "w") or die("Unable to open file!");
    fwrite($file2, $paragraph);
    fclose($file2);

    $file3 = fopen("../../database/contact/contact.mobile.txt", "w") or die("Unable to open file!");
    fwrite($file3, $phone);
    fclose($file3);

    $file4 = fopen("../../database/contact/contact.address.txt", "w") or die("Unable to open file!");
    fwrite($file4, $address);
    fclose($file4);

    $file5 = fopen("../../database/contact/contact.social.instagram.txt", "w") or die("Unable to open file!");
    fwrite($file5, $social_instagram);
    fclose($file5);

    $file6 = fopen("../../database/contact/contact.social.facebook.txt", "w") or die("Unable to open file!");
    fwrite($file6, $social_facebook);
    fclose($file6);

    $file7 = fopen("../../database/contact/contact.social.twitter.txt", "w") or die("Unable to open file!");
    fwrite($file7, $social_twitter);
    fclose($file7);

    echo 'true';
}
?>