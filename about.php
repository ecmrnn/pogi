<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('components/head.php');
    ?>
    <script src="assets/js/reservation.js" defer></script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="pt-40 min-h-screen">
        <div class="px-3 max-w-7xl mx-auto grid md:grid-cols-2 gap-5">
            <div class="space-y-5">
                <h1 class="text-3xl text-center font-semibold
                    md:text-left
                    lg:text-4xl">
                    Prestige Oasis Grandeur Inn
                </h1>
                
                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>

                <div class="w-full max-w-sm mx-auto md:mx-0 rounded-md aspect-video bg-slate-200 grid place-items-center">
                    <!-- Image -->
                </div>

                <a href="reservation.php" class="px-4 py-2 w-max mx-auto md:mx-0 text-center rounded-md text-white font-semibold bg-blue-500 block hover:bg-blue-600 transition-all ease-in-out">
                    Book a Room
                </a>
            </div>

            <div class="py-20 md:py-0 space-y-10">
                <div class="flex max-w-sm md:max-w-lg mx-auto justify-center items-start md:items-center gap-5 transition-all group">
                    <div class="p-5 grid place-items-center rounded-md group-hover:border-transparent group-hover:bg-blue-500 transition-all ease-in-out">
                        <span class="material-symbols-outlined select-none group-hover:text-white">air_purifier_gen</span>
                    </div>
                    <div class="space-y-2 rounded-md">
                        <h2 class="font-semibold text-lg">Fully Sanitized Rooms</h2>
                        <p class="w-full max-w-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, ratione! Omnis, veritatis.</p>
                    </div>
                </div>

                <div class="flex max-w-sm md:max-w-lg mx-auto justify-center items-start md:items-center gap-5 transition-all group">
                    <div class="p-5 grid place-items-center rounded-md group-hover:border-transparent group-hover:bg-blue-500 transition-all ease-in-out">
                        <span class="material-symbols-outlined select-none group-hover:text-white">cruelty_free</span>
                    </div>
                    <div class="space-y-2 rounded-md">
                        <h2 class="font-semibold text-lg">Pets are allowed</h2>
                        <p class="w-full max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea fugit reprehenderit velit.</p>
                    </div>
                </div>

                <div class="flex max-w-sm md:max-w-lg mx-auto justify-center items-start md:items-center gap-5 transition-all group">
                    <div class="p-5 grid place-items-center rounded-md group-hover:border-transparent group-hover:bg-blue-500 transition-all ease-in-out">
                        <span class="material-symbols-outlined select-none group-hover:text-white">pool</span>
                    </div>
                    <div class="space-y-2 rounded-md">
                        <h2 class="font-semibold text-lg">Various Indoor Activities</h2>
                        <p class="w-full max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, id. Rerum cum maxime porro!</p>
                    </div>
                </div>

                <div class="flex max-w-sm md:max-w-lg mx-auto justify-center items-start md:items-center gap-5 transition-all group">
                    <div class="p-5 grid place-items-center rounded-md group-hover:border-transparent group-hover:bg-blue-500 transition-all ease-in-out">
                        <span class="material-symbols-outlined select-none group-hover:text-white">toys</span>
                    </div>
                    <div class="space-y-2 rounded-md">
                        <h2 class="font-semibold text-lg">Playground for Children</h2>
                        <p class="w-full max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, eos! Aut, ea!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>