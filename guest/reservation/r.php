<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../../components/head.php');
    ?>
    <script src="../../assets/js/reservation.js" defer></script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('../../components/nav.php'); ?>
    
    <main class="py-20 min-h-screen">
        <div class="p-3 max-w-7xl mx-auto relative flex gap-10">
            <?php include('../../components/guest-nav.php'); ?>
            
            <div class="space-y-5 w-full">
                <div class="space-y-5">
                    <div class="bg-white rounded-md p-3 shadow-lg w-full space-y-5">
                        <hgroup>
                            <h1 class="text-2xl font-semibold">Reservations</h1>
                            <p class="text-sm"><a href="../reservation.php" class="text-black/25 hover:text-slate-800/80 transition-all ease-in-out">Reservations</a> &#47; RID</p>
                        </hgroup>

                        <form action="" class="grid grid-cols-2 gap-3">
                            <div class="space-y-3 col-span-2">
                                <hgroup>
                                    <h2 class="text-lg font-semibold">Reservation ID</h2>
                                    <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quibusdam.</p>
                                </hgroup>

                                <label for="adult_count" class="block text-md font-semibold">Number of Guests</label>
                                <div class="grid grid-cols-2 gap-3">
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
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="space-y-3">
                                        <label for="check_in_date" class="text-md block font-semibold">Check-in Date</label>
                                        <input type="date" name="check_in_date" id="check_in_date" class="px-3 w-full py-2 border rounded-md" required>
                                    </div>
                            
                                    <div class="space-y-3">
                                        <label for="check_out_date" class="text-md block font-semibold">Check-out Date</label>
                                        <input type="date" name="check_out_date" id="check_out_date" class="px-3 w-full py-2 border rounded-md" required>
                                    </div>
                                </div>

                                <!-- Addons -->
                                <hgroup>
                                    <h2 class="text-lg font-semibold">Add to your stay</h2>
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
                            </div>

                            <div></div>

                            <button class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-blue-500 hover:bg-blue-600 transition-all ease-in-out w-max ml-auto">Update Reservation</but>
                        </form>
                    </div>
                </div>
                
                <div class="bg-red-50 border border-red-200 rounded-md p-3 shadow-lg w-full space-y-5">
                    <hgroup>
                        <h2 class="text-lg font-semibold text-red-400">Danger Zone</h2>
                        <p class="max-w-sm text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eius!</p>
                    </hgroup>
                    <form action="" class="space-y-3">
                        <p class="max-w-sm">To <strong>cancel your reservation</strong>, enter your password in the field below.</p>
                        <label for="delete_password" class="block font-semibold">Password</label>
                        <div class="flex gap-3">
                            <input type="password" name="delete_password" id="delete_password" class="max-w-sm px-3 py-2 w-full rounded-md border border-red-200 text-red-400 focus:outline-none focus:ring-2 focus-within:ring-red-400" placeholder="********" required>
                            <button class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-red-400 hover:bg-red-500 transition-all ease-in-out w-max focus:outline-none focus:ring-2 focus-within:ring-red-600">Cancel Reservation</but>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <?php include('../../components/footer.php'); ?>
</body>

</html>