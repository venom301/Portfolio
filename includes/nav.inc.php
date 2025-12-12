<!-- Navigation -->
<nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm shadow-sm z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between">
            <a href="index.html" class="text-2xl font-bold text-gray-900">Vishnu</a>

            <!-- Mobile menu button -->
            <button id="mobileMenuBtn" class="md:hidden p-2" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="index.html" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="/portfolio" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 space-y-2 border-t pt-4">
            <a href="index.html" class="block text-gray-700 hover:text-blue-600 transition py-2">Home</a>
            <a href="about.html" class="block text-gray-700 hover:text-blue-600 transition py-2">About</a>
            <a href="portfolio.html" class="block text-gray-700 hover:text-blue-600 transition py-2">Portfolio</a>
            <a href="contact.html" class="block text-gray-700 hover:text-blue-600 transition py-2">Contact</a>
        </div>
    </div>
</nav>