document.getElementById('updateAssignmentButton').addEventListener("click", sendAssignmentUpdate);

try {
document.getElementById('editAssignmentToggleButton').addEventListener('click', editAssignmentToggle);
} catch {}

function editAssignmentToggle() {
const id = 'formToggle';
untoggleOtherForm(id);
toggleForm(id);

}

function sendAssignmentUpdate() {
let assignmentUpdateUrl = "{{ route('editor.current.update', $assignment->id) }}";
let body = {
name: document.getElementById('assignmentName').value,
subject: document.getElementById('assignmentSubject').value,
country: document.getElementById('assignmentCountry').value,
isHidden: document.getElementById('isHidden').checked,
isLocked: document.getElementById('isLocked').checked,
};

console.log(body)

if (!(body.name.length > 0 && body.name.length <= 50 && body.subject.length > 0 && body.subject.length <= 200)) {
console.log("one of these inputs are to long, please shorten them, title max length = 50, subject max length = 200");
if (!(body.name.length > 0 && body.name.length <= 50)) {
console.log('name');
console.log(body.name.length);
}
if (!(body.subject.length > 0 && body.subject.length <= 200)) {
console.log('subject');
console.log(body.subject.length);
}
return
}
sendFetchTo(assignmentUpdateUrl, body, 'put').then(function (response) {
return response.text().then(function (text) {

assignmentDone(text);


})
})


function assignmentDone(text) {
if (text === 'success') {
editAssignmentToggle();
}
}
}
