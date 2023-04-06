<?php
$services_paragraph = file_get_contents('../database/services/services.paragraph.txt');
?>
<div class="container">


    <div class="sub-heading">paragraph</div>
    <textarea id="services_input_paragraph" type="text"><?php echo $services_paragraph; ?>
     </textarea>


    <div class="btn-box-global">
        <button id="services_cancelfile" value="Upload">cancel</button>
        <button id="services_savefile" value="Upload">submit</button>
    </div>
</div>