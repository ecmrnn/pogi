<!DOCTYPE html>
<html lang="en">

<?php 
    include('components/head.php');
?>

<body class="text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="pt-40 min-h-screen">
        <div class="px-3 max-w-7xl mx-auto relative">
            <hgroup class="space-y-5">
                <h1 class="text-6xl font-semibold">Prestige Oasis <br> Grandeur Inn</h1>
                <p class="max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>
                <a href="reservation.php" class="px-4 py-2 rounded-md text-white font-semibold bg-blue-500 inline-block hover:bg-blue-600 transition-all ease-in-out">
                    Book a Room
                </a>
            </hgroup>

            <form action="" class="my-20 mx-auto md:my-0 md:absolute p-5 sm:w-[400px] bg-white/80 backdrop-blur-md shadow-lg rounded-md space-y-3 grid top-0 right-3">
                <h2 class="font-semibold text-2xl">Reserve a room now!</h2>
                <h3 class="font-semibold">Number of Guests</h3>
                <input type="text" name="adult_count" class="px-3 py-2 border rounded-md" placeholder="Adult">
                <input type="text" name="children_count" class="px-3 py-2 border rounded-md" placeholder="Children">
    
                <h3 class="font-semibold">Reservation Date</h3>
                <input type="date" name="check_in_date" class="px-3 py-2 border rounded-md">
                <input type="date" name="check_out_date" class="px-3 py-2 border rounded-md">

                <button type="submit" name="submit" 
                    class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                    <span>Send Reservation</span>
                    <span class="material-symbols-outlined ml-3 scale-0 transition-all ease-in-out absolute">send</span>
                </button>
            </form>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>