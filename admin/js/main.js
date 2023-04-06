import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

select_file.onchange = evt => {
    select_file.files
    for (let i = 0; i < select_file.files.length; i++) {
        cl(select_file.files[i])
        let file = select_file.files[i];
        let reader = new FileReader();
        reader.onload = function (e) {
            let img = document.createElement("IMG");
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }

    if (select_file.files.length > 0) {
        doc.id('btn_uploadfile').style.display = "block";
        doc.id('btn_cancelfile').style.display = "block";
        doc.id('labelforselectfile').style.display = "none";
    } else {
        doc.id('btn_uploadfile').style.display = "none";
        doc.id('btn_cancelfile').style.display = "none";
        doc.id('labelforselectfile').style.display = "flex";
    }
}

doc.id('btn_cancelfile').onclick = function () {
    doc.id('preview').innerHTML = '';
    doc.id('select_file').value = '';
    doc.id('btn_uploadfile').style.display = "none";
    doc.id('btn_cancelfile').style.display = "none";
    doc.id('labelforselectfile').style.display = "flex";
}

//photo submit
btn_uploadfile.onclick = function (event) {
    let form_data = new FormData();
    let image_number = 1;
    let error = '';
    for (let count = 0; count < doc.id('select_file').files.length; count++) {
        if (!['image/jpeg', 'image/png', 'video/mp4'].includes(doc.id('select_file').files[count].type)) {
            error += '<div class="alert alert-danger"><b>' + image_number + '</b> Selected File must be .jpg or .png Only.</div>';
        }
        else {
            form_data.append("images[]", doc.id('select_file').files[count]);
        }
        image_number++;
    }
    if (error != '') {
        doc.id('uploaded_image').innerHTML = error;
        doc.id('select_file').value = '';
    }
    else {
        doc.preload('on')
        doc.id('progress_bar').style.display = 'block';
        let ajax_request = new XMLHttpRequest();
        ajax_request.open("POST", "php/imageupload.php");
        ajax_request.upload.addEventListener('progress', function (event) {
            let percent_completed = Math.round((event.loaded / event.total) * 100);
            doc.id('progress_bar_process').style.width = percent_completed + '%';
            doc.id('progress_bar_process').innerHTML = percent_completed + '% completed';
        });
        ajax_request.addEventListener('load', function (event) {
            doc.id('uploaded_image').innerHTML = '<div class="alert alert-success">Files Uploaded Successfully</div>';
            doc.id('select_file').value = '';
            window.location.reload()
        });
        ajax_request.send(form_data);
    }

};
