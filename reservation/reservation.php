<?php
    $min_date = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../components/head.php');
    ?>
    <script src="../assets/js/reservation.js" defer></script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('../components/nav.php'); ?>

    <main class="py-40">
        <div class="px-3 max-w-7xl mx-auto">
            <hgroup class="space-y-5">
                <h1 class="text-3xl text-center font-semibold
                    md:text-left md:text-5xl
                    lg:text-6xl">
                    Book a Room
                </h1>
                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>
                <a href="#form" class="px-4 py-2 w-max mx-auto md:mx-0 text-center rounded-md text-white font-semibold bg-blue-500 block hover:bg-blue-600 transition-all ease-in-out">
                    Step 1: Reservation Details
                </a>
            </hgroup>
        </div>
    </main>

    <form id="form" method="POST" action="guest.php" class="py-20 bg-white min-h-screen">
        <div class="px-3 max-w-7xl mx-auto grid grid-cols-3 gap-5">
            <!-- Steps -->
            <div class="col-span-3 flex items-center gap-5 font-semibold">
                <div class="flex gap-3 items-center">
                    <div class="p-3 rounded border border-transparent bg-blue-500 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined text-white">king_bed</span>
                    </div>
                    <p>Reservation <br> Details</p>
                </div>

                <div class="w-1/2 h-[1px] bg-slate-200"></div>
                
                <div class="flex gap-3 items-center opacity-50">
                    <div class="p-3 rounded border border-slate-200 bg-slate-50 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined">face</span>
                    </div>
                    <p>Guest <br> Details</p>
                </div>

                <div class="w-1/2 h-[1px] bg-slate-200"></div>

                <div class="flex gap-3 items-center opacity-50">
                    <div class="p-3 rounded border border-slate-200 bg-slate-50 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined">qr_code</span>
                    </div>
                    <p>Payment</p>
                </div>
            </div>

            <div>
                <!-- Reservation Details -->
                <div class="p-3 space-y-3 bg-white border rounded-md">
                    <hgroup>
                        <h2 class="text-2xl font-semibold">Reservation Details</h2>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quibusdam.</p>
                    </hgroup>
                    <label for="adult_count" class="block text-md font-semibold">Number of Guests</label>
                    <div class="flex">
                        <button type="button" class="less-btn py-2 px-3 w-16 flex-shrink-0 border border-r-0 grid place-items-center rounded-s-md">
                            <span class="material-symbols-outlined opacity-75">remove</span>
                        </button>
                        <input type="number" name="adult_count" id="adult_count" class="[appearance:textfield] px-3 py-2 w-full border peer" min="1" placeholder="Adult" required>
                        <button type="button" class="add-btn py-2 px-3 w-16 flex-shrink-0 border border-l-0 grid place-items-center rounded-e-md">
                            <span class="material-symbols-outlined opacity-75">add</span>
                        </button>
                    </div>
                    <div class="flex">
                        <button type="button" class="less-btn py-2 px-3 w-16 flex-shrink-0 border grid place-items-center rounded-s-md">
                            <span class="material-symbols-outlined opacity-75">remove</span>
                        </button>
                        <input type="number" name="children_count" class="[appearance:textfield] px-3 py-2 w-full border border-x-0" min="0" placeholder="Children">
                        <button type="button" class="add-btn py-2 px-3 w-16 flex-shrink-0 border grid place-items-center rounded-e-md">
                            <span class="material-symbols-outlined opacity-75">add</span>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-3">
                            <label for="check_in_date" class="text-md block font-semibold">Check-in Date</label>
                            <input type="date" name="check_in_date" id="check_in_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-md" required>
                        </div>
                
                        <div class="space-y-3">
                            <label for="check_out_date" class="text-md block font-semibold">Check-out Date</label>
                            <input type="date" name="check_out_date" id="check_out_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-md disabled:opacity-50 peer" disabled required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Available Rooms -->
            <div class="p-3 space-y-3 col-span-2">
                <hgroup>
                    <h2 class="text-2xl font-semibold">Available Rooms</h2>
                    <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad doloremque, natus ducimus ex libero?</p>
                </hgroup>

                <div class="space-y-3">
                    <!-- Room template -->
                    <div>
                        <input class="opacity-0 hover:cursor-default" type="text" name="room_id" id="room_id" class="border" autocomplete="off" required>
                    </div>

                    <?php 
                        for ($room = 0; $room < 3; $room++) {
                            echo '
                                <div class="flex gap-3 relative">
                                    <div class="aspect-video bg-slate-100 border border-slate-200 rounded-md w-full max-w-[250px] flex-shrink-0 relative">
                                        <div class="absolute top-2 right-2 text-xs">
                                            <p class="bg-white/75 backdrop-blur-md px-3 py-2 rounded-md font-semibold text-blue-500 border"><span>10</span> Available</p>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="flex items-start justify-between gap-5">
                                            <hgroup>
                                                <p class="text-xl font-semibold">&#8369; 5,000.00&#47;night</p>
                                                <h3 class="text-base font-semibold">Lorem, ipsum.</h3>
                                            </hgroup>
                                            <button type="button" id="' . $room . '" class="select-room px-3 py-2 text-blue-500 font-semibold border rounded-md transition-all ease-in-out">Select this room</button>
                                        </div>
                                        <p class="mt-3 max-w-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum saepe similique maiores illum modi consectetur!</p>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>

                <!-- Addons -->
                <hgroup>
                    <h2 class="text-2xl font-semibold">Add to your stay</h2>
                    <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad doloremque, natus ducimus ex libero?</p>
                </hgroup>

                <div class="grid grid-cols-4 gap-3">
                    <label for="towels" class="border rounded-md p-3 hover:cursor-pointer">
                        <div class="flex items-center gap-3">
                            <div class="relative flex items-center">
                                <input type="checkbox" name="towels" id="towels"
                                    class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                                <label for="towels" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                            </div>
                            <p class="w-max select-none font-semibold">Extra Towels</p>
                        </div>
                    </label>

                    <label for="slippers" class="border rounded-md p-3 hover:cursor-pointer">
                        <div class="flex items-center gap-3">
                            <div class="relative flex items-center">
                                <input type="checkbox" name="slippers" id="slippers"
                                    class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                                <label for="slippers" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                            </div>
                            <p class="w-max select-none font-semibold">Slippers</p>
                        </div>
                    </label>

                    <label for="toiletries" class="border rounded-md p-3 hover:cursor-pointer">
                        <div for="toiletries" class="flex items-center gap-3">
                            <div class="relative flex items-center">
                                <input type="checkbox" name="toiletries" id="toiletries"
                                    class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                                <label for="toiletries" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                            </div>
                            <p class="w-max select-none font-semibold">Toiletries</p>
                        </div>
                    </label>

                    <label for="snacks" class="border rounded-md p-3 hover:cursor-pointer">
                        <div class="flex items-center gap-3">
                            <div class="relative flex items-center">
                                <input type="checkbox" name="snacks" id="snacks"
                                    class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                                <label for="snacks" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                            </div>
                            <p class="w-max select-none font-semibold">Snacks</p>
                        </div>
                    </label>
                </div>

                <div class="flex justify-between">
                    <div></div>
                    <button class="px-3 py-2 bg-blue-500 font-semibold text-white rounded-md hover:bg-blue-600 transition-all ease-in-out">Next: Guest Details</button>
                </div>
            </div>
        </div>
    </form>

    <?php include('../components/footer.php'); ?>
</body>

</html>