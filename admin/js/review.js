import doc from '../../assets/doc.js'
function cl(data) {
    console.log(data)
}

window.deletereview = deletereview;

function text2Binary(string) {
    return string.split('').map(function (char) {
        return char.charCodeAt(0).toString(2);
    }).join('');
}

function deletereview(name) {
    let a = text2Binary(name);
    if (confirm("Are you sure you want to delete this review ??")) {
        fetch("./php/review.datasave.php?delete=true&filename=" + name).then(function (response) {
            response.text().then(function (text) {
                if (text == 'true') {
                    doc.id(a).style.display = 'none';
                }
            });
        });
    }
}