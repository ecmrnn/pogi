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
                        <span class="material-symbols-outlined text-white">check</span>
                    </div>
                    <p>Guest <br> Details</p>
                </div>

                <div class="w-1/2 h-[1px] bg-blue-500"></div>

                <div class="flex gap-3 items-center">
                    <div class="p-3 rounded border border-transparent bg-blue-500 aspect-square grid place-items-center">
                        <span class="material-symbols-outlined text-white">qr_code</span>
                    </div>
                    <p>Payment</p>
                </div>
            </div>

            <div class="">
                <!-- Payment -->
                <div class="p-3 space-y-3 border rounded-md">
                    <hgroup>
                        <h2 class="text-2xl font-semibold">Payment</h2>
                        <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad doloremque, natus ducimus ex libero?</p>
                    </hgroup>

                    <div class="py-5 space-y-3">
                        <div class="flex gap-3 items-center">
                            <div class="aspect-square w-full max-w-[75px] bg-slate-200 rounded-md"></div>
                            <div>
                                <h3 class="text-md font-semibold">GCash</h3>
                                <p>Account name: Juan Dela Cruz</p>
                                <p>Account number: 0968 5575 486</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="aspect-square w-full max-w-[75px] bg-slate-200 rounded-md"></div>
                            <div>
                                <h3 class="text-md font-semibold">PNB</h3>
                                <p>Account number: 0000-0000-000</p>
                                <p>Account name: Prestige Oasis Grandeur Inn</p>
                            </div>
                        </div>
                    </div>

                    <label for="payment" class="block text-md font-semibold">Proof of Payment</label>
                    <input type="file" name="payment" id="payment" class="mt-3 px-3 w-full py-2 border rounded-md" placeholder="Juan" required>

                    <div class="flex justify-between">
                        <a href="guest.php" class="px-3 py-2 font-semibold border rounded-md hover:bg-slate-50 transition-all ease-in-out">Back: Guest Details</a>
                        <button class="px-3 py-2 bg-blue-500 font-semibold text-white rounded-md hover:bg-blue-600 transition-all ease-in-out">Submit Reservation</button>
                    </div>
                </div>
            </div>

            <div class="space-y-3 col-span-2 p-3">
                <hgroup>
                    <h2 class="text-2xl font-semibold">Reservation Breakdown</h2>
                    <p class="max-w-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad doloremque, natus ducimus ex libero?</p>
                </hgroup>

                <div class="grid grid-cols-2 gap-3">
                    <div class="p-3 rounded-md border">
                        <h3 class="mb-3 text-lg font-semibold">Your Details</h3>
                        <p class="font-semibold grid grid-cols-2"><span>Name: </span><span class="font-normal">Juan Dela Cruz</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Address: </span><span class="font-normal">123 Sampaloc Manila ...</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Contact: </span><span class="font-normal">+639175800671</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Email: </span><span class="font-normal">test@mail.com</span></p>
                    </div>
                    
                    <div class="p-3 rounded-md border">
                        <h3 class="mb-3 text-lg font-semibold">Reservation Details</h3>
                        <p class="font-semibold grid grid-cols-2"><span>Check-out Date: </span><span class="font-normal">January 2, 2024</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Check-in Date: </span><span class="font-normal">January 1, 2024</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Guests: </span><span class="font-normal">2 Adults &amp; 1 Children</span></p>
                        <p class="font-semibold grid grid-cols-2"><span>Room: </span><span class="font-normal">1101 / Deluxe</span></p>
                    </div>
                </div>

                <div>
                    <!-- Header -->
                    <div class="px-5 py-2 bg-slate-50 border border-slate-200 rounded-md flex justify-between">
                        <p class="font-semibold">Item</p>
                        <p class="font-semibold">Amount</p>
                    </div>
                    <!-- Body -->
                    <div class="px-5 py-2 space-y-3">
                        <div>
                            <strong>Reserved Room</strong>
                            <div class="flex justify-between">
                                <p>Room 1101 : Deluxe for <span>2</span> night&#47;s</p>
                                <p class="font-semibold">&#8369; 10,000.00</p>
                            </div>
                        </div>

                        <div>
                            <strong>Addons</strong>
                            <div class="flex justify-between">
                                <p>Slipper</p>
                                <p class="font-semibold">&#8369; 100.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Total -->
                     <div class="px-5 py-2 border-t">
                        <div class="flex justify-between">
                            <p></p>
                            <p><strong>Subtotal</strong><span class="w-32 text-right inline-block">&#8369; 10,100.00</span></p>
                        </div>
                        <div class="flex justify-between">
                            <p></p>
                            <p><strong>12&percnt; VAT</strong><span class="w-32 text-right inline-block">&#8369; 1,212.00</span></p>
                        </div>
                        <div class="flex justify-between">
                            <p></p>
                            <p class="text-blue-500"><strong>Net Total</strong><strong class="w-32 text-right inline-block">&#8369; 11,312.00</strong></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </form>

    <?php include('../components/footer.php'); ?>
</body>

</html>