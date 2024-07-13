let password = document.querySelector("#togglePassword")
    .addEventListener("change", () => {
        let passwords = document.querySelectorAll("input.password");
        passwords.forEach(password => {
            let type = password.getAttribute("type");

            type === 'password'
                ? password.setAttribute("type", "text")
                : password.setAttribute("type", "password");
        });
    })