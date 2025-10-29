<nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3 relative">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="{{ asset('assets/logo/pd.svg') }}" class="object-contain w-full h-full" alt="logo">
        </div>
        <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">Hima Persis Garut</p>
            {{-- Menggunakan warna abu-abu standar agar konsisten --}}
            <p id="CompanyTagline" class="text-sm text-gray-600">Ilmiah,Progresif,Revolusioner</p>
        </div>
    </div>

    <button id="mobile-menu-button" class="md:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1 focus:outline-none">
        <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300" id="line1"></span>
        <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300" id="line2"></span>
        <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300" id="line3"></span>
    </button>

    <ul class="hidden md:flex flex-wrap items-center gap-[30px]">
        {{-- Menggunakan warna maroon untuk hover agar konsisten --}}
        <li class="font-semibold hover:text-maroon-primary transition-all duration-300">
            <a href="{{ route('front.index') }}">Home</a>
        </li>
        <li class="font-semibold hover:text-maroon-primary transition-all duration-300">
            <a href="">Products</a> {{-- TODO: Tambahkan route jika ada --}}
        </li>
        <li class="font-semibold hover:text-maroon-primary transition-all duration-300">
            <a href="{{ route('front.team') }}">Organization</a>
        </li>
        <li class="font-semibold hover:text-maroon-primary transition-all duration-300">
            {{-- Menambahkan route blog --}}
            <a href="{{ route('front.blog') }}">Blog</a>
        </li>
        <li class="font-semibold hover:text-maroon-primary transition-all duration-300">
            <a href="{{ route('front.about') }}">About</a>
        </li>
    </ul>

</nav>

<div id="mobile-menu" class="hidden md:hidden fixed inset-0 z-50">
    <div class="fixed inset-0 bg-black bg-opacity-50" id="mobile-menu-backdrop"></div>

    <div class="fixed top-0 left-0 w-full bg-white shadow-lg">
        <div class="flex items-center justify-between p-[20px_30px] border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="{{ asset('assets/logo/pd.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                    <p class="font-extrabold text-xl leading-[30px]">Hima Persis Garut</p>
                    <p class="text-sm text-gray-600">Ilmiah,Progresif,Revolusioner</p>
                </div>
            </div>

            <button id="mobile-menu-close" class="flex items-center justify-center w-8 h-8">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="p-6 space-y-6">
            <a href="{{ route('front.index') }}" class="block font-semibold text-lg hover:text-maroon-primary transition-all duration-300 py-2">Home</a>
            <a href="" class="block font-semibold text-lg hover:text-maroon-primary transition-all duration-300 py-2">Products</a> {{-- TODO: Tambahkan route jika ada --}}
            <a href="{{ route('front.team') }}" class="block font-semibold text-lg hover:text-maroon-primary transition-all duration-300 py-2">Organization</a>
            {{-- Menambahkan route blog --}}
            <a href="{{ route('front.blog') }}" class="block font-semibold text-lg hover:text-maroon-primary transition-all duration-300 py-2">Blog</a>
            <a href="{{ route('front.about') }}" class="block font-semibold text-lg hover:text-maroon-primary transition-all duration-300 py-2">About</a>

            <div class="pt-4">
                {{-- Menggunakan warna maroon untuk tombol --}}
                <a href="" class="block bg-maroon-primary p-[14px_20px] text-center rounded-xl hover:opacity-90 transition-all duration-300 font-bold text-white">Get a Quote</a> {{-- TODO: Tambahkan route jika ada --}}
            </div>
        </div>
    </div>
</div>

{{-- 
    PENTING: Kode JavaScript ini sudah dimasukkan di sini 
    agar komponennya berdiri sendiri (self-contained). 
    Anda TIDAK perlu lagi menambahkannya ke app.blade.php.
--}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hanya jalankan jika elemennya ada (mencegah error jika komponen ini tidak dipakai)
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');
        const line3 = document.getElementById('line3');

        if (mobileMenuButton && mobileMenu && mobileMenuClose && mobileMenuBackdrop) {
            // Open mobile menu
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent scrolling

                // Animate hamburger to X
                if (line1 && line2 && line3) {
                    line1.style.transform = 'rotate(45deg) translate(4px, 4px)';
                    line2.style.opacity = '0';
                    line3.style.transform = 'rotate(-45deg) translate(4px, -4px)';
                }
            });

            // Close mobile menu function
            function closeMobileMenu() {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = ''; // Restore scrolling

                // Reset hamburger animation
                if (line1 && line2 && line3) {
                    line1.style.transform = 'rotate(0deg)';
                    line2.style.opacity = '1';
                    line3.style.transform = 'rotate(0deg)';
                }
            }

            // Close mobile menu events
            mobileMenuClose.addEventListener('click', closeMobileMenu);
            mobileMenuBackdrop.addEventListener('click', closeMobileMenu);

            // Close menu when clicking on navigation links
            const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) { // md breakpoint Tailwind
                    closeMobileMenu();
                }
            });

            // Close mobile menu on escape key
            document.addEventListener('keydown', function(event) {
                if (!mobileMenu.classList.contains('hidden') && event.key === 'Escape') {
                    closeMobileMenu();
                }
            });
        }
    });
</script>