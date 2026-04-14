<section id="philosophy" class="relative bg-[#1b1e22] py-24 md:py-32 px-6 overflow-hidden">
    
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[1px] bg-gradient-to-r from-transparent via-[#D4A017]/30 to-transparent"></div>

    <div class="container mx-auto max-w-6xl relative z-10">
        
        <div class="text-center mb-20 md:mb-28">
            <div class="inline-flex items-center gap-3 mb-6" data-aos="fade-down">
                <span class="w-8 h-[1px] bg-[#D4A017]"></span>
                <span class="text-[10px] tracking-[0.5em] uppercase text-[#D4A017] font-bold">The Essence</span>
                <span class="w-8 h-[1px] bg-[#D4A017]"></span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-8" data-aos="fade-up" data-aos-delay="100">
                Driven by the <span class="italic font-light opacity-80">Five Elements</span>
            </h2>
            <p class="text-gray-500 text-sm md:text-base max-w-xl mx-auto leading-relaxed font-light sm-font-bold md-font-bold" data-aos="fade-up" data-aos-delay="200">
                At PanchTatva, we believe every successful brand is built on five core elements. We bring these together to create digital experiences that are result-driven.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-0 border border-white/5 rounded-2xl overflow-hidden bg-white/[0.01] backdrop-blur-sm" data-aos="fade-up" data-aos-delay="300">
            <?php 
            $elements = [
                ['01', 'Strategy', 'Market-first execution for scaling with clarity.'],
                ['02', 'Design', 'Premium quality visuals crafted to stand out.'],
                ['03', 'Tech', 'Modern, fast, and conversion-focused code.'],
                ['04', 'Growth', 'Data-driven strategies to grow your presence.'],
                ['05', 'Innovation', 'AI-powered workflows and smart automation.']
            ];
            foreach($elements as $index => $el): 
                $borderClass = ($index !== count($elements) - 1) ? 'md:border-r border-b md:border-b-0 border-white/5' : '';
            ?>
            <div class="group relative p-8 md:p-10 transition-all duration-700 hover:bg-[#D4A017]/[0.03] <?php echo $borderClass; ?>">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-[radial-gradient(circle_at_50%_0%,rgba(212,160,23,0.1),transparent_70%)]"></div>
                
                <div class="relative z-10">
                    <span class="text-[10px] font-bold text-[#D4A017] tracking-widest block mb-12 opacity-50 group-hover:opacity-100 transition-opacity uppercase">
                        Element <?php echo $el[0]; ?>
                    </span>
                    <h4 class="text-xl font-semibold text-white mb-4 tracking-tight group-hover:text-[#D4A017] transition-colors duration-500">
                        <?php echo $el[1]; ?>
                    </h4>
                    <p class="text-gray-500 text-xs leading-relaxed font-light group-hover:text-gray-300 transition-colors duration-500">
                        <?php echo $el[2]; ?>
                    </p>
                </div>

                <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#D4A017] group-hover:w-full transition-all duration-700 ease-in-out"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-20 flex flex-col md:flex-row items-center justify-between p-8 md:p-12 border border-white/5 rounded-2xl bg-gradient-to-r from-white/[0.02] to-transparent" data-aos="zoom-in">
            <div class="flex items-center gap-6 mb-8 md:mb-0">
                <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Panch Tatva Logo" class="w-16 h-auto opacity-70 brightness-110">
                <div class="h-10 w-[1px] bg-white/10"></div>
                <p class="text-white text-xs tracking-widest uppercase font-bold">
                    Start Your <br> <span class="text-[#D4A017]">Transformation</span>
                </p>
            </div>
            
            <a href="#contact" class="group relative px-10 py-4 overflow-hidden border border-[#D4A017]/30 transition-all duration-500 hover:border-[#D4A017]">
                <div class="absolute inset-0 bg-[#D4A017] translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                <span class="relative z-10 text-[10px] font-black tracking-[0.3em] uppercase text-[#D4A017] group-hover:text-black transition-colors duration-500">
                    Consult Our Experts
                </span>
            </a>
        </div>

    </div>

    <div class="absolute bottom-0 right-0 p-12 opacity-[0.03] pointer-events-none">
        <span class="text-[150px] font-black leading-none">PT</span>
    </div>
</section>