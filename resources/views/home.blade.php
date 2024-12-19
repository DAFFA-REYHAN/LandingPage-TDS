<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - TDS</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-light font-sans">

    <!--navbar-->
    <nav class="bg-light p-4">
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

    <!--header-->
    <div class="min-h-[80vh] bg-[#2B4950] text-center py-12 px-4">
        <h1 class="text-2xl text-[#62A6B6] mb-4">IT Services Management Solutions</h1>
        <h1 class="text-5xl text-light font-bold mb-2">The Next Generation Hybrid Cloud</h1>
        <p class="text-4xl text-light font-bold mb-14">Configuration Management Database <br> (CMDB)</p>
        <div class="space-x-4 mb-56">
            <a href="#" class="bg-gray-100 hover:opacity-95 text-gray-900 py-3.5 px-6 rounded">Book Demo</a>
            <a href="#" class="border hover:opacity-95 text-light py-3 px-6 rounded inline-flex items-center">Learn More
                <span>
                    <svg class="ml-2 w-4 h-4 text-gray-800 dark:text-light" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <img src="{{ asset('img/corediagram.png') }}" alt="Diagram" class="absolute bottom-[-10px] left-1/2 transform -translate-x-1/2 w-96 h-auto">
    <!--header end-->

    <!--sec 1-->
    <div class="mt-32 h-4/5 text-center py-12 px-4">
        <h1 class="text-5xl text-[#2B4950] font-bold mb-2">Discover other services <br> management features</h1>
        <div class="flex justify-center">
            <div class="px-24 grid grid-cols-4 gap-12 mt-12">
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(1).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Instratucture Discovery</h1>
                        <h1>The most advanced and comprehensive discovery for your IT and cloud environments. From legacy technologies like mainframes to the latest cloud containers.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(2).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Cloud Discovery</h1>
                        <h1>Unlock Complete Inventory and Deep Resource Discovery for AWS and Azure Cloud Assets.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(3).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">CMDB</h1>
                        <h1>Next Generation CMDB is here. Near Real-time, automated, with actionable insights.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(4).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Storage Discovery</h1>
                        <h1>Empower your IT Operations with built-in and included storage discovery and resource management.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sec 1 end-->

    <!--sec 2-->
    <div class="mt-12 h-4/5 text-center py-12 px-4">
        <h1 class="text-3xl text-[#2B4950] font-bold mb-2">Trusted By</h1>
        <div class="flex justify-center">
            <div class="px-24 grid grid-cols-6 gap-12 mt-6 place-items-center">
                <img src="{{ asset('img/img(6).png') }}" alt="Diagram" class="w-auto h-auto">
                <img src="{{ asset('img/img(7).png') }}" alt="Diagram" class="w-auto h-auto">
                <img src="{{ asset('img/img(8).png') }}" alt="Diagram" class="w-auto h-auto">
                <img src="{{ asset('img/img(9).png') }}" alt="Diagram" class="w-auto h-auto">
                <img src="{{ asset('img/img(10).png') }}" alt="Diagram" class="w-auto h-auto">
                <img src="{{ asset('img/img(11).png') }}" alt="Diagram" class="w-auto h-auto">
            </div>
        </div>
    </div>
    <!--sec 2 end-->

    <!--sec 3-->
    <div class="h-4/5 bg-[#2B4950] text-center py-12 px-4">
        <h1 class="text-2xl text-[#62A6B6] mb-4">IT Services Management Solutions</h1>
        <h1 class="text-5xl text-light font-bold mb-2">The Next Generation Hybrid Cloud</h1>
        <p class="text-4xl text-light font-bold mb-14">Configuration Management Database <br> (CMDB)</p>
        <div class="space-x-4 mb-56">
            <a href="#" class="bg-gray-100 hover:opacity-95 text-gray-900 py-3.5 px-6 rounded">Book Demo</a>
            <a href="#" class="border hover:opacity-95 text-light py-3 px-6 rounded inline-flex items-center">Learn More
                <span>
                    <svg class="ml-2 w-4 h-4 text-gray-800 dark:text-light" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <img src="{{ asset('img/img(12).png') }}" alt="Diagram" class="absolute bottom-[-1730px] left-1/2 transform -translate-x-1/2 max-h-[350px] w-auto h-auto">
    <!--sec 3 end-->

    <!--sec 4-->
    <div class="mt-32 h-4/5 text-center py-12 px-4">
        <h1 class="text-5xl text-[#2B4950] font-bold mb-2">Discover other services <br> management features</h1>
        <div class="flex justify-center">
            <div class="px-24 grid grid-cols-3 gap-12 mt-12">
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(13).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Perfomance Analysis & Diagnostic</h1>
                        <h1>Performance analysis and diagnostics are critical in maintaining optimal network operations, ensuring smooth business operations and user satisfaction.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(14).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Network Trouble Shooting</h1>
                        <h1>Network troubleshooting is an important aspect of network engineering that enables organizations to maintain a reliable and efficient network infrastructure.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(15).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Packet Forensics</h1>
                        <h1>Packet capture plays a critical role in digital forensics, legal eavesdropping, and incident response, providing evidence on which to base decisions in network defense.</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex justify-center">
            <div class="px-24 grid grid-cols-2 gap-12 mt-12">
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(16).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">Network Security</h1>
                        <h1>The ability to provide security tools with reliable and accurate network traffic will make or break your cybersecurity posture.</h1>
                    </div>
                </div>
                <div class="py-4 px-6 border rounded-lg hover:shadow">
                    <div class="flex flex-col gap-y-4 items-center">
                        <img src="{{ asset('img/img(17).png') }}" alt="Diagram" class="w-auto h-auto">
                        <h1 class="text-3xl font-bold">ICS/OT Network Monitoring </h1>
                        <h1>Enhanced tracking and business intelligence capabilities enable more informed decision making and more efficient operations.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sec 4 end-->

    <!--sec 5-->
    <div class="bg-[#2B4950] p-20">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <div class="text-light text-4xl font-bold">
                How can we help? Let us Know
            </div>
            <a href="#" class="bg-light hover:opacity-95 font-semibold text-[#2B4950] py-3.5 px-12 rounded">Contact Us</a>
        </div>
    </div>
    <!--sec 5 end-->

    <!--sec 6-->
    <div class="bg-light p-20">
        <div class="flex flex-col justify-between max-w-6xl mx-auto">
            <div class="text-gradient text-6xl font-bold">
                Get in Touch with our Team
            </div>

            <!--style gradientnya-->
            <style>
                .text-gradient {
                    background: linear-gradient(to right, #2B4950, #62A6B6);
                    -webkit-background-clip: text;
                    color: transparent;
                }
            </style>
            <!--style gradientnya-->

            <div class="grid grid-cols-2 justify-between">
                <form class="max-w-md mt-12 space-y-8">
                    <div class="flex">
                        <span class="inline-flex items-center px-6 text-md text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-6" placeholder="Full name">
                    </div>

                    <div class="flex">
                        <span class="inline-flex items-center px-6 text-md text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                                <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                            </svg>
                        </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-6" placeholder="Email address">
                    </div>

                    <div class="flex">
                        <span class="inline-flex items-center px-6 text-md text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                            </svg>
                        </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-6" placeholder="Phone number">
                    </div>

                    <div class="flex">
                        <span class="inline-flex items-center px-6 text-md text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-6" placeholder="Write something here">
                    </div>
                </form>
                <img src="{{ asset('img/img(18).png') }}" alt="Diagram" class="mt-12 w-full h-96 float-right">
            </div>
            <div class="max-w-6xl mt-10">
                <a href="#" class="bg-[#2B4950] hover:opacity-95 font-semibold text-light py-3.5 px-12 rounded">Submit Now</a>
            </div>
        </div>
    </div>
    <!--sec 6 end-->

    <!--footer-->
    <footer class="bg-[#2B4950]">
        <div class="mx-auto w-full max-w-6xl pb-12 grid grid-cols-3 space-x-10">
            <div>
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-light">Company Info</h2>
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
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-light">Contact Info</h2>
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
                <h2 class="mb-6 mt-10 text-md font-semibold uppercase text-light">Our Location</h2>
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
