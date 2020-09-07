window.addEventListener("load", function () {
    let create = document.getElementById("create");
    let form = document.getElementById("createForm");
    let path = form.getAttribute("action");
    let closeBtn = document.querySelector(".message_wrapper .close");
    let message_wrapper = document.querySelector(".message_wrapper");
    let message = document.querySelector(".message_wrapper .message");
    closeBtn.addEventListener("click", (e) => {
        hide(message_wrapper);
    });

    create.addEventListener("click", function (e) {
        e.preventDefault();
        const editorData = editor.getData();
        let ckeditorContent = form.querySelector("#content");
        ckeditorContent.innerHTML = editorData;
        console.log(ckeditorContent);

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let data = new FormData(form);

        ajax(path, data, token, function (res) {
            addMessage(message, res.message);
            show(message_wrapper);
        });
    });
});
