<?php
$home_heading = file_get_contents('./database/home/home.heading.txt');
$home_heading_highlight = file_get_contents('./database/home/home.heading.highlight.txt');
$home_paragraph = file_get_contents('./database/home/home.paragraph.txt');

$about_paragraph = file_get_contents('./database/about/about.paragraph.txt');
$about_imglink = file_get_contents('./database/about/about.imglink.txt');

$videoshow_videolink = file_get_contents('./database/videoshow/videoshow.videolink.txt');

$services_paragraph = file_get_contents('./database/services/services.paragraph.txt');

$contact_address = file_get_contents('./database/contact/contact.address.txt');
$contact_email = file_get_contents('./database/contact/contact.email.txt');
$contact_mobile = file_get_contents('./database/contact/contact.mobile.txt');
$contact_paragraph = file_get_contents('./database/contact/contact.paragraph.txt');
$contact_social_instagram = file_get_contents('./database/contact/contact.social.instagram.txt');
$contact_social_facebook = file_get_contents('./database/contact/contact.social.facebook.txt');
$contact_social_twitter = file_get_contents('./database/contact/contact.social.twitter.txt');

$path = 'public/gallery';
$galleryimages = scandir($path);
$galleryimages = \array_diff(scandir($path), array('.', '..'));
$galleryimages_count = count($galleryimages) > 20 ? 20 : count($galleryimages);
$galleryimages = array_reverse($galleryimages);
?>