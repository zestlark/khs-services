import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

about_cancelfile.onclick = function () {
    window.location.reload();
}

about_savefile.onclick = function () {

    if (confirm('data of the about page will be changed')) {
        doc.preload('on')
        let aboutformData = new FormData();
        aboutformData.append('imagelink', about_input_imagelink.value);
        aboutformData.append('paragraph', about_input_paragraph.value);
        if (doc.id('about_upload_img').files.length > 0) {
            aboutformData.append("images[]", doc.id('about_upload_img').files[0]);
        }

        fetch('./php/about.datasave.php', {
            method: 'post',
            body: aboutformData
        }).then((response) => response.text())
            .then((data) => {
                if (data == 'true') {
                    window.location.reload()
                }
            })
    }
}

//upload image
about_upload_img.onchange = evt => {
    about_upload_img.files
    for (let i = 0; i < about_upload_img.files.length; i++) {
        cl(about_upload_img.files[i])
        let file = about_upload_img.files[i];
        let reader = new FileReader();
        reader.onload = function (e) {
            about_img_preview.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}
