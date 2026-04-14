<header id="main-header" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 py-4 md:py-6">
    <div class="container mx-auto px-6 md:px-12 flex justify-between items-center relative z-[130]">
        
        <a href="index.php" class="flex items-center gap-3 group">
            <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Logo" class="h-10 md:h-12 w-auto">
        </a>

        <nav class="hidden lg:flex items-center space-x-12">
            <?php 
                $navLinks = ['services', 'process', 'work', 'whyus', 'contact' ];
                foreach($navLinks as $link): 
            ?>
                <a href="#<?php echo strtolower(str_replace(' ', '', $link)); ?>" 
                   class="text-[10px] uppercase tracking-[0.3em] font-medium text-gray-400 hover:text-[#D4A017] transition-all">
                    <?php echo $link; ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <button id="menu-toggle" class="lg:hidden relative flex flex-col justify-center items-center w-10 h-10 focus:outline-none">
            <span id="line1" class="w-8 h-[2px] bg-white transition-all duration-300 translate-y-[3px]"></span>
            <span id="line2" class="w-8 h-[2px] bg-[#D4A017] transition-all duration-300 -translate-y-[3px]"></span>
        </button>
    </div>

    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[100dvh] bg-[#03060A] z-[125] flex flex-col items-center justify-start translate-x-full transition-transform duration-500 ease-in-out pointer-events-none pt-32 overflow-hidden">
        
        <div class="absolute inset-0 overflow-hidden opacity-5 flex items-center justify-center pointer-events-none">
            <h2 class="text-[40vw] font-black text-white uppercase tracking-tighter select-none">MENU</h2>
        </div>

        <nav class="relative z-[126] flex flex-col items-center space-y-10 text-center">
            <a href="#services" class="mobile-link text-4xl font-bold tracking-tighter text-white uppercase">SERVICES</a>
            <a href="#process" class="mobile-link text-4xl font-bold tracking-tighter text-white uppercase">PROCESS</a>
            <a href="#work" class="mobile-link text-4xl font-bold tracking-tighter text-white uppercase">OUR WORK</a>
            <a href="#whyus" class="mobile-link text-4xl font-bold tracking-tighter text-white uppercase">WHY US</a>
            <div class="pt-6">
                <a href="#contact" class="mobile-link text-xl font-black tracking-[0.2em] text-[#D4A017] border border-[#D4A017] px-10 py-4 uppercase bg-[#03060A]">START PROJECT</a>
            </div>
        </nav>
    </div>
</header>

<style>
    /* Force immediate transparency on header when menu is open */
    .header-open-state {
        background-color: transparent !important;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
        border-bottom: none !important;
    }

    .header-scrolled {
        background-color: rgba(3, 6, 10, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding-top: 0.75rem !important;
        padding-bottom: 0.75rem !important;
    }
    
    /* Lock scroll on body without jumping */
    body.lock-scroll {
        overflow: hidden !important;
        height: 100dvh !important;
        touch-action: none;
    }
</style>

<script>
    const header = document.getElementById('main-header');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');

    let isMenuOpen = false;

    const handleScroll = () => {
        if (!isMenuOpen) {
            if (window.scrollY > 30) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            header.classList.add('header-open-state');
            header.classList.remove('header-scrolled');
            
            mobileMenu.classList.remove('translate-x-full', 'pointer-events-none');
            
            line1.style.transform = 'translateY(1px) rotate(45deg)';
            line2.style.transform = 'translateY(-1px) rotate(-45deg)';
            line2.style.backgroundColor = '#FFFFFF';
            
            document.body.classList.add('lock-scroll');
        } else {
            header.classList.remove('header-open-state');
            mobileMenu.classList.add('translate-x-full', 'pointer-events-none');
            
            handleScroll();

            line1.style.transform = 'translateY(3px) rotate(0deg)';
            line2.style.transform = 'translateY(-3px) rotate(0deg)';
            line2.style.backgroundColor = '#D4A017';
            
            document.body.classList.remove('lock-scroll');
        }
    };

    menuToggle.addEventListener('click', toggleMenu);

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => { if(isMenuOpen) toggleMenu(); });
    });
</script>