<?php 
    session_start();
    if (!isset($_SESSION["first_name"])) {
        header("Location: ../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../components/head.php');
    ?>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('../components/nav.php'); ?>
    
    <main class="py-20 min-h-screen">
        <div class="p-3 max-w-7xl mx-auto relative flex gap-10">
            <?php include('../components/guest-nav.php'); ?>
            
            <div class="space-y-5 w-full">
                <div class="bg-white rounded-md p-3 shadow-lg w-full space-y-5">
                    <div class="flex justify-between items-start">
                        <hgroup>
                            <h1 class="text-2xl font-semibold">Reservations</h1>
                            <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, dolor?</p>
                        </hgroup>

                        <a href="../reservation/reservation.php#form" class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-blue-500 hover:bg-blue-600 transition-all ease-in-out">Create Reservation</a>
                    </div>

                    <div>
                        <!-- Header -->
                        <div class="grid grid-cols-4 bg-slate-50 border border-slate-200 px-5 py-2 rounded-md font-semibold">
                            <p>Reservation ID</p>
                            <p>Check-in Date</p>
                            <p>Check-out Date</p>
                        </div>
                        <!-- Body -->
                        <div class="mt-1 space-y-1">
                            <!-- Template -->
                             <?php 
                                for ($reservation = 0; $reservation < 3; $reservation++) {
                                    echo '
                                        <div class="px-5 grid grid-cols-4 items-center rounded-md even:bg-slate-50/50">
                                            <p>R001012024-103501</p>
                                            <p>January 1, 2024</p>
                                            <p>January 2, 2024</p>
                                            <div class="flex justify-end">
                                                <a href="reservation/r.php?id=0" class="px-3 py-2 -mr-5 font-semibold bg-white inline-block hover:bg-slate-50 rounded-md border border-slate-200 transition-all ease-in-out">View Reservation</a>
                                            </div>
                                        </div>
                                    ';
                                }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>