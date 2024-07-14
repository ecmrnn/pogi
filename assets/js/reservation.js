let addBtn = document.querySelectorAll(".add-btn");
let lessBtn = document.querySelectorAll(".less-btn");
let checkInDate = document.querySelector("#check_in_date");

addBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        let input = btn.previousElementSibling;
        
        try {
            let newValue = parseInt(input.value) + 1;

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
            let newValue = parseInt(input.value) - 1;   

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

    if (checkInValue !== '') {
        checkOutDate.removeAttribute("disabled");
        checkOutDate.setAttribute("min", checkInValue);
    } else {
        checkOutDate.value = '';
        checkOutDate.setAttribute("disabled", "true");
    }
})

let rooms = document.querySelectorAll(".select-room");

rooms.forEach(room => {
    room.addEventListener("click", () => {
        let id = room.getAttribute("id");
        let room_id = document.querySelector("#room_id");

        rooms.forEach(room => {
            room.classList.remove("bg-blue-500")
            room.classList.remove("border-blue-500")
            room.classList.remove("text-white")
            room.innerHTML = "Select this room"
        })

        room.classList.add("bg-blue-500")
        room.classList.add("border-blue-500")
        room.classList.add("text-white")
        room.innerHTML = "Room Selected"

        room_id.value = id;
    })
});