<section id="whyus" class="relative bg-[#1b1e22] py-24 md:py-40 px-6 overflow-hidden">
    
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none" 
         style="background-image: linear-gradient(#D4A017 1px, transparent 1px), linear-gradient(90deg, #D4A017 1px, transparent 1px); background-size: 50px 50px;">
    </div>
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_center,rgba(212,160,23,0.05)_0%,transparent_70%)] pointer-events-none"></div>

    <div class="container mx-auto max-w-6xl relative z-10">
        
        <div class="mb-20 md:mb-32">
            <div class="inline-flex items-center gap-4 mb-6" data-aos="fade-right">
                <div class="w-12 h-[1px] bg-[#D4A017]"></div>
                <span class="text-[10px] tracking-[0.5em] uppercase text-[#D4A017] font-black">Differentiation / 04</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white" data-aos="fade-up" data-aos-delay="100">
                Why Panch 
                <span class="italic font-light opacity-80">Tatva?</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php 
            $reasons = [
                [
                    'title' => 'Result-driven approach',
                    'desc' => 'We focus on outcomes that matter, ensuring every digital deployment delivers tangible business value.',
                    'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                [
                    'title' => 'Strategy-first execution',
                    'desc' => 'No guesswork. Every line of code is backed by a solid roadmap built for scale.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                ],
                [
                    'title' => 'End-to-end solutions',
                    'desc' => 'Stop juggling agencies. We provide full-stack solutions from branding to automation.',
                    'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'
                ],
                [
                    'title' => 'Premium design quality',
                    'desc' => 'We maintain a "masterpiece" standard for every layout, following elite aesthetic principles.',
                    'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
                ],
                [
                    'title' => 'Partnership mindset',
                    'desc' => 'We act as your long-term digital growth partner, invested in your continuous success.',
                    'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'
                ],
                [
                    'title' => 'Technical Excellence',
                    'desc' => 'Utilizing high-performance stacks like React and Tailwind to build foundations that scale.',
                    'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'
                ]
            ];

            foreach($reasons as $index => $r): 
            ?>
            <div class="group relative p-[1px] rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02]" data-aos="fade-up" data-aos-delay="<?php echo 100 * ($index % 3); ?>">
                <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-[#D4A017]/20 group-hover:via-[#D4A017]/40 transition-all duration-700"></div>
                
                <div class="relative bg-[#03060A] h-full p-10 rounded-3xl z-10">
                    <div class="mb-8 w-14 h-14 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500 group-hover:bg-[#D4A017] group-hover:shadow-[0_0_20px_rgba(212,160,23,0.4)]">
                        <svg class="w-7 h-7 text-[#D4A017] group-hover:text-black transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $r['icon']; ?>"></path>
                        </svg>
                    </div>

                    <h4 class="text-2xl font-bold text-white mb-4 tracking-tight group-hover:text-[#D4A017] transition-colors">
                        <?php echo $r['title']; ?>
                    </h4>
                    <p class="text-gray-500 text-sm leading-relaxed font-light group-hover:text-gray-300 transition-colors">
                        <?php echo $r['desc']; ?>
                    </p>

                    <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <svg class="w-5 h-5 text-[#D4A017]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>