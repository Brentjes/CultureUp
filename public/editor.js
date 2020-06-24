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

try {
    document.getElementById('addText').addEventListener('click', addElement);
}catch{}
try{
    document.getElementById('addImg').addEventListener('click', addElement);
}catch{}
try{
    document.getElementById('addLink').addEventListener('click', addElement);
}catch{}


function addElement() {
    let element = document.createElement('div');
    switch (this.id) {
        case 'addText':

            element.textContent = "test";
            document.getElementById('content').appendChild(element);
            break;
        case 'addImg':
            element.style = "background-image: url(https://picsum.photos/id/" + Math.floor(Math.random() * 40) + 1 + "/1080); background-size: cover; background-color: transparent;";
            element.classList.add('element-Game-Image');
            break;
        case 'addLink':
            element.style = "background-color: transparent; border: 1px dashed #3399ff;";
            element.classList.add('element-Game-Link');
            break;
    }

    let input = document.createElement('div')
    element.appendChild(input)
    element.classList.add('element-Game')
    element.classList.add('resize-drag')
        // let x = 500
        // element.setAttribute('data-x', x)
        // element.setAttribute('data-y', x)
    // console.log(element.data-x)
    input.appendChild(createHiddenInput('positionX'))
    input.appendChild(createHiddenInput('positionY'))
    input.appendChild(createHiddenInput('width'))
    input.appendChild(createHiddenInput('height'))
    input.appendChild(createHiddenInput('ID'))
    input.children[4].value = 'Create'
    document.getElementById('content').appendChild(element);
}

function createHiddenInput(inputName){
    let input = document.createElement('input')
    input.name = inputName
    input.type = 'hidden'
    return input
}
