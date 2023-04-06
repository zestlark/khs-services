import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

client_file.onchange = evt => {
    client_file.files
    for (let i = 0; i < client_file.files.length; i++) {
        let file = client_file.files[i];
        let reader = new FileReader();
        reader.onload = function (e) {
            let img = document.createElement("IMG");
            img.src = e.target.result;
            client_preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }
}

client_cancelfile.onclick = function () {
    window.location.reload();
}


client_uploadfile.onclick = function (event) {
    let form_data = new FormData();
    let image_number = 1;
    let error = '';
    for (let count = 0; count < doc.id('client_file').files.length; count++) {
        if (!['image/jpeg', 'image/png', 'video/mp4'].includes(doc.id('client_file').files[count].type)) {
            error += '<div class="alert alert-danger"><b>' + image_number + '</b> Selected File must be .jpg or .png Only.</div>';
        }
        else {
            form_data.append("images[]", doc.id('client_file').files[count]);
        }
        image_number++;
    }
    if (error != '') {
        doc.id('uploaded_image').innerHTML = error;
        doc.id('client_file').value = '';
    }
    else {
        doc.preload('on')
        doc.id('progress_bar').style.display = 'block';
        let ajax_request = new XMLHttpRequest();
        ajax_request.open("POST", "php/clientimageupload.php");
        ajax_request.upload.addEventListener('progress', function (event) {
            let percent_completed = Math.round((event.loaded / event.total) * 100);
            doc.id('progress_bar_process').style.width = percent_completed + '%';
            doc.id('progress_bar_process').innerHTML = percent_completed + '% completed';
        });
        ajax_request.addEventListener('load', function (event) {
            doc.id('uploaded_image').innerHTML = '<div class="alert alert-success">Files Uploaded Successfully</div>';
            doc.id('client_file').value = '';
            window.location.reload()
        });
        ajax_request.send(form_data);
    }

};

window.clientdelete = clientdelete;

function text2Binary(string) {
    return string.split('').map(function (char) {
        return char.charCodeAt(0).toString(2);
    }).join('');
}

function clientdelete(data) {
    let a = text2Binary(data);
    if (confirm('Are you sure you want to delete this client photo')) {
        fetch("./php/clients.datasave.php?delete=true&filename=" + data).then(function (response) {
            response.text().then(function (text) {
                if (text == 'true') {
                    doc.id(a).style.display = 'none';
                }
            });
        });
    }
}