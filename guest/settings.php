<?php 
    session_start();
    if (!isset($_SESSION["first_name"])) {
        header("Location: ../login.php");
    }
    include("../users/show.php");
?>

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
            
            <div class="space-y-5">
                <div class="bg-white rounded-md p-3 shadow-lg w-full space-y-5">
                    <hgroup>
                        <h1 class="text-2xl font-semibold">Settings</h1>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, dolor?</p>
                    </hgroup>
                    
                    
                    <form action="../users/edit.php" method="POST" class="grid grid-cols-2 gap-3">
                        <!-- Deactivation Password Error message -->
                        <div class="<?php echo isset($_GET["err_dp"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3 col-span-2">
                            <span class="material-symbols-outlined">error</span>
                            <div>
                                <?php
                                    if (isset($_GET["err_dp"])) {
                                        if ($_GET["err_dp"] == 'not_equal') {
                                            echo '<p>Account deactivation failed, incorrect password.</p>';
                                        }
                                        elseif ($_GET["err_dp"] == 'not_null') {
                                            echo '<p>Account deactivation failed, password is required.</p>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    
                        <!-- Success created user message -->
                        <p class="<?php echo isset($_GET["success"]) ? '' : 'hidden' ?> px-3 py-2 bg-green-50 border border-green-400 rounded-md text-green-500 flex items-center gap-3 col-span-2">
                            <span class="material-symbols-outlined">celebration</span>
                            <?php 
                                if (isset($_GET["success"])) {
                                    if ($_GET["success"] == 'updated_user') {
                                        echo 'Account updated successfuly!';
                                    } 
                                }
                                ?>
                            <button type="button" onclick="this.parentElement.classList.add('hidden')" class="material-symbols-outlined ml-auto">close</button>
                        </p>

                        <!-- System Error message -->
                        <div class="<?php echo isset($_GET["error_db"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                            <span class="material-symbols-outlined">error</span>
                            <div>
                                <?php
                                    if (isset($_GET["error_db"])) {
                                        if ($_GET["err_cn"] == 'unknown') {
                                            echo '<p>Database error, try again later.</p>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="space-y-3 p-3 border rounded-md">
                            <h2 class="text-lg font-semibold">Personal Information</h2>

                            
                            <div class="grid grid-cols-2 gap-3">
                                <div class="space-y-3">
                                    <label for="first_name" class="font-semibold">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="px-3 py-2 w-full rounded-md border" placeholder="<?php echo $_SESSION["first_name"] ?>" value="<?php echo $_SESSION["first_name"] ?>" required>
                                </div>
                                <div class="space-y-3">
                                    <label for="last_name" class="font-semibold">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="px-3 py-2 w-full rounded-md border" placeholder="<?php echo $_SESSION["last_name"] ?>" value="<?php echo $_SESSION["last_name"] ?>" required>
                                </div>

                                <!-- First Name Error message -->
                                <div class="<?php echo isset($_GET["err_f"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                                    <span class="material-symbols-outlined">error</span>
                                    <div>
                                        <?php
                                            if (isset($_GET["err_f"])) {
                                                if ($_GET["err_f"] == 'not_null') {
                                                    echo '<p>First name is required.</p>';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>

                                 <!-- Filler for Contact Number -->
                                 <?php echo !isset($_GET["err_f"]) && isset($_GET["err_l"]) ? '<div></div>' : '' ?>

                                <!-- Contact Number Error message -->
                                <div class="<?php echo isset($_GET["err_l"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                                    <span class="material-symbols-outlined">error</span>
                                    <div>
                                        <?php
                                            if (isset($_GET["err_l"])) {
                                                if ($_GET["err_l"] == 'not_null') {
                                                    echo '<p>Last name is required.</p>';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                    
                            <label for="address" class="block font-semibold">Address</label>
                            <input type="text" name="address" id="address" class="px-3 py-2 w-full rounded-md border" placeholder="<?php echo $user["address"] == '' ? '123 Sample Street...' : $user["address"]; ?>" value="<?php echo $user["address"]; ?>">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="space-y-3">
                                    <label for="contact_number" class="block text-md font-semibold">Contact Number</label>
                                    <div class="flex items-center">
                                        <span for="contact_number" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md">+63</span>
                                        <input type="text" name="contact_number" id="contact_number" class="px-3 w-full py-2 border rounded-e-md" maxlength="11" placeholder="<?php echo $user["contact_number"] == '' ? '900 0000 000' : $user["contact_number"];; ?>" value="<?php echo $user["contact_number"]; ?>">
                                    </div>
                                </div>
                    
                                <div class="space-y-3">
                                    <label for="email" class="font-semibold">Email</label>
                                    <input type="text" name="email" id="email" class="px-3 py-2 w-full rounded-md border" placeholder="<?php echo $user["email"] == '' ? 'test@mail.com' : $user["email"];?>" value="<?php echo $user["email"]?>">
                                </div>

                                <!-- Contact Number Error message -->
                                <div class="<?php echo isset($_GET["err_cn"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                                    <span class="material-symbols-outlined">error</span>
                                    <div>
                                        <?php
                                            if (isset($_GET["err_cn"])) {
                                                if ($_GET["err_cn"] == 'nan') {
                                                    echo '<p>Invalid contact number.</p>';
                                                }
                                                else if ($_GET["err_cn"] == 'invalid_format') {
                                                    echo '<p>Incorrect number format.</p>';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>

                                <!-- Filler for Contact Number -->
                                <?php echo !isset($_GET["err_cn"]) && isset($_GET["err_em"]) ? '<div></div>' : '' ?>

                                <!-- Contact Number Error message -->
                                <div class="<?php echo isset($_GET["err_em"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                                    <span class="material-symbols-outlined">error</span>
                                    <div>
                                        <?php
                                            if (isset($_GET["err_em"])) {
                                                if ($_GET["err_em"] == 'invalid_format') {
                                                    echo '<p>Incorrect email format.</p>';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="space-y-3 p-3 border rounded-md">
                            <h2 class="text-lg font-semibold">Account Information</h2>
                            <label for="username" class="block font-semibold">Username</label>
                            <input type="text" name="username" id="username" class="px-3 py-2 w-full rounded-md border opacity-50" placeholder="<?php echo $_SESSION["username"]; ?>" value="<?php echo $_SESSION["username"]; ?>" readonly>
                    
                            <label for="password" class="block font-semibold">Password</label>
                            <input type="password" name="password" id="password" class="password px-3 py-2 w-full rounded-md border" placeholder="********">
                            <input type="password" name="confirm_password" id="confirm_password" class="password px-3 py-2 w-full rounded-md border" placeholder="********">

                            <!-- Password Error message -->
                            <div class="<?php echo isset($_GET["err_p"]) || isset($_GET["err_cp"]) ? '' : 'hidden' ?> px-3 py-2 bg-red-50 border border-red-200 rounded-md text-red-400 flex items-center gap-3">
                                <span class="material-symbols-outlined">error</span>
                                <div>
                                    <?php
                                        if (isset($_GET["err_p"])) {
                                            if ($_GET["err_p"] == 'too_short') {
                                                echo '<p>Password must be atleast 8 characters.</p>';
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
                        </div>
                        <div></div>
                        <button name="submit" class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-blue-500 hover:bg-blue-600 transition-all ease-in-out w-max ml-auto">Update Account</but>
                    </form>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-md p-3 w-full space-y-5">
                    <hgroup>
                        <h2 class="text-lg font-semibold text-red-400">Danger Zone</h2>
                        <p class="max-w-sm text-xs">Warning! Deactivating your account will prevent you from having access to your reservations. Reactivation of account will require you to contact our assigned personnels.</p>
                    </hgroup>

                    <form action="../users/delete.php" method="POST" class="space-y-3">
                        <p class="max-w-sm">To <strong>deactivate your account</strong>, enter your password in the field below.</p>
                        
                        <label for="password" class="block font-semibold">Password</label>
                        <div class="flex gap-3">
                            <input type="password" name="password" id="d_password" class="max-w-sm px-3 py-2 w-full rounded-md border border-red-200 text-red-400 focus:outline-none focus:ring-2 focus-within:ring-red-400" placeholder="********" required>
                            <button name="submit" class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-red-400 hover:bg-red-500 transition-all ease-in-out w-max focus:outline-none focus:ring-2 focus-within:ring-red-600">Deactivate Account</but>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>