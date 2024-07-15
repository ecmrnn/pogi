<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('components/head.php');
    ?>
    <script defer>
        function characterCount() {
            let span = document.querySelector("#characters");
            let message = document.querySelector("#message");
            const maxLength = message.getAttribute("maxlength");

            span.innerHTML = parseInt(maxLength) - parseInt(message.value.length);
        }
    </script>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('components/nav.php'); ?>

    <main class="pt-40 min-h-screen">
        <div class="px-3 max-w-7xl mx-auto relative">
            <div class="space-y-5">
                <h1 class="text-3xl text-center font-semibold
                    md:text-left md:text-5xl
                    lg:text-6xl">
                    Get in touch!
                </h1>
                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, delectus.</p>
                
                <h2 class="text-center md:text-left text-2xl font-semibold">Prestige Oasis Grandeur Inn</h2>

                <div class="flex justify-center md:justify-start items-center gap-3">
                    <span class="material-symbols-outlined">smartphone</span>
                    <span class="font-semibold">Phone Numbers</span>
                </div>

                <ul class="mx-auto w-max md:w-auto">
                    <li>+63 968 5575 486</li>
                    <li>+63 926 2355 376</li>
                    <li>+63 917 5800 671</li>
                </ul>

                <div class="flex justify-center md:justify-start items-center gap-3">
                    <span class="material-symbols-outlined">map</span>
                    <span class="font-semibold">Address</span>
                </div>

                <p class="text-center md:text-left mx-auto md:mx-0 max-w-sm">32nd St cor Lane A Makati, National Capital Region, 1634</p>
            </div>

            <form action="" class="my-20 p-5 sm:w-[400px] bg-white/80 backdrop-blur-md shadow-lg rounded-md space-y-3 grid top-0 right-3
                lg:my-0 lg:absolute">
                <span class="material-symbols-outlined">mail</span>
                <h2 class="font-semibold text-2xl">Send an Email</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, quo!</p>

                <label for="email" class="font-semibold">Email Address</label>
                <input type="email" name="email" id="email" class="px-3 py-2 w-full rounded-md border peer" placeholder="juan.delacruz@mail.com" required>
                
                <label for="subject" class="font-semibold">Subject &amp; Message</label>
                <input type="text" name="subject" id="subject" class="px-3 py-2 w-full rounded-md border peer" placeholder="What do you want to talk about?" required>

                <textarea name="message" id="message" class="px-3 py-2 w-full rounded-md border peer h-40" maxlength="200" placeholder="Your message goes here..." onkeyup="characterCount()" required></textarea>

                <p class="text-xs"><span id="characters">200</span> &#47; 200 Characters</p>

                <button type="submit" name="submit" 
                    class="px-3 py-2 text-white rounded-md font-semibold bg-blue-500 hover:bg-blue-600 text-white transition-all ease-in-out group relative">
                    <span>Send Email</span>
                    <span class="material-symbols-outlined ml-0 opacity-0 transition-all ease-in-out absolute top-1/2 -translate-y-1/2 group-hover:opacity-100 group-hover:ml-3">send</span>
                </button>
            </form>
        </div>
    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>