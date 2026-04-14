<header id="main-header" class="fixed top-0 inset-x-0 w-full z-[100] transition-all duration-500 py-4 md:py-6 will-change-transform">
    <div class="container mx-auto px-6 md:px-12 flex justify-between items-center relative z-[110]">
        
        <a href="index.php" class="flex items-center gap-3 group">
            <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Panch Tatva Logo" class="h-10 md:h-12 w-auto transition-transform duration-500 group-hover:scale-110">
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

        <button id="menu-toggle" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 focus:outline-none overflow-hidden">
            <span id="line1" class="w-8 h-[2px] bg-white transition-all duration-300 origin-center translate-y-[3px]"></span>
            <span id="line2" class="w-8 h-[2px] bg-[#D4A017] transition-all duration-300 origin-center -translate-y-[3px]"></span>
        </button>

    </div>

    <div id="mobile-menu" class="fixed inset-0 bg-[#03060A] z-[105] flex flex-col items-center justify-center translate-x-full transition-transform duration-500 ease-in-out pointer-events-none">
        <div class="absolute inset-0 overflow-hidden opacity-5 flex items-center justify-center">
            <h2 class="text-[40vw] font-black text-white uppercase tracking-tighter select-none">MENU</h2>
        </div>

        <nav class="relative z-[106] flex flex-col items-center space-y-8 text-center">
            <a href="#services" class="mobile-link text-3xl font-bold tracking-tighter text-white uppercase">SERVICES</a>
            <a href="#process" class="mobile-link text-3xl font-bold tracking-tighter text-white uppercase">PROCESS</a>
            <a href="#work" class="mobile-link text-3xl font-bold tracking-tighter text-white uppercase">OUR WORK</a>
            <a href="#whyus" class="mobile-link text-3xl font-bold tracking-tighter text-white uppercase">WHY US</a>
            <div class="pt-8">
                <a href="#contact" class="mobile-link text-xl font-black tracking-[0.2em] text-[#D4A017] border border-[#D4A017] px-10 py-4 uppercase">START PROJECT</a>
            </div>
        </nav>
    </div>
</header>

<script>
    const header = document.getElementById('main-header');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');

    // 1. Scroll Effect (Throttled for performance)
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('bg-[#03060A]/95', 'backdrop-blur-xl', 'py-3', 'border-b', 'border-white/5');
        } else {
            header.classList.remove('bg-[#03060A]/95', 'backdrop-blur-xl', 'py-3', 'border-b', 'border-white/5');
        }
    }, { passive: true });

    // 2. Mobile Menu Toggle Logic
    let isMenuOpen = false;

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mobileMenu.classList.remove('translate-x-full', 'pointer-events-none');
            // Using precise transform for the "X"
            line1.style.transform = 'translateY(1px) rotate(45deg)';
            line2.style.transform = 'translateY(-1px) rotate(-45deg)';
            line2.style.backgroundColor = '#FFFFFF';
            
            // Critical Fix: Lock scroll without jumping
            document.documentElement.style.overflow = 'hidden'; 
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('translate-x-full', 'pointer-events-none');
            line1.style.transform = 'translateY(3px) rotate(0deg)';
            line2.style.transform = 'translateY(-3px) rotate(0deg)';
            line2.style.backgroundColor = '#D4A017';
            
            // Unlock scroll
            document.documentElement.style.overflow = '';
            document.body.style.overflow = '';
        }
    };

    menuToggle.addEventListener('click', toggleMenu);

    // Close on link click
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            if(isMenuOpen) toggleMenu();
        });
    });
</script>