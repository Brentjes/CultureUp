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

function showInfo() {
    document.getElementById('formToggle').classList.toggle('active');
}

function sendFetchTo(url, body, method) {
    console.log(method);
    console.log(body);
    console.log(url);
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
