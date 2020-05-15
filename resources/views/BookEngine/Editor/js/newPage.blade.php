try{
document.getElementById('newPageToggleButton').addEventListener('click', addPageToggle);
}catch{}

function addPageToggle() {
console.log('hit')
const id = 'newPageToggle';
untoggleOtherForm(id);
toggleForm(id)
}
try{
document.getElementById('newPageButton').addEventListener("click", sendNewPage);
}catch{}

function sendNewPage(){
let url = "{{ route('editor.page.store', $assignment->id) }}";
sendPage(url, 'post', 'new')
}

function sendPage(PageUrl, method, prefix) {

let body = getPageInfo(prefix)




sendFetchTo(PageUrl , body, method).then((text) => pageDone(text))

}

function pageDone(text){
{{--location.reload();--}}
}

function getPageInfo(prefix){
return body = {
name: document.getElementById(prefix+'PageName').value,
description: document.getElementById(prefix+'PageDescription').value,
}
}
