try {
document.getElementById('newPageToggleButton').addEventListener('click', addPageToggle);
} catch {}

function addPageToggle() {
console.log('hit')
const id = 'newPageToggle';
untoggleOtherForm(id);
toggleForm(id)
}
try {
var sendButton = document.getElementById('newPageButton')
sendButton.addEventListener("click", sendNewPage);
} catch {}

function sendNewPage() {
let url = "{{ route('editor.page.store', $assignment->id) }}";
sendPage(url, 'post', 'new')
}

function sendPage(PageUrl, method, prefix) {

let body = getPageInfo(prefix)


sendButton.removeEventListener("click", sendNewPage);

sendFetchTo(PageUrl, body, method).then(response => pageDone(response))
.catch(error => {sendButton.addEventListener("click", sendNewPage); console.log(error)} );



function pageDone(response) {
if (response.ok) {
location.reload();
} else {
throw Error(response.statusText);
}
}


}
function getPageInfo(prefix) {
return body = {
name: document.getElementById(prefix + 'PageName').value,
description: document.getElementById(prefix + 'PageDescription').value,
}
}
