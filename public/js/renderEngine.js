// target elements with the "draggable" class
interact('.draggable')
    .draggable({
        // enable inertial throwing
        inertia: true,
        // keep the element within the area of it's parent
        modifiers: [
            interact.modifiers.restrictRect({
                restriction: 'parent',
                endOnly: true
            })
        ],
        // enable autoScroll
        autoScroll: true,

        listeners: {
            // call this function on every dragmove event
            move: dragMoveListener,

            // call this function on every dragend event

        }
    })

function dragMoveListener (event) {
    var target = event.target
    // keep the dragged position in the data-x/data-y attributes
    var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

    // translate the element
    target.style.webkitTransform =
        target.style.transform =
            'translate(' + x + 'px, ' + y + 'px)'

    // update the posiion attributes
    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)

    // update the element's style
    target.style.width = event.rect.width + 'px'
    target.style.height = event.rect.height + 'px'

    let inputs = target.children[0].children
    try {
        inputs[0].value = x
    }catch{}
    try{
    inputs[1].value = y
    }catch{}
    try{
    inputs[2].value = target.style.width
    }catch{}
    try{
    inputs[3].value = target.style.height
    }catch{}

}

// this function is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener

interact('.resize-drag')
    .resizable({
        // resize from all edges and corners
        edges: {left: true, right: true, bottom: true, top: true},

        listeners: {
            move(event) {
                let target = event.target
                let x = (parseFloat(target.getAttribute('data-x')) || 0)
                let y = (parseFloat(target.getAttribute('data-y')) || 0)

                // update the element's style
                target.style.width = event.rect.width + 'px'
                target.style.height = event.rect.height + 'px'

                // translate when resizing from top or left edges
                x += event.deltaRect.left
                y += event.deltaRect.top

                target.style.webkitTransform = target.style.transform =
                    'translate(' + x + 'px,' + y + 'px)'

                target.setAttribute('data-x', x)
                target.setAttribute('data-y', y)


                let inputs = target.children[0].children
                try {
                    inputs[0].value = x
                }catch{}
                try{
                    inputs[1].value = y
                }catch{}
                try{
                    inputs[2].value = target.style.width
                }catch{}
                try{
                    inputs[3].value = target.style.height
                }catch{}

            }
        },
        modifiers: [
            // keep the edges inside the parent
            interact.modifiers.restrictEdges({
                outer: 'parent'
            }),

            // minimum size
            interact.modifiers.restrictSize({
                min: {width: 100, height: 50}
            })
        ],

        inertia: false
    })

    .draggable({
        listeners: {move: window.dragMoveListener,


        },
        inertia: false,
        modifiers: [
            interact.modifiers.restrictRect({
                restriction: 'parent',
                endOnly: true
            })
        ]
    })
