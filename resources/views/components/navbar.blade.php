  <!--navbar-->
    <nav class="bg-light p-4">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <!-- Logo di kiri -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
            </a>

            <!-- Menu di kanan -->
            <div class="space-x-8">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? ' bg-primary ' : 'text-gray-800 font-medium hover:opacity-80' }}">Home</a>
                <a href="{{ route('company') }}" class="{{ request()->routeIs('company') ? 'bg-primary' : 'text-gray-800 font-medium hover:opacity-80' }}">Company</a>
                <a href="{{ route('solutions') }}" class="{{ request()->routeIs('solutions') ? 'text-gray-800 font-medium hover:opacity-80 active' : 'text-gray-800 font-medium hover:opacity-80' }}">Solutions</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-gray-800 font-medium hover:opacity-80 active' : 'text-gray-800 font-medium hover:opacity-80' }}">Services</a>
                <a href="{{ route('contact-us') }}" class="{{ request()->routeIs('contact-us') ? 'text-gray-800 font-medium hover:opacity-80 active' : 'text-gray-800 font-medium hover:opacity-80' }}">Contact Us</a>
            </div>
        </div>
    </nav>
    <!--navbar end-->