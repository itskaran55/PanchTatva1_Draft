<section id="work" class="relative bg-[#1b1e22] py-24 md:py-32 px-6 overflow-hidden border-t border-white/5">
    
    <div class="container mx-auto max-w-6xl relative z-10">
        
        <div class="mb-16 md:mb-24">
            <div class="inline-flex items-center gap-3 mb-6" data-aos="fade-right">
                <span class="text-[10px] tracking-[0.5em] uppercase text-[#D4A017] font-bold">Portfolio</span>
                <span class="w-12 h-[1px] bg-[#D4A017]"></span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white" data-aos="fade-up" data-aos-delay="100">
                Our Work 
                <span class="italic font-light opacity-80">Speaks</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            
            <?php 
            $projects = [
                ['title' => 'E-Commerce Evolution', 'cat' => 'Web Design & Development', 'img' => 'project1.jpg'],
                ['title' => 'Brand Identity Prism', 'cat' => 'Branding & Identity', 'img' => 'project2.jpg'],
                ['title' => 'AI Automation Suite', 'cat' => 'AI & Automation', 'img' => 'project3.jpg'],
                ['title' => 'Cinematic Motion', 'cat' => '2D / 3D Video & Animation', 'img' => 'project4.jpg']
            ];

            foreach($projects as $index => $p): 
            ?>
            <div class="group relative" data-aos="fade-up" data-aos-delay="<?php echo 100 * ($index + 1); ?>">
                <div class="relative aspect-[16/10] overflow-hidden rounded-xl bg-white/[0.03] border border-white/5 transition-all duration-700 group-hover:border-[#D4A017]/30">
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent flex items-center justify-center">
                        <span class="text-[10px] tracking-[0.4em] text-white/10 uppercase font-black">Panch Tatva Project</span>
                    </div>

                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 backdrop-blur-[2px]"></div>

                    <div class="absolute inset-0 flex items-center justify-center opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500">
                        <div class="w-16 h-16 rounded-full bg-[#D4A017] flex items-center justify-center shadow-2xl">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-between items-start">
                    <div>
                        <span class="text-[10px] tracking-[0.3em] uppercase text-[#D4A017] font-bold block mb-2">
                            <?php echo $p['cat']; ?>
                        </span>
                        <h4 class="text-2xl font-bold text-white tracking-tight group-hover:text-[#D4A017] transition-colors duration-300">
                            <?php echo $p['title']; ?>
                        </h4>
                    </div>
                    <span class="text-white/10 text-xl font-black italic">0<?php echo $index + 1; ?></span>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="mt-20 md:mt-32 pt-12 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8" data-aos="fade-up">
            <p class="text-gray-500 text-sm font-light max-w-sm text-center md:text-left">
                Every project is a unique collaboration. <br> We build digital foundations that perform.
            </p>
            <a href="#contact" class="group flex items-center gap-4">
                <span class="text-white text-xs font-bold tracking-[0.4em] uppercase group-hover:text-[#D4A017] transition-colors">Start Your Project</span>
                <div class="w-12 h-[1px] bg-[#D4A017] group-hover:w-20 transition-all duration-500"></div>
            </a>
        </div>
    </div>
</section>