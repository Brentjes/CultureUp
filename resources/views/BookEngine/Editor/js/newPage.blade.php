document.getElementById('newPageButton').addEventListener("click", sendNewPage);

function sendNewPage() {
let NewPageUrl = "{{ route('editor.page.store', $assignment->id) }}";
let body = {
name: document.getElementById('pageName').value,
description: document.getElementById('pageDescription').value,
};

{{--if(body.description === ""){--}}
{{--body.description = "//00"}--}}

sendFetchTo(NewPageUrl, body, 'post').then((text) => pageDone(text))

}

function pageDone(text){
location.reload();
}
