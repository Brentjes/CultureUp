


@include('BookEngine.Editor.js.newPage')

const pageInfo = {
name: '{{$page->name}}',
description: '{{$page->description}}',
id: '{{$page->id}}'
};

function clearPageForm(){
console.log('clear')
document.getElementById('pageName').value = ''
}


try{
document.getElementById('editPageToggleButton').addEventListener('click', editPageToggle);
}catch{}

function editPageToggle() {
console.log('hit')
const id = 'editPageToggle';
untoggleOtherForm(id);
toggleForm(id)
}
try{
document.getElementById('editPageButton').addEventListener("click", sendEditPage);
}catch{}

function sendEditPage(){
let url = "{{ route('editor.page.update', [$page->assignment->id, $page->id]) }}";
console.log(url)
sendPage(url, 'put', 'edit')
}
