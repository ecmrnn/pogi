<?php 
    $path = explode('/', $_SERVER['PHP_SELF']);
    $protocol = isset($_SERVER['HTTPS']) && 
    $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $base_url = $protocol . $_SERVER['HTTP_HOST'] . '/activities/FINALS/PROJECT/';
?>

<nav>
    <p class="rounded-md font-semibold text-sm transition-all ease-in-out" href="dashboard.php">Main Menu</p>

    <div class="mt-5 space-y-1">
        <a class="rounded-md block font-semibold text-sm transition-all ease-in-out flex items-center gap-3 group" href="dashboard.php">
            <div class="grid place-items-center"><span class="<?php echo in_array('dashboard.php', $path) ? 'text-blue-500' : '';?> material-symbols-outlined bg-white p-1 border border-slate-200 rounded-md">grid_view</span></div>
            <span class="group-hover:text-blue-500 transition-all ease-in-out <?php echo in_array('dashboard.php', $path) ? 'text-blue-500' : '';?>">Dashboard</span>
        </a>
        <a class="rounded-md block font-semibold text-sm transition-all ease-in-out flex items-center gap-3 group" href="reservation.php">
            <div class="grid place-items-center"><span class="<?php echo in_array('reservation.php', $path) ? 'text-blue-500' : '';?> material-symbols-outlined bg-white p-1 border border-slate-200 rounded-md">calendar_month</span></div>
            <span class="group-hover:text-blue-500 transition-all ease-in-out <?php echo in_array('reservation.php', $path) ? 'text-blue-500' : '';?>">Reservations</span>
        </a>
        <a class="rounded-md block font-semibold text-sm transition-all ease-in-out flex items-center gap-3 group" href="settings.php">
            <div class="grid place-items-center"><span class="<?php echo in_array('settings.php', $path) ? 'text-blue-500' : '';?> material-symbols-outlined bg-white p-1 border border-slate-200 rounded-md">settings</span></div>
            <span class="group-hover:text-blue-500 transition-all ease-in-out <?php echo in_array('settings.php', $path) ? 'text-blue-500' : '';?>">Settings</span>
        </a>
    </div>
</nav>