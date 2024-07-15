<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('components/head.php');
    ?>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="py-40">
        <div class="px-3 max-w-7xl mx-auto">
            <hgroup class="space-y-5">
                <h1 class="text-3xl text-center font-semibold
                    md:text-left md:text-5xl
                    lg:text-6xl">
                    Luxurious Suites, <br>
                    Deluxe Experience
                </h1>
                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>
                <a href="#rooms" class="px-4 py-2 w-max mx-auto md:mx-0 text-center rounded-md text-white font-semibold bg-blue-500 block hover:bg-blue-600 transition-all ease-in-out">
                    Visit Rooms
                </a>
            </hgroup>
        </div>
    </main>

    <section id="rooms" class="py-20 bg-white min-h-screen">
        <div class="px-3 space-y-5 max-w-7xl mx-auto">
            <h2 class="font-semibold text-2xl">Available Rooms</h2>

            <div class="grid grid-cols-3 gap-5">
                <?php
                    for($room = 0; $room < 3; $room++) {
                        echo '
                        <div class="p-3 border rounded-md space-y-3">
                            <div class="aspect-video w-full bg-slate-200 rounded-md">
                                <!-- Image -->
                            </div>
    
                            <hgroup>
                                <h3 class="text-lg font-semibold">Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, obcaecati.</p>
                            </hgroup>
    
                            <div class="flex gap-3">
                                <a href="rooms/r.php?id=' . $room . '"
                                    class="px-4 py-2 w-max mx-auto md:mx-0 text-center text-blue-500 rounded-md font-semibold bg-white block border hover:bg-slate-50 transition-all ease-in-out">
                                    View Details
                                </a>
                                <a href="#" class="px-4 py-2 w-max mx-auto md:mx-0 text-center rounded-md text-white font-semibold bg-blue-500 block hover:bg-blue-600 transition-all ease-in-out">
                                    Book this room
                                </a>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </section>

    <?php include('components/footer.php'); ?>
</body>

</html>