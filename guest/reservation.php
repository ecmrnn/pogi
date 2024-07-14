<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../components/head.php');
    ?>
    <script src="../assets/js/password.js" defer></script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('../components/nav.php'); ?>
    
    <main class="py-20 min-h-screen">
        <div class="p-3 max-w-7xl mx-auto relative flex gap-10">
            <?php include('../components/guest-nav.php'); ?>
            
            <div class="space-y-5 w-full">
                <div class="bg-white rounded-md p-3 shadow-lg w-full space-y-5">
                    <hgroup>
                        <h1 class="text-2xl font-semibold">Reservation</h1>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, dolor?</p>
                    </hgroup>
                </div>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>