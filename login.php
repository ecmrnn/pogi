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
            <form action="" class="p-5 mx-auto w-full max-w-[400px] bg-white/80 backdrop-blur-md shadow-lg rounded-md space-y-3 grid top-0 right-3" autocomplete="off">
                <span class="material-symbols-outlined">lock</span>
                <h2 class="font-semibold text-2xl">Login</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, quo!</p>
                
                <label for="username" class="font-semibold">Email &#47; Username</label>
                <input type="text" name="username" id="username" class="px-3 py-2 w-full rounded-md border peer" placeholder="juan.delacruz@mail.com" required>

                <label for="password" class="font-semibold">Password</label>
                <input type="password" name="password" id="password" class="px-3 py-2 w-full rounded-md border peer" placeholder="********" required>

                <div class="flex gap-3">
                    <div class="relative">
                        <input type="checkbox" name="togglePassword" id="togglePassword" onchange="togglePassword()"
                            class="appearance-none w-4 h-4 border rounded-md bg-white checked:bg-blue-500 checked:border-blue-500">
                        <label for="togglePassword" class="material-symbols-outlined select-none absolute top-0 text-xs left-1/2 -translate-x-1/2 font-bold text-white">check</label>
                    </div>
                    <label for="togglePassword" class="w-max text-xs select-none">Show Password</label>
                </div>

                <button type="submit" name="submit" 
                    class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                    <span>Login</span>
                    <span class="material-symbols-outlined ml-0 opacity-0 transition-all ease-in-out absolute top-1/2 -translate-y-1/2 group-hover:opacity-100 group-hover:ml-3">login</span>
                </button>

                <a href="signup.php" class="mx-auto w-max">Doesn&apos;t have an account yet?</a>
            </form>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>