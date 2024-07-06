let password = document.querySelector("#togglePassword")
    .addEventListener("change", () => {
        let type = document.querySelector("#password").getAttribute("type");
        type === 'password'
            ? document.querySelector("#password").setAttribute("type", "text")
            : document.querySelector("#password").setAttribute("type", "password");
    })