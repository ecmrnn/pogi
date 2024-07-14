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
            
            <div class="bg-white rounded-md p-3 shadow-lg w-full space-y-3">
                <hgroup>
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                    <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt.</p>
                </hgroup>

                <div class="grid grid-cols-4 gap-3">
                    <a href="reservation.php" class="block gap-3 group">
                        <div class="p-3 rounded-md flex gap-3 items-center border border-transparent group-hover:border-slate-200 group-hover:shadow-md transition-all ease-in-out">
                            <div class="grid place-items-center rounded bg-blue-100 w-full max-w-[50px] aspect-square">
                                <span class="material-symbols-outlined">calendar_month</span>
                            </div>
                            <hgroup class="font-semibold">
                                <h2>Reservations</h2>
                                <p class="text-xs text-black/25 group-hover:text-slate-800/80 transition-all ease-in-out">History of reservations</p>
                            </hgroup>
                        </div>
                    </a>

                    <a href="settings.php" class="block group">
                        <div class="p-3 rounded-md flex gap-3 items-center border border-transparent group-hover:border-slate-200 group-hover:shadow-md transition-all ease-in-out">
                            <div class="grid place-items-center rounded bg-blue-100 w-full max-w-[50px] aspect-square">
                                <span class="material-symbols-outlined">settings</span>
                            </div>
                            <hgroup class="font-semibold">
                                <h2>Settings</h2>
                                <p class="text-xs text-black/25 group-hover:text-slate-800/80 transition-all ease-in-out">Update account information</p>
                            </hgroup>
                        </div>
                    </a>
                </div>

                <h2 class="text-lg font-semibold">Scheduled Reservations</h2>

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

                <h2 class="text-lg font-semibold">Events &amp; Announcements</h2>

                <div class="grid grid-cols-4 gap-3">
                    <div class="p-3 border rounded-md space-y-3">
                        <div class="flex gap-3 items-center">
                            <span class="material-symbols-outlined block">celebration</span>
                            <strong>Upcoming Promo!</strong>
                        </div>
                        <div class="aspect-video w-full bg-blue-100 rounded-md">
                            <!-- Thumbnail -->
                        </div>

                        <hgroup>
                            <h2 class="text-lg font-semibold">Birthday Promo Sale</h2>
                            <p class="text-xs text-black/50">Posted: January 1, 2024</p>
                        </hgroup>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, maiores?</p>
                    </div>

                    <div class="p-3 border rounded-md space-y-3">
                        <div class="flex gap-3 items-center">
                            <span class="material-symbols-outlined block">info</span>
                            <strong>Announcement</strong>
                        </div>
                        <div class="aspect-video w-full bg-blue-100 rounded-md">
                            <!-- Thumbnail -->
                        </div>

                        <hgroup>
                            <h2 class="text-lg font-semibold">System Maintenance</h2>
                            <p class="text-xs text-black/50">Posted: January 1, 2024</p>
                        </hgroup>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, maiores?</p>
                    </div>

                    <div class="p-3 border rounded-md space-y-3">
                        <div class="flex gap-3 items-center">
                            <span class="material-symbols-outlined block">info</span>
                            <strong>Announcement</strong>
                        </div>
                        <div class="aspect-video w-full bg-blue-100 rounded-md">
                            <!-- Thumbnail -->
                        </div>

                        <hgroup>
                            <h2 class="text-lg font-semibold">Lorem, ipsum dolor.</h2>
                            <p class="text-xs text-black/50">Posted: January 1, 2024</p>
                        </hgroup>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, maiores?</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>