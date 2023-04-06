import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

videoshow_cancelfile.onclick = function () {
    window.location.reload();
}

videoshow_savefile.onclick = function () {

    if (confirm('data of the videoshow page will be changed')) {
        doc.preload('on')
        let videoshowformData = new FormData();
        videoshowformData.append("images[]", doc.id('videoshow_upload_img').files[0]);

        fetch('./php/videoshow.datasave.php', {
            method: 'post',
            body: videoshowformData
        }).then((response) => response.text())
            .then((data) => {
                if (data == 'true') {
                    window.location.reload()
                }
            })
    }
}

//upload image
videoshow_upload_img.onchange = evt => {
    videoshow_upload_img.files
    for (let i = 0; i < videoshow_upload_img.files.length; i++) {
        cl(videoshow_upload_img.files[i])
        let file = videoshow_upload_img.files[i];
        let reader = new FileReader();
        reader.onload = function (e) {
            videoshow_video_preview.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}
