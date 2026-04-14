<header id="main-header" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 py-6">
    <div class="container mx-auto px-6 md:px-12 flex justify-between items-center">
        
        <a href="index.php" class="relative z-[110] flex items-center gap-3 group">
            <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Panch Tatva Logo" class="h-12 md:h-12 w-auto transition-transform duration-500 group-hover:scale-110">
            <!-- <div class="flex flex-col leading-none">
                <span class="text-white font-black tracking-tighter text-lg md:text-xl uppercase">Panch <span class="text-[#D4A017]">Tatva</span></span>
                <span class="text-[8px] tracking-[0.4em] text-gray-500 uppercase">Collective</span>
            </div> -->
        </a>

        <nav class="hidden lg:flex items-center space-x-12">
            <?php 
                $navLinks = ['services', 'process', 'work', 'whyus', 'contact' ];
                foreach($navLinks as $link): 
            ?>
                <a href="#<?php echo strtolower(str_replace(' ', '', $link)); ?>" 
                   class="text-[10px] uppercase tracking-[0.3em] font-medium text-gray-400 hover:text-[#D4A017] transition-all duration-300 relative group">
                    <?php echo $link; ?>
                    <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-[#D4A017] transition-all duration-300 group-hover:w-full"></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="hidden lg:block">
            <a href="#contact" class="px-8 py-3 bg-[#D4A017] text-black text-[10px] font-bold uppercase tracking-[0.2em] rounded-none hover:bg-white transition-all duration-500 shadow-[0_0_20px_rgba(212,160,23,0.2)]">
                Book a Call
            </a>
        </div>

        <button id="menu-toggle" class="lg:hidden relative z-[110] w-10 h-10 flex flex-col justify-center items-center gap-1.5 focus:outline-none">
            <span class="w-8 h-[2px] bg-white transition-all duration-300" id="line1"></span>
            <span class="w-8 h-[2px] bg-[#D4A017] transition-all duration-300" id="line2"></span>
        </button>

    </div>

    <div id="mobile-menu" class="fixed inset-0 bg-[#03060A] z-[105] flex flex-col items-center justify-center opacity-0 pointer-events-none transition-all duration-500">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <h2 class="text-[30vw] font-black text-white absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-5">MENU</h2>
        </div>
        <nav class="flex flex-col items-center space-y-8 text-center">
            <a href="#services" class="mobile-link text-4xl font-bold tracking-tighter hover:text-[#D4A017]">SERVICES</a>
            <a href="#process" class="mobile-link text-4xl font-bold tracking-tighter hover:text-[#D4A017]">PROCESS</a>
            <a href="#work" class="mobile-link text-4xl font-bold tracking-tighter hover:text-[#D4A017]">OUR WORK</a>
            <a href="#contact" class="mobile-link text-4xl font-bold tracking-tighter text-[#D4A017]">START PROJECT</a>
        </nav>
    </div>
</header>

<script>
    const header = document.getElementById('main-header');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');

    // Scroll Effect: Header Shrink & Blur
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-[#03060A]/80', 'backdrop-blur-xl', 'py-4', 'border-b', 'border-white/5');
        } else {
            header.classList.remove('bg-[#03060A]/80', 'backdrop-blur-xl', 'py-4', 'border-b', 'border-white/5');
        }
    });

    // Mobile Menu Toggle Logic
    menuToggle.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.contains('opacity-100');
        
        if (!isOpen) {
            mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
            mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
            line1.style.transform = 'rotate(45deg) translate(5px, 5px)';
            line2.style.transform = 'rotate(-45deg) translate(2px, -2px)';
            document.body.style.overflow = 'hidden'; // Stop scroll
        } else {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
            line1.style.transform = 'none';
            line2.style.transform = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Close menu on link click
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            line1.style.transform = 'none';
            line2.style.transform = 'none';
            document.body.style.overflow = 'auto';
        });
    });
</script>