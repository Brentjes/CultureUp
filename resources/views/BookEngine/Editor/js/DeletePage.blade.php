try{
var allPageDeleteButtons = document.getElementsByClassName('DeleteButtonPage');

for(let i = 0; i < allPageDeleteButtons.length; i++) {
allPageDeleteButtons[i].addEventListener("click", function(e) {

let element = e.srcElement


if(element.tagName === 'path'){
element = element.parentElement

}
if(element.tagName === 'svg'){
element = element.parentElement

}
if(element.tagName === 'BUTTON'){
element = element.parentElement

}
if(element.tagName === 'DIV'){

element = element
}


sendFetchTo(element.children[1].href, 'delete', 'DELETE').then(function(response) {
return response.text().then(function(text) {
if(text === "success"){
element.id = "deleteme"
removeElement(element.id);
}
});
});

})
}
}catch{}

function removeElement(elementId) {
// Removes an element from the document
let element = document.getElementById(elementId);
element.parentNode.removeChild(element);
}
