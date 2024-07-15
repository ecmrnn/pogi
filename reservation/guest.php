<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../components/head.php');
    ?>
</head>

<body class="bg-slate-50 text-slate-800/80 text-sm">
    <?php include('../components/nav.php'); ?>

    <form action="payment.php" method="POST" class="py-20 bg-white min-h-screen">
        <div class="px-3 max-w-7xl mx-auto grid grid-cols-3 gap-5">
            <!-- Steps -->
            <div class="col-span-3 flex items-center gap-5 font-semibold">
                <div class="flex gap-3 items-center">
                    <div class="p-3 rounded border border-transparent bg-blue-500 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined text-white">check</span>
                    </div>
                    <p>Reservation <br> Details</p>
                </div>

                <div class="w-1/2 h-[1px] bg-blue-500"></div>
                
                <div class="flex gap-3 items-center">
                    <div class="p-3 rounded border border-transparent bg-blue-500 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined text-white">face</span>
                    </div>
                    <p>Guest <br> Details</p>
                </div>

                <div class="w-1/2 h-[1px] bg-slate-200"></div>

                <div class="flex gap-3 items-center opacity-50">
                    <div class="p-3 rounded border border-slate-200 bg-slate-50 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined">qr_code</span>
                    </div>
                    <p>Payment</p>
                </div>
            </div>

            <div>
                <!-- Reservation Details -->
                <div class="p-3 space-y-3 bg-white border rounded-md opacity-50">
                    <hgroup>
                        <h2 class="text-2xl font-semibold">Reservation Details</h2>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quibusdam.</p>
                    </hgroup>
                    <label for="adult_count" class="block text-md font-semibold">Number of Guests</label>
                    <input type="number" name="adult_count" id="adult_count" class="[appearance:textfield] px-3 py-2 w-full border rounded-md" min="1" placeholder="Adult" readonly>
                    <input type="number" name="children_count" class="[appearance:textfield] px-3 py-2 w-full border rounded-md" min="0" placeholder="Children" readonly>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-3">
                            <label for="check_in_date" class="text-md block font-semibold">Check-in Date</label>
                            <input type="date" name="check_in_date" id="check_in_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-md" readonly>
                        </div>
                
                        <div class="space-y-3">
                            <label for="check_out_date" class="text-md block font-semibold">Check-out Date</label>
                            <input type="date" name="check_out_date" id="check_out_date" min="<?php echo $min_date ?>" class="px-3 w-full py-2 border rounded-md" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guest Details -->
            <div class="p-3 space-y-3 col-span-2">
                    <hgroup>
                        <h2 class="text-2xl font-semibold">Guest Details</h2>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad doloremque, natus ducimus ex libero?</p>
                    </hgroup>

                    <label for="first_name" class="block text-md font-semibold">Your name</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="first_name" id="first_name" class="px-3 w-full py-2 border rounded-md" placeholder="Juan" required>
                        <input type="text" name="last_name" id="last_name" class="px-3 w-full py-2 border rounded-md" placeholder="Dela Cruz" required>
                    </div>
                
                    <label for="address" class="block text-md font-semibold">Address</label>
                    <input type="text" name="address" id="address" class="px-3 w-full py-2 border rounded-md" placeholder="123 street name ..." required>
                
                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-3">
                            <label for="contact_number" class="block text-md font-semibold">Contact Number</label>
                            <div class="flex items-center">
                                <span for="contact_number" class="px-3 py-2 w-16 flex-shrink-0 text-center border border-r-0 rounded-s-md peer peer-disabled:opacity-50">+63</span>
                                <input type="text" name="contact_number" id="contact_number" class="px-3 w-full py-2 border rounded-e-md" placeholder="900 0000 000" required>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <label for="email" class="block text-md font-semibold">Email</label>
                            <input type="email" name="email" id="email" class="px-3 w-full py-2 border rounded-md" placeholder="delacruz.juan@gmail.com" required>
                        </div>
                    </div>

                <div class="flex justify-between">
                    <a href="reservation.php#form" class="px-3 py-2 border font-semibold rounded-md hover:bg-slate-50 transition-all ease-in-out">Back: Reservation Details</a>
                    <button class="px-3 py-2 bg-blue-500 font-semibold text-white rounded-md hover:bg-blue-600 transition-all ease-in-out">Next: Payment</button>
                </div>
            </div>
        </div>
    </form>

    <?php include('../components/footer.php'); ?>
</body>

</html>