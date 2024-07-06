<?php
    $min_date = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('components/head.php');
    ?>
    <script src="assets/js/reservation.js" defer></script>
</head>

<body class="text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="pt-40 min-h-screen">
        <div class="px-3 max-w-7xl mx-auto relative">
            <hgroup class="space-y-5">
                <h1 class="text-3xl text-center font-semibold
                    md:text-left md:text-5xl
                    lg:text-6xl">
                    Prestige Oasis <br> Grandeur Inn
                </h1>
                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>
                <a href="reservation.php" class="px-4 py-2 w-max mx-auto md:mx-0 text-center rounded-md text-white font-semibold bg-blue-500 block hover:bg-blue-600 transition-all ease-in-out">
                    Book a Room
                </a>
            </hgroup>

            <form action="" class="my-20 p-5 sm:w-[400px] bg-white/80 backdrop-blur-md shadow-lg rounded-md space-y-5 grid top-0 right-3
                lg:my-0 lg:absolute">
                <h2 class="font-semibold text-2xl">Reserve a room now!</h2>

                <h3 class="font-semibold">Number of Guests</h3>

                <div class="flex">
                    <button type="button" class="less-btn py-2 px-3 w-16 flex-shrink-0 border border-r-0 grid place-items-center rounded-s-md">
                        <span class="material-symbols-outlined font-semibold">remove</span>
                    </button>
                    <input type="text" name="adult_count" class="px-3 py-2 w-full border peer invalid:border-pink-500" placeholder="Adult">
                    <button type="button" class="add-btn py-2 px-3 w-16 flex-shrink-0 border border-l-0 grid place-items-center rounded-e-md">
                        <span class="material-symbols-outlined font-semibold">add</span>
                    </button>
                </div>

                <div class="flex">
                    <button type="button" class="less-btn py-2 px-3 w-16 flex-shrink-0 border grid place-items-center rounded-s-md">
                        <span class="material-symbols-outlined font-semibold">remove</span>
                    </button>
                    <input type="text" name="children_count" class="px-3 py-2 w-full border border-x-0" min="0" placeholder="Children">
                    <button type="button" class="add-btn py-2 px-3 w-16 flex-shrink-0 border grid place-items-center rounded-e-md">
                        <span class="material-symbols-outlined font-semibold">add</span>
                    </button>
                </div>
    
                <h3 class="font-semibold">Reservation Date</h3>

                <div class="flex items-center">
                    <label for="check_in_date" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md">From</label>
                    <input type="date" name="check_in_date" id="check_in_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-e-md">
                </div>

                <div class="flex items-center">
                    <label for="check_out_date" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md peer peer-disabled:opacity-50">To</label>
                    <input type="date" name="check_out_date" id="check_out_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-e-md disabled:opacity-50 peer" disabled>
                </div>

                <button type="submit" name="submit" 
                    class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                    <span>Send Reservation</span>
                    <span class="material-symbols-outlined ml-0 opacity-0 transition-all ease-in-out absolute group-hover:opacity-100 group-hover:ml-3">send</span>
                </button>
            </form>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>