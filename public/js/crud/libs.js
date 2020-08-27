function hide(elem) {
    elem.classList.remove("visible")
}

function show(elem) {
    elem.classList.add("visible");
}

function addMessage(elem, message) {
    elem.innerHTML = message;
}


function ajax(path, data, token, event) {
    fetch(path, {
        body: data,
        headers: {
            'X-CSRF-TOKEN': token,
            'X-Requested-With': 'XMLHttpRequest'
        },
        credentials: "same-origin",
        method: "post"
    }).then((response) => {
        response.json().then((res) => {
            event(res);
        });
    })
}