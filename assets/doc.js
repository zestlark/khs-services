class docum {
    constructor(data) {
        this.data = data;
    }

    id(params) {
        return document.getElementById(params)
    }

    classname(params) {
        return document.getElementsByClassName(params)
    }

    tag(params) {
        return document.getElementsByTagName(params)
    }
    preload(state) {
        if (state == 'on') {
            doc.id('preload').classList.add('active');
        } else {
            doc.id('preload').classList.remove('active');
        }
    }
}

const doc = new docum();

export default doc;