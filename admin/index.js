import doc from '../assets/doc.js'

function cl(data) {
    return console.log(data)
}

if (sessionStorage.getItem('auth') == 'true') {
    let username = sessionStorage.getItem('username')
    let password = sessionStorage.getItem('password')
    let form_data = new FormData();
    form_data.append("username", username);
    form_data.append("password", password);
    fetch("./php/validate.php", {
        body: form_data,
        method: "post",
    }).then(function (response) {
        response.text().then(function (text) {
            if (text !== 'true') {
                sessionStorage.setItem('auth', 'false');
                sessionStorage.setItem('username', 'null');
                sessionStorage.setItem('password', 'null');
            }
        });
    });
} else {
    window.location.replace('./');
}

doc.preload('on')

window.onload = function () { doc.preload('off') }

function page(p) {
    let pages = doc.classname("section");
    sessionStorage.setItem('page', p)
    for (var i = 0; i < pages.length; i++) {
        if (pages[i].id == p) {
            pages[i].classList.add('active')
            nav(p)
        } else {
            pages[i].classList.remove('active')
        }
    }
}

function nav(p) {
    for (let i = 0; i < doc.classname("category").length; i++) {
        if (doc.classname("category")[i].classList[1] == p) {
            doc.classname("category")[i].classList.add('active');
        } else {
            doc.classname("category")[i].classList.remove('active');
        }
    }
}

for (let i = 0; i < doc.classname("category").length; i++) {
    doc.classname("category")[i].addEventListener('click', function (e) {
        page(doc.classname("category")[i].classList[1])
    })
}

let pagestr = sessionStorage.getItem('page');
if (pagestr == null || pagestr == undefined || pagestr == '') {
    sessionStorage.setItem('page', 'admin_main');
    page('admin_main')
    nav('admin_main')
} else {
    page(pagestr)
    nav(pagestr)
}

// fetch("./components/main.php").then(function (response) {
//     response.text().then(function (text) {
//         document.getElementById("main").innerHTML = text;
//         mainm();
//     });
// });