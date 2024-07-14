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
        <div class="p-3 max-w-7xl mx-auto relative flex gap-5">
            <?php include('../components/guest-nav.php'); ?>
            
            <div class="bg-white rounded-md p-3 border border-slate-200 w-full">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>