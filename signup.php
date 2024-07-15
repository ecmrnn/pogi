<?php 
    session_start();
    if (isset($_SESSION["first_name"])) {
        header("Location: guest/dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('components/head.php');
    ?>
    <script src="assets/js/password.js" defer></script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="pt-40 min-h-screen">
        <div class="px-3 max-w-7xl mx-auto relative">
            <form action="users/add.php" method="POST" class="p-5 mx-auto w-full max-w-[400px] bg-white/80 backdrop-blur-md shadow-lg rounded-md space-y-3 grid top-0 right-3" autocomplete="off">
                <span class="material-symbols-outlined">signature</span>
                <h2 class="font-semibold text-2xl">Signup</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, quo!</p>
                
                <!-- General Error message -->
                <p class="<?php echo isset($_GET["err_db"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <?php 
                        if (isset($_GET["err_db"])) {
                            if ($_GET["err_db"] == 'dupe_u') {
                                echo 'Signup failed, username already in used.';
                            } 
                        }
                    ?>
                </p>
                
                <label for="first_name" class="font-semibold">First &amp; Last Name</label>
                <input type="text" name="first_name" id="first_name" class="px-3 py-2 w-full rounded-md border peer" placeholder="Juan" value="<?php echo isset($_GET["fname"]) ? $_GET["fname"] : null ?>" required>
                <input type="text" name="last_name" id="last_name" class="px-3 py-2 w-full rounded-md border peer" placeholder="Dela Cruz" value="<?php echo isset($_GET["lname"]) ? $_GET["lname"] : null ?>" required>

                <!-- First Name Error message -->
                <div class="<?php echo isset($_GET["err_f"]) || isset($_GET["err_l"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <div>
                        <?php
                            if (isset($_GET["err_f"]) && isset($_GET["err_l"])) {
                                echo '<p>First and Last name is required.</p>';
                            } else if (isset($_GET["err_f"])) {
                                echo '<p>First name is required.</p>';
                            } else {
                                echo '<p>Last name is required.</p>';
                            }
                        ?>
                    </div>
                </div>

                <label for="username" class="font-semibold">Username</label>
                <input type="text" name="username" id="username" class="px-3 py-2 w-full rounded-md border peer" placeholder="juan.delacruz" required>

                <!-- Username Error message -->
                <div class="<?php echo isset($_GET["err_u"]) || isset($_GET["err_cp"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <div>
                        <?php
                            if (isset($_GET["err_u"])) {
                                if ($_GET["err_u"] == 'special_char') {
                                    echo '<p>Special characters are not allowed.</p>';
                                }
                                elseif ($_GET["err_u"] == 'not_null') {
                                    echo '<p>Username is required.</p>';
                                }
                            }
                        ?>
                    </div>
                </div>

                <label for="password" class="font-semibold">Password</label>
                <input type="password" name="password" id="password" class="password px-3 py-2 w-full rounded-md border peer" placeholder="********" required>
                <input type="password" name="confirm_password" id="confirm_password" class="password px-3 py-2 w-full rounded-md border peer" placeholder="********" required>

                <!-- Password Error message -->
                <div class="<?php echo isset($_GET["err_p"]) || isset($_GET["err_cp"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <div>
                        <?php
                            if (isset($_GET["err_p"])) {
                                if ($_GET["err_p"] == 'too_short') {
                                    echo '<p>Password must be atleast 8 characters.</p>';
                                }
                                elseif ($_GET["err_p"] == 'not_null') {
                                    echo '<p>Password is required.</p>';
                                }
                            }
                            if (isset($_GET["err_cp"])) {
                                if ($_GET["err_cp"] == 'not_equal') {
                                    echo '<p>Password is not equal.</p>';
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="relative">
                        <input type="checkbox" name="togglePassword" id="togglePassword"
                            class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                        <label for="togglePassword" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                    </div>
                    <label for="togglePassword" class="w-max text-xs select-none">Show Password</label>
                </div>

                <button type="submit" name="submit" 
                    class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                    <span>Sign me up!</span>
                    <span class="material-symbols-outlined ml-0 opacity-0 transition-all ease-in-out absolute top-1/2 -translate-y-1/2 group-hover:opacity-100 group-hover:ml-3">login</span>
                </button>

                <a href="login.php" class="mx-auto w-max">Already have an account?</a>
            </form>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>