<?php 
    $path = explode('/', $_SERVER['PHP_SELF']);
    $protocol = isset($_SERVER['HTTPS']) && 
    $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $base_url = $protocol . $_SERVER['HTTP_HOST'] . '/activities/FINALS/PROJECT/';
?>

<nav class="fixed w-screen top-0 border-b z-50">
    <!-- Backdrop For Google -->
     <div class="bg-white/75 backdrop-blur-md w-screen h-full absolute -z-50"></div>

    <!-- Desktop -->
    <div class="py-2 max-w-7xl mx-auto hidden md:flex justify-between">
        <div>
            <a class="py-2 px-3 rounded-md inline-block font-semibold text-sm transition-all ease-in-out <?php echo in_array('index.php', $path) ? 'text-blue-500' : 'hover:text-slate-800';?>" href="<?php echo $base_url; ?>index.php">Home</a>
            <a class="py-2 px-3 rounded-md inline-block font-semibold text-sm transition-all ease-in-out <?php echo in_array('rooms.php', $path) || in_array('rooms', $path) ? 'text-blue-500' : 'hover:text-slate-800';?>" href="<?php echo $base_url; ?>rooms.php">Rooms</a>
            <a class="py-2 px-3 rounded-md inline-block font-semibold text-sm transition-all ease-in-out <?php echo in_array('about.php', $path) ? 'text-blue-500' : 'hover:text-slate-800';?>" href="<?php echo $base_url; ?>about.php">About</a>
        </div>
        <div>
            <a class="py-2 px-3 rounded-md inline-block font-semibold text-sm transition-all ease-in-out <?php echo in_array('reservation.php', $path) ? 'text-blue-500' : 'hover:text-slate-800';?>" href="<?php echo $base_url; ?>reservation/reservation.php">Reservation</a>
            <a class="py-2 px-3 rounded-md inline-block font-semibold text-sm transition-all ease-in-out <?php echo in_array('contact.php', $path) ? 'text-blue-500' : 'hover:text-slate-800';?>" href="<?php echo $base_url; ?>contact.php">Contact</a>
            <a class="py-2 px-5 rounded-md mx-3 inline-block font-semibold text-sm
                text-white bg-blue-500 hover:bg-blue-600 transition-all ease-in-out"
                href="<?php echo $base_url; ?>login.php">
                <?php 
                    isset($_SESSION["first_name"]) ? $output = $_SESSION["first_name"][0] . $_SESSION["last_name"][0] : $output = 'Login';
                    echo $output;
                ?>
            </a>
        </div>
    </div>

    <!-- Mobile -->
     <div class="md:hidden px-3 py-2 flex justify-between items-center">
        <a href="index.php" class="px-2">Logo</a>

        <button id="openBtn" class="p-2 rounded-md hover:bg-slate-200 grid place-item-center transition-all ease-in-out">
            <span class="material-symbols-outlined">menu</span>
        </button>
        
        <!-- Slide Navigation -->
        <div id="menu" class="fixed h-screen w-screen px-3 py-2 bg-slate-100/20 backdrop-blur-md right-0 top-0 translate-x-full translate-all ease-in-out">
            <div class="pb-2 flex items-center justify-between">
                <p class="font-semibold px-2">Main Menu</p>
                
                <button id="closeBtn" class="p-2 rounded-md hover:bg-slate-300 grid place-item-center transition-all ease-in-out">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="border-t">
                
            </div>
         </div>
     </div>
</nav>