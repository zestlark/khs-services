<?php
$about_paragraph = file_get_contents('../database/about/about.paragraph.txt');
$about_imglink = file_get_contents('../database/about/about.imglink.txt');

$regex = "((http?|ftp|https?)\:\/\/)?"; // SCHEME 
$regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
$regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
$regex .= "(\:[0-9]{2,5})?"; // Port 
$regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
$regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
$regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 

if (!preg_match("/^$regex$/i", $about_imglink)) // `i` flag for case-insensitive
{
    $about_imglink = '../' . $about_imglink;
}
?>
<div class="container">


    <div class="sub-heading">paragraph</div>
    <textarea id="about_input_paragraph" type="text"><?php echo $about_paragraph; ?>
     </textarea>

    <div class="gap"></div>

    <div class="sub-heading">image link</div>
    <input id="about_input_imagelink" type="text" value="<?php echo $about_imglink; ?>">
    <div class="gap"></div>

    <h4>or</h4>
    <div class="gap"></div>
    <input id="about_upload_img" accept="image/*" type="file">
    <div class="gap"></div>

    <img id="about_img_preview" src="<?php echo $about_imglink; ?>" alt="">

    <div class="btn-box-global">
        <button id="about_cancelfile" value="Upload">cancel</button>
        <button id="about_savefile" value="Upload">submit</button>
    </div>
</div>