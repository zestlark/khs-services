<?php
$videoshow_videolink = file_get_contents('../database/videoshow/videoshow.videolink.txt');
?>
<div class="container">

    <div class="sub-heading">video</div>
    <video id="videoshow_video_preview" preload="metadata" controls src="../<?php echo $videoshow_videolink; ?>"></video>
    <div class="gap"></div>
    <input id="videoshow_upload_img" accept="video/*" type="file">
    <div class="gap"></div>

    <div class="btn-box-global">
        <button id="videoshow_cancelfile" value="Upload">cancel</button>
        <button id="videoshow_savefile" value="Upload">submit</button>
    </div>
</div>