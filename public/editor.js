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

document.getElementById('editAssignmentToggleButton').addEventListener('click', editAssignmentToggle);
function editAssignmentToggle() {
    const id = 'formToggle';
    untoggleOtherForm(id);
    toggleForm(id);

}
document.getElementById('newPageToggleButton').addEventListener('click', addPageToggle);
function addPageToggle() {
    const id = 'pageToggle';
    untoggleOtherForm(id);
    toggleForm(id)
}

function toggleForm(formID){
    try {
        document.getElementById(formID).classList.toggle('active');
    }catch{}
}

function untoggleOtherForm(ignoreMe){
    const formIds = ['pageToggle', 'formToggle'];
    formIds.forEach(function(formid) {
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
