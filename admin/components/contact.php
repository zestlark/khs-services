<?php
$contact_address = file_get_contents('../database/contact/contact.address.txt');
$contact_email = file_get_contents('../database/contact/contact.email.txt');
$contact_paragraph = file_get_contents('../database/contact/contact.paragraph.txt');
$contact_phone = file_get_contents('../database/contact/contact.mobile.txt');
$contact_social_instagram = file_get_contents('../database/contact/contact.social.instagram.txt');
$contact_social_facebook = file_get_contents('../database/contact/contact.social.facebook.txt');
$contact_social_twitter = file_get_contents('../database/contact/contact.social.twitter.txt');
?>

<div class="container">
    <div class="sub-heading">paragraph</div>
    <textarea id="contact_input_paragraph" type="text"><?php echo $contact_paragraph; ?></textarea>

    <div class="gap"></div>
    <div class="sub-heading">email</div>
    <input id="contact_input_email" type="text" value="<?php echo $contact_email; ?>">

    <div class="gap"></div>

    <div class="sub-heading">phone</div>
    <input id="contact_input_phone" type="text" value="<?php echo $contact_phone; ?>">

    <div class="gap"></div>

    <div class="sub-heading">Address</div>
    <input id="contact_input_address" type="text" value="<?php echo $contact_address; ?>">


    <div class="gap"></div>

    <div class="sub-heading">social</div>
    <small>instagram</small>
    <input id="contact_input_social_instagram" type="text" value="<?php echo $contact_social_instagram; ?>">
    <small>facebook</small>
    <input id="contact_input_social_facebook" type="text" value="<?php echo $contact_social_facebook; ?>">
    <small>twitter</small>
    <input id="contact_input_social_twitter" type="text" value="<?php echo $contact_social_twitter; ?>">


    <div class="gap"></div>

    <div class="btn-box-global">
        <button id="contact_cancelfile" value="Upload">cancel</button>
        <button id="contact_savefile" value="Upload">submit</button>
    </div>
</div>