window.addEventListener("load", function(){

    let menu = document.querySelector(".menu");
    let navBtn = document.querySelector(".nav-buttons");

    navBtn.addEventListener("click", function() {
        menu.classList.toggle("open");
        menu.classList.toggle("close");
    });

    
})