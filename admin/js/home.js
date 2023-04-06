import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

home_cancelfile.onclick = function () {
    window.location.reload();
}

home_savefile.onclick = function () {

    if (confirm('data of the home page will be changed')) {
        doc.preload('on')
        let homeformData = new FormData();
        homeformData.append('heading', home_input_heading.value);
        homeformData.append('highlighted_heading', home_input_highlight_heading.value);
        homeformData.append('paragraph', home_input_paragraph.value);

        fetch('./php/home.datasave.php', {
            method: 'post',
            body: homeformData
        }).then((response) => response.text())
            .then((data) => {
                if (data == 'true') {
                    window.location.reload()
                }
            })
    }


}