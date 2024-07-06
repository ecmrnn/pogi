let addBtn = document.querySelectorAll(".add-btn");
let lessBtn = document.querySelectorAll(".less-btn");
let checkInDate = document.querySelector("#check_in_date");

addBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        let input = btn.previousElementSibling;
        
        try {
            let newValue = eval(input.value) + 1;

            input.value == ''
                    ? input.value = 1
                    : input.value = newValue;
        } catch (error) {
            input.value = '';
        }
    })
});

lessBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        let input = btn.nextElementSibling;

        try {
            let newValue = eval(input.value) - 1;   

            if (newValue <= 0 || input.value == '') {
                input.value = '';
            } else {
                input.value = newValue;
            }
        } catch (error) {
            input.value = '';
        }
    })
});

checkInDate.addEventListener("change", () => {
    let checkOutDate = document.querySelector("#check_out_date");
    let checkInValue = checkInDate.value;


    console.log(checkInValue)
    if (checkInValue !== '') {
        checkOutDate.removeAttribute("disabled");
        checkOutDate.setAttribute("min", checkInValue);
    } else {
        checkOutDate.value = '';
        checkOutDate.setAttribute("disabled", "true");
    }
})