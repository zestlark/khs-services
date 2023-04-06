import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

window.gallerydelete = gallerydelete;
window.galleryopenlink = galleryopenlink;
window.copytext = copytext;
window.getvalidimgurl = getvalidimgurl;

function text2Binary(string) {
    return string.split('').map(function (char) {
        return char.charCodeAt(0).toString(2);
    }).join('');
}

function gallerydelete(data) {
    let a = text2Binary(data);
    if (confirm('Are you sure you want to delete this photo')) {
        fetch("./php/gallery.datasave.php?delete=true&filename=" + data).then(function (response) {
            response.text().then(function (text) {
                if (text == 'true') {
                    doc.id(a).style.display = 'none';
                }
            });
        });
    }
}

function galleryopenlink(url) {
    window.open('../public/gallery/' + url, '_blank');
}

async function copytext(text) {
    try {
        await navigator.clipboard.writeText(text);
        console.log('Content copied to clipboard');
    } catch (err) {
        console.error('Failed to copy: ', err);
    }
}

function getvalidimgurl(url) {
    let i = document.createElement('iframe')
    i.src = '../public/gallery/' + url
    copytext(i.src)
}