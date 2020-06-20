try {
var allPageDeleteButtons = document.getElementsByClassName('DeleteButtonPage');

for (let i = 0; i < allPageDeleteButtons.length; i++) {
allPageDeleteButtons[i].addEventListener("click", function (e) {

let element = e.srcElement

if (element.tagName === 'path') {
element = element.parentElement

}
if (element.tagName === 'svg') {
element = element.parentElement

}
if (element.tagName === 'BUTTON') {
element = element.parentElement

}
if (element.tagName === 'DIV') {

element = element
}

sendFetchTo(element.children[1].href, 'delete', 'DELETE').then(function (response) {
return response.text().then(function (text) {

deleteNow(text, element);


})
})
})
}
} catch {}

function deleteNow(text, element) {
console.log(text)
if (text === "success") {
element.parentNode.removeChild(element);
}
}
