// prototype functionality

let active = false;

function viewMore() {
    if (active == true) {
        document.getElementById("overlay").style.top = "94vh";
        document.getElementById('viewMore').innerHTML = '<span class="material-icons btn">expand_more</span> View more';

    } else {
        document.getElementById("overlay").style.top = "200vh";
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

// end of prototype functionalit

// popper

const button = document.querySelector('#button');
const tooltip = document.querySelector('#tooltip');

let popperInstance = null;

function create() {
    popperInstance = Popper.createPopper(button, tooltip, {
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
        ],
    });
}

function destroy() {
    if (popperInstance) {
        popperInstance.destroy();
        popperInstance = null;
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function show() {
    await sleep(1000);
    tooltip.setAttribute('data-show', '');
    create();
}

function hide() {
    tooltip.removeAttribute('data-show');
    destroy();
}

const showEvents = ['mouseenter', 'focus'];
const hideEvents = ['mouseleave', 'blur'];

showEvents.forEach(event => {
    button.addEventListener(event, show);
});

hideEvents.forEach(event => {
    button.addEventListener(event, hide);
});
