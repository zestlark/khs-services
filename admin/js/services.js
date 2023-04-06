import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

services_cancelfile.onclick = function () {
    window.location.reload();
}

services_savefile.onclick = function () {

    if (confirm('data of the services page will be changed')) {
        doc.preload('on')
        let servicesformData = new FormData();
        servicesformData.append('paragraph', services_input_paragraph.value);

        fetch('./php/services.datasave.php', {
            method: 'post',
            body: servicesformData
        }).then((response) => response.text())
            .then((data) => {
                if (data == 'true') {
                    window.location.reload()
                }
            })
    }


}