<div class="container">
    <div class="sub-heading">developer message</div>
    <div class="message">
        <p>
            <?php echo file_get_contents('http://test-be01.000webhostapp.com/dev-msg/khs.txt'); ?>
        </p>
        <!-- <span><i class="ri-close-line"></i></span> -->
    </div>

    <br>

    <div class="sub-heading">upload</div>
    <div class="upload">
        <label for="select_file" id="labelforselectfile"><i class="ri-upload-cloud-2-line"></i>upload images to
            gallery</label>
        <input type="file" accept="image/*" id="select_file" multiple />

        <div id="preview"></div>

        <div class="btn-box">
            <button id="btn_cancelfile" value="Upload">cancel</button>
            <button id="btn_uploadfile" value="Upload">submit</button>
        </div>
        <br>
        <div id="progress_bar" style="display:none; ">
            <div id="progress_bar_process" role="progressbar" style="width:0%">0%</div>
        </div>

        <div id="uploaded_image"></div>
    </div>
</div>