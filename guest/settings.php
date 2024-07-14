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
                    
                    <form action="" class="grid grid-cols-2 gap-3">
                        <div class="space-y-3 p-3 border rounded-md">
                            <h2 class="text-lg font-semibold">Personal Information</h2>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="space-y-3">
                                    <label for="first_name" class="font-semibold">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="px-3 py-2 w-full rounded-md border" placeholder="Juan" required>
                                </div>
                                <div class="space-y-3">
                                    <label for="last_name" class="font-semibold">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="px-3 py-2 w-full rounded-md border" placeholder="Dela Cruz" required>
                                </div>
                            </div>
                    
                            <label for="address" class="block font-semibold">Address</label>
                            <input type="text" name="address" id="address" class="px-3 py-2 w-full rounded-md border" placeholder="123 sample street ..." required>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="space-y-3">
                                    <label for="contact_number" class="block text-md font-semibold">Contact Number</label>
                                    <div class="flex items-center">
                                        <span for="contact_number" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md">+63</span>
                                        <input type="text" name="contact_number" id="contact_number" class="px-3 w-full py-2 border rounded-e-md" placeholder="900 0000 000" required>
                                    </div>
                                </div>
                    
                                <div class="space-y-3">
                                    <label for="email" class="font-semibold">Email</label>
                                    <input type="text" name="email" id="email" class="px-3 py-2 w-full rounded-md border" placeholder="Dela Cruz" required>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3 p-3 border rounded-md">
                            <h2 class="text-lg font-semibold">Account Information</h2>
                            <label for="username" class="block font-semibold">Username</label>
                            <input type="text" name="username" id="username" class="px-3 py-2 w-full rounded-md border" placeholder="juan.delacruz" required>
                    
                            <label for="password" class="block font-semibold">Password</label>
                            <input type="password" name="password" id="password" class="password px-3 py-2 w-full rounded-md border" placeholder="********" required>
                            <input type="password" name="confirm_password" id="confirm_password" class="password px-3 py-2 w-full rounded-md border" placeholder="********" required>

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
                        <button class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-blue-500 hover:bg-blue-600 transition-all ease-in-out w-max ml-auto">Update Account</but>
                    </form>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-md p-3 shadow-lg w-full space-y-5">
                    <hgroup>
                        <h2 class="text-lg font-semibold text-red-400">Danger Zone</h2>
                        <p class="max-w-sm text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eius!</p>
                    </hgroup>

                    <form action="" class="space-y-3">
                        <p class="max-w-sm">To deactivate your account, enter your password in the field below.</p>
                        <label for="delete_password" class="block font-semibold">Password</label>
                        <div class="flex gap-3">
                            <input type="password" name="delete_password" id="delete_password" class="max-w-sm px-3 py-2 w-full rounded-md border border-red-200 text-red-400 focus:outline-none focus:ring-2 focus-within:ring-red-400" placeholder="********" required>
                            <button class="py-2 px-5 rounded-md font-semibold text-sm text-white bg-red-400 hover:bg-red-500 transition-all ease-in-out w-max focus:outline-none focus:ring-2 focus-within:ring-red-600">Deacativate Account</but>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>