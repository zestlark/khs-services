import doc from './doc.js'

AOS.init();
//console.log
function cl(data) {
    console.log(data)
}

// preloader
window.onload = function () {
    doc.id('preload').style.display = 'none';
}

setTimeout(
    function () {
        doc.id('preload').style.display = 'none';
    }, 9000
)

//nav bar
doc.id('bar').addEventListener('click', function () {
    doc.classname('nav')[0].style.right = '0';
})
doc.classname('close')[0].addEventListener('click', function () {
    doc.classname('nav')[0].style.right = '-100%';
})

//video player
doc.classname('player')[0].addEventListener('click', function () {
    if (doc.classname('videoshow-box')[0].classList.contains('play')) {
        doc.classname('videoshow-box')[0].classList.remove('play');
        doc.id('videoshow-video').pause()
    } else {
        doc.classname('videoshow-box')[0].classList.add('play');
        doc.id('videoshow-video').play()
    }

})

//video onend
doc.id('videoshow-video').onended = function () {
    doc.classname('videoshow-box')[0].classList.remove('play');
}

//header scroll
window.onscroll = function () {
    if (window.pageYOffset > 60) {
        doc.classname('header')[0].classList.add('scroll');
    } else {
        doc.classname('header')[0].classList.remove('scroll');
    }

    doc.classname('close')[0].click();
}


//gallery image oepn
window.galleryimageopen = galleryimageopen;

function galleryimageopen(data) {
    window.open(data, '_blank');
}

document.getElementById("contactform").addEventListener("submit", function (event) {
    event.preventDefault()
    let email = contactformemail.value;
    let message = contactformmessage.value;
    let url = `http://test-be01.000webhostapp.com/email/?to=${email}&message=your query of "${message} " is been submitted successsfully , we will contact you soon&subject=KHS services&from=KHS services`;
    fetch(url, { mode: "no-cors" }).then(function (response) {
        response.text().then(function (text) {
            alert("your message submitted successfully");
        });
    });

    let url2 = `http://test-be01.000webhostapp.com/email/?to=${window.adminemail}&message=${message}&subject=KHS services a new message has appeared&from=by ${email}`;
    fetch(url2, { mode: "no-cors" }).then(function (response) {
        response.text().then(function (text) {
        });
    });
});

function pagewatcher() {
    let sections = document.querySelectorAll(".webpage_section");
    let navLi = document.querySelectorAll(".nav li");
    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach((section) => {
            let sectionTop = section.offsetTop;
            let sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 5) {
                current = section.getAttribute("id");
            }
        });

        navLi.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
                li.classList.add("active");
            }
        });
    });
}
pagewatcher()