// prototype functionality

let active = false;

function viewMore() {
    if (active == true) {
        document.getElementById("overlay").style.top = "94vh";
        document.getElementById('viewMore').innerHTML = '<span class="material-icons btn">expand_more</span> View more';

    } else {
        document.getElementById("overlay").style.top = "550vh";
        document.getElementById('viewMore').innerHTML = '<span class="material-icons btn">expand_less</span> View less';

    }
    active = !active
}

$(document).ready(function () {
    $('.header').height($(window).height());
});

$(document).ready(function () {
    $('.navbar-toggler-icon').on('click', function () {

        $('.animated-icon1').toggleClass('is-active');
    });
});

$(document).ready(function () {
    document.getElementById('viewMore').addEventListener('click', viewMore);
});


// Dark mode button toggle
function init() {
    document.getElementById('toggle-button').addEventListener('click', toggle_style, false);
    if (localStorage.getItem('CultureUpDarkMode') === 'true') {
        toggle_style()
    } else {
        try {
            document.getElementById('logo').src = '/images/logoLight.png';
        } catch {

        }
    }
}

function toggle_style() {
    let byId = function (id) {
        return document.getElementById(id);
    };
    if (byId('dynamic-style').href == window.location.href.substring(0, window.location.href.lastIndexOf('/')) + '/css/Main/darkMode.css') {
        byId('dynamic-style').href = '';
        try {
            byId('logo').src = '/images/logoLight.png';
        } catch {

        }
        byId('toggle-button-text').innerText = ' Dark mode';
        byId('toggleLightIcon').classList.remove('fa-sun');
        byId('toggleLightIcon').classList.add('fa-moon');
        localStorage.setItem('CultureUpDarkMode', 'false');
    } else {
        byId('dynamic-style').href = '/css/Main/darkMode.css';
        try {
            byId('logo').src = '/images/logoDark.png';
        } catch {

        }
        byId('toggle-button-text').innerText = ' Light mode';
        byId('toggleLightIcon').classList.remove('fa-moon');
        byId('toggleLightIcon').classList.add('fa-sun');
        localStorage.setItem('CultureUpDarkMode', 'true');
    }
}

window.addEventListener('load', init, false);
