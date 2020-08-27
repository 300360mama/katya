window.addEventListener("load", function () {

    let update = document.getElementById("update");
    let form = document.getElementById("updateForm");
    let path = form.getAttribute("action");
    let closeBtn = document.querySelector(".message_wrapper .close");
    let message_wrapper = document.querySelector(".message_wrapper");
    let message = document.querySelector(".message_wrapper .message");
    closeBtn.addEventListener("click", (e) => {
        hide(message_wrapper);
    });

    update.addEventListener("click", function (e) {

        e.preventDefault();
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let data = new FormData(form);

        ajax(path, data, token, function(res) {
            addMessage(message, res.message);
            show(message_wrapper);
        })
    })

    form.addEventListener("submit", function() {
        console.log("adsfs");
        addField(ckeditor, field);
    });
});


