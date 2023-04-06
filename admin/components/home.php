<?php
$home_heading = file_get_contents('../database/home/home.heading.txt');
$home_heading_highlight = file_get_contents('../database/home/home.heading.highlight.txt');
$home_paragraph = file_get_contents('../database/home/home.paragraph.txt');
?>
<div class="container">
    <div class="sub-heading">heading</div>
    <input id="home_input_heading" type="text" value="<?php echo $home_heading; ?>">
    
    <div class="gap"></div>

    <div class="sub-heading">highlighted heading</div>
    <input id="home_input_highlight_heading" type="text" value="<?php echo $home_heading_highlight; ?>">
    
    <div class="gap"></div>

    <div class="sub-heading">paragraph</div>
    <textarea id="home_input_paragraph" type="text"><?php echo $home_paragraph; ?>
    </textarea>
    
    <div class="gap"></div>

    <div class="btn-box-global">
        <button id="home_cancelfile" value="Upload">cancel</button>
        <button id="home_savefile" value="Upload">submit</button>
    </div>
</div>