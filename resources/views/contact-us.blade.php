<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - TDS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="./output.css" rel="stylesheet"> --}}
</head>
<body class="bg-white font-sans">

    <!--navbar-->
    <nav class="bg-white p-4">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <!-- Logo di kiri -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
            </a>

            <!-- Menu di kanan -->
            <div class="space-x-8">
                <a href="{{ route('home') }}" class="text-gray-800 font-medium hover:opacity-80">Home</a>
                <a href="{{ route('company') }}" class="text-gray-800 font-medium hover:opacity-80">Company</a>
                <a href="{{ route('solutions') }}" class="text-gray-800 font-medium hover:opacity-80">Solutions</a>
                <a href="{{ route('services') }}" class="text-gray-800 font-medium hover:opacity-80">Services</a>
                <a href="{{ route('contact-us') }}" class="text-gray-800 font-medium hover:opacity-80">Contact Us</a>
            </div>
        </div>
    </nav>
    <!--navbar end-->

    <!--footer-->
    <footer class="bg-[#2B4950]">
        <div class="mx-auto w-full max-w-6xl pb-12 grid grid-cols-3 space-x-10">
            <div>
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-white">Company Info</h2>
                <div class="text-gray-400 font-medium">
                    <div class="mb-6">
                        <p class="">Reach out to us anytime and lets create a better future for all technology users together, forever. We are open to all types of collab offers and tons more.</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <img src="{{ asset('img/icon1.png') }}" alt="Diagram" class="mr-2 w-6 h-6">
                        <div class="flex flex-col">
                            <p>Office Hour</p>
                            <p>Monday-Friday 9 AM-5 PM PST</p>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-row items-center">
                        <img src="{{ asset('img/icon2.png') }}" alt="Diagram" class="mr-2 w-6 h-6">
                        <div class="flex flex-col">
                            <p>Support Hour</p>
                            <p>24/7 365</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-white">Contact Info</h2>
                <div class="text-gray-400 font-medium">
                    <div class="flex flex-row items-center">
                        <img src="{{ asset('img/icon3.png') }}" alt="Diagram" class="mr-2 w-6 h-6">
                        <div class="flex flex-col">
                            <a href="#" class="hover:underline">Device42@tekno-ds.co.id</a>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-row items-center">
                        <img src="{{ asset('img/icon4.png') }}" alt="Diagram" class="mr-2 w-6 h-6">
                        <div class="flex flex-col">
                            <a href="#" class="hover:underline">0878-3200-9469</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-white">Our Location</h2>
                <div class="text-gray-400 font-medium">
                    <div class="flex flex-row items-center">
                        <img src="{{ asset('img/img(19).png') }}" alt="Diagram" class="w-full h-full">
                        <div class="flex flex-col">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->

    <!--footer-->
    <div class="bg-gradient p-2 text-gray-300">
        <div class="flex flex-row justify-center">
            <p>© 2024 Tech Yes! Solutions. All Rights Reserved</p>
        </div>
    </div>

    <!--style gradientnya-->
    <style>
        .bg-gradient {
            background: linear-gradient(to right, #759ba4, #7c949a);
        }
    </style>
    <!--style gradientnya-->
    <!--footer-->

</body>
</html>
