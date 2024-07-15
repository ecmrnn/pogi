<?php
    $min_date = date("Y-m-d");
    session_start();
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

    <section id="rooms" class="py-20 bg-white min-h-screen">
        <div class="px-3 space-y-5 max-w-7xl mx-auto">
            <hgroup>
                <h2 class="font-semibold text-2xl">Room Name</h2>
                <p class="text-sm"><a href="../rooms.php" class="text-black/25 hover:text-slate-800/80 transition-all ease-in-out">Rooms</a> &#47; Room Name</p>
            </hgroup>

            <div class="grid lg:grid-cols-3 gap-5 place-items-start">
                <!-- Room Details -->
                <div class="p-3 border w-full rounded-md col-span-2 flex flex-col lg:flex-row gap-3">
                    <div class="lg:max-w-sm mx-auto lg:mx-0 w-full grid grid-cols-3 lg:grid-cols-2 gap-3 rounded-md flex-shrink-0">
                        <div class="bg-slate-200 lg:col-span-2 aspect-square lg:aspect-video rounded-md"></div>
                        <div class="bg-slate-200 aspect-square rounded-md"></div>
                        <div class="bg-slate-200 aspect-square rounded-md"></div>
                    </div>

                    <div class="space-y-5">
                        <hgroup>
                            <h2 class="text-lg font-semibold">Lorem, ipsum.</h2>
                            <p class="text-sm text-black/50">&#8369; 5,000.00&#47;night</p>
                            <p class="mt-3 text-justify max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui at excepturi quasi provident optio est porro dicta modi, molestias pariatur id in iste natus minus.</p>
                        </hgroup>
                        
                        <h3 class="text-md font-semibold">Room Amenities</h3>
                        
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3"><span class="block material-symbols-outlined">wifi</span><span class="block">Lorem, ipsum dolor.</span></li>
                            <li class="flex items-center gap-3"><span class="block material-symbols-outlined">liquor</span><span class="block">Lorem, ipsum dolor.</span></li>
                            <li class="flex items-center gap-3"><span class="block material-symbols-outlined">king_bed</span><span class="block">Lorem, ipsum dolor.</span></li>
                            <li class="flex items-center gap-3"><span class="block material-symbols-outlined">kitchen</span><span class="block">Lorem, ipsum dolor.</span></li>
                            <li class="flex items-center gap-3"><span class="block material-symbols-outlined">tv_gen</span><span class="block">Lorem, ipsum dolor.</span></li>
                        </ul>
                        
                    </div>
                </div>
                <!-- Reservation -->
                <form action="" class="p-3 rounded-md space-y-3 grid">
                    <h2 class="font-semibold text-lg">Reserve a room now!</h2>

                    <h3 class="font-semibold">Number of Guests</h3>

                    <div class="flex">
                        <button type="button" class="less-btn py-2 px-3 w-16 flex-shrink-0 border border-r-0 grid place-items-center rounded-s-md">
                            <span class="material-symbols-outlined opacity-75">remove</span>
                        </button>
                        <input type="number" name="adult_count" class="[appearance:textfield] px-3 py-2 w-full border peer" min="1" placeholder="Adult" required>
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

                    <h3 class="font-semibold">Reservation Date</h3>

                    <div class="flex items-center">
                        <label for="check_in_date" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md">From</label>
                        <input type="date" name="check_in_date" id="check_in_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-e-md" required>
                    </div>

                    <div class="flex items-center">
                        <label for="check_out_date" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md peer peer-disabled:opacity-50">To</label>
                        <input type="date" name="check_out_date" id="check_out_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-e-md disabled:opacity-50 peer" disabled required>
                    </div>

                    <button type="submit" name="submit" 
                        class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                        <span>Send Reservation</span>
                        <span class="material-symbols-outlined ml-0 opacity-0 transition-all ease-in-out absolute top-1/2 -translate-y-1/2 group-hover:opacity-100 group-hover:ml-3">send</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include('../components/footer.php'); ?>
</body>

</html>