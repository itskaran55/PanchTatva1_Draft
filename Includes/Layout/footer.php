<footer class="relative bg-[#03060A] pt-24 pb-12 px-6 overflow-hidden border-t border-white/5">
    
    <div class="absolute bottom-0 right-0 p-8 md:p-12 opacity-[0.03] pointer-events-none select-none">
        <span class="text-[80px] md:text-[180px] font-black leading-none uppercase tracking-tighter text-white">Tatva</span>
    </div>

    <div class="container mx-auto max-w-6xl relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
            
            <div class="space-y-8" data-aos="fade-right">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Panch Tatva" class="h-10 w-auto transition-transform duration-500 group-hover:scale-110">
                    <!-- <div class="flex flex-col">
                        <span class="text-white font-black tracking-tighter text-xl uppercase">Panch <span class="text-[#D4A017]">Tatva</span></span>
                        <span class="text-[8px] tracking-[0.4em] text-gray-500 uppercase">Collective</span>
                    </div> -->
                </div>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                    Where Strategy, Design & Technology Become One. We build digital foundations that perform.
                </p>
                <div class="flex gap-4">
                    <?php 
                    $socials = ['IN', 'X', 'YT', 'LI'];
                    foreach($socials as $soc): 
                    ?>
                    <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-[10px] font-bold text-gray-400 hover:border-[#D4A017] hover:text-[#D4A017] hover:shadow-[0_0_15px_rgba(212,160,23,0.2)] transition-all duration-500">
                        <?php echo $soc; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="space-y-8" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-white text-xs font-black tracking-[0.4em] uppercase">Services</h4>
                <ul class="space-y-4">
                    <li><a href="#services" class="text-gray-500 text-sm hover:text-[#D4A017] transition-all duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-[#D4A017] group-hover:w-4 transition-all"></span> Web Development
                    </a></li>
                    <li><a href="#services" class="text-gray-500 text-sm hover:text-[#D4A017] transition-all duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-[#D4A017] group-hover:w-4 transition-all"></span> AI & Automation
                    </a></li>
                    <li><a href="#services" class="text-gray-500 text-sm hover:text-[#D4A017] transition-all duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-[#D4A017] group-hover:w-4 transition-all"></span> Branding
                    </a></li>
                    <li><a href="#services" class="text-gray-500 text-sm hover:text-[#D4A017] transition-all duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-[#D4A017] group-hover:w-4 transition-all"></span> Digital Marketing
                    </a></li>
                </ul>
            </div>

            <div class="space-y-8" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-white text-xs font-black tracking-[0.4em] uppercase">Company</h4>
                <ul class="space-y-4">
                    <li><a href="#philosophy" class="text-gray-500 text-sm hover:text-white transition-all">Our Philosophy</a></li>
                    <li><a href="#work" class="text-gray-500 text-sm hover:text-white transition-all">Portfolio</a></li>
                    <li><a href="#process" class="text-gray-500 text-sm hover:text-white transition-all">How We Work</a></li>
                    <li><a href="#why-us" class="text-gray-500 text-sm hover:text-white transition-all">Why Choose Us</a></li>
                </ul>
            </div>

            <div class="space-y-8" data-aos="fade-left" data-aos-delay="300">
                <h4 class="text-white text-xs font-black tracking-[0.4em] uppercase">Contact</h4>
                <div class="group">
                    <p class="text-gray-500 text-xs mb-2 font-light italic">Ready to scale?</p>
                    <a href="mailto:hello@panchtatva.com" class="text-white text-lg md:text-xl font-bold tracking-tighter hover:text-[#D4A017] transition-all duration-300">
                        hello@panchtatva.com
                    </a>
                </div>
                <div class="pt-4">
                    <span class="text-[9px] text-gray-600 tracking-[0.3em] uppercase block mb-3">Presence</span>
                    <span class="inline-block px-4 py-2 border border-white/5 bg-white/[0.02] text-white text-[10px] font-bold uppercase tracking-widest rounded-full">
                        Global Digital Collective
                    </span>
                </div>
            </div>

        </div>

        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-4">
                <div class="w-2 h-2 rounded-full bg-[#D4A017] animate-pulse"></div>
                <p class="text-gray-600 text-[10px] tracking-[0.3em] uppercase">
                    &copy; 2026 Panch Tatva — All Systems Operational
                </p>
            </div>
            <div class="flex gap-8">
                <a href="#" class="text-gray-600 text-[10px] tracking-[0.2em] uppercase hover:text-[#D4A017] transition-all">Privacy</a>
                <a href="#" class="text-gray-600 text-[10px] tracking-[0.2em] uppercase hover:text-[#D4A017] transition-all">Terms</a>
            </div>
        </div>
    </div>
</footer>