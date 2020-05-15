$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });

    $('#bottombarCollapse').on('click', function () {
        $('#bottombar').toggleClass('active');
        $(this).toggleClass('active');
    });
});

function toggleForm(formID) {
    try {
        document.getElementById(formID).classList.toggle('active');
    } catch {
    }
}

function untoggleOtherForm(ignoreMe) {
    const formIds = ['newPageToggle', 'formToggle', 'editPageToggle'];
    formIds.forEach(function (formid) {
        if (ignoreMe !== formid) {

            try {
                document.getElementById(formid).classList.toggle('active', false);
            } catch {
            }
        }
    })
}

//document.getElementsByClassName('jsFindCancel').addEventListener('click', untoggleOtherForm);

function sendFetchTo(url, body, method) {
    return fetch(url, {
        method: method,
        credentials: "same-origin",
        body: JSON.stringify(body),
        mode: 'cors',
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
        }

    })
}

document.getElementById('addText').addEventListener('click', addElement);
document.getElementById('addImg').addEventListener('click', addElement);
document.getElementById('addLink').addEventListener('click', addElement);

function addElement() {
    let element = document.createElement('div');
    switch (this.id) {
        case 'addText':
            element.textContent = "test";
            element.setAttribute('class', 'resize-drag');
            document.getElementById('content').appendChild(element);
            break;
        case 'addImg':
            element.setAttribute('class', 'resize-drag');
            element.style = "background-image: url(https://picsum.photos/id/" + Math.floor(Math.random() * 40) + 1 + "/1080); background-size: cover; background-color: transparent;";
            document.getElementById('content').appendChild(element);
            break;
        case 'addLink':
            element.setAttribute('class', 'resize-drag');
            element.style = "background-color: transparent; border: 1px dashed #3399ff;";
            document.getElementById('content').appendChild(element);
            break;
    }

}

