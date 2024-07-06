let menu = document.querySelector("#menu");

let openMenuBtn = document.querySelector("#openBtn")
    .addEventListener("click", () => {
        menu.classList.remove("translate-x-full");
    })
    
let closeMenuBtn = document.querySelector("#closeBtn")
    .addEventListener("click", () => {
        menu.classList.add("translate-x-full");
    });