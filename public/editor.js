// $(document).ready(function () {
//     $('#sidebarCollapse').on('click', function () {
//         $('#sidebar').toggleClass('active');
//         $(this).toggleClass('active');
//     });
// });

$(document).ready(function () {
    document.getElementById('sidebarCollapse').addEventListener('click', sidebarButton);
});

function sidebarButton(){
    $('#sidebar').toggleClass('active');
    $(this).toggleClass('active');
}
