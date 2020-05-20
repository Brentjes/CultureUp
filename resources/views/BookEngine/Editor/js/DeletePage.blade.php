try{
var allPageDeleteButtons = document.getElementsByClassName('DeleteButtonPage');

for(let i = 0; i < allPageDeleteButtons.length; i++) {
allPageDeleteButtons[i].addEventListener("click", function(e) {

console.log(e.srcElement.parentElement.parentElement.parentElement.href);

sendFetchTo(e.srcElement.parentElement.children[0].href, 'delete', 'DELETE');

})
}
}catch{}
