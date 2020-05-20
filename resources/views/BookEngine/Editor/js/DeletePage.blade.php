try{
var allPageDeleteButtons = document.getElementsByClassName('DeleteButtonPage');

for(let i = 0; i < allPageDeleteButtons.length; i++) {
allPageDeleteButtons[i].addEventListener("click", function(e) {

let element = e.srcElement


if(element.tagName === 'path'){
element = element.parentElement
console.log(element.tagName)
}
if(element.tagName === 'svg'){
element = element.parentElement
console.log(element.tagName)
}
if(element.tagName === 'BUTTON'){
element = element.parentElement
console.log(element.tagName)
}
if(element.tagName === 'DIV'){

element = element.children[1].href
}


sendFetchTo(element, 'delete', 'DELETE');

})
}
}catch{}
