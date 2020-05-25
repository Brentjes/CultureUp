try{
var allPageDeleteButtons = document.getElementsByClassName('DeleteButtonPage');

for(let i = 0; i < allPageDeleteButtons.length; i++) {
allPageDeleteButtons[i].addEventListener("click", function(e) {

console.log(e.srcElement.parentElement.children[1].value);
})
}
}catch{}
