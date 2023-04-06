import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

contact_cancelfile.onclick = function () {
    window.location.reload();
}

contact_savefile.onclick = function () {

    if (confirm('data of the contact page will be changed')) {
        doc.preload('on')
        let contactformData = new FormData();
        contactformData.append('paragraph', contact_input_paragraph.value);
        contactformData.append('email', contact_input_email.value);
        contactformData.append('phone', contact_input_phone.value);
        contactformData.append('address', contact_input_address.value);
        contactformData.append('social_instagram', contact_input_social_instagram.value);
        contactformData.append('social_facebook', contact_input_social_facebook.value);
        contactformData.append('social_twitter', contact_input_social_twitter.value);

        fetch('./php/contact.datasave.php', {
            method: 'post',
            body: contactformData
        }).then((response) => response.text())
            .then((data) => {
                if (data == 'true') {
                    window.location.reload()
                }
            })
    }


}