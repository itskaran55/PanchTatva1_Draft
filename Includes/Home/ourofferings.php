<section id="services" class="relative bg-[#1b1e22] py-24 md:py-32 px-6 overflow-hidden border-t border-white/5">
    
    <div class="container mx-auto max-w-6xl relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 md:mb-24 gap-8">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-3 mb-6" data-aos="fade-right">
                    <span class="text-[10px] tracking-[0.5em] uppercase text-[#D4A017] font-bold">What We Do</span>
                    <span class="w-12 h-[1px] bg-[#D4A017]"></span>
                </div>
                <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white" data-aos="fade-up" data-aos-delay="100">
                    Precision Solutions for <br> 
                    <span class="italic font-light opacity-80">Digital Dominance</span>
                </h2>
            </div>
            <div class="hidden md:block" data-aos="fade-left">
                <p class="text-gray-500 text-xs tracking-[0.3em] uppercase">Services / 03</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php 
            $services = [
                [
                    'title' => 'Web Design & Development',
                    'desc' => 'Modern, fast, and conversion-focused websites built to elevate your brand and drive results.',
                    'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'tags' => ['React', 'PHP', 'Tailwind']
                ],
                [
                    'title' => 'AI & Automation',
                    'desc' => 'Streamline your operations with smart automation, chatbots, and AI-powered workflows.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                    'tags' => ['OpenAI', 'Python', 'Workflows']
                ],
                [
                    'title' => 'Branding & Identity',
                    'desc' => 'From logo to complete identity, we craft brands that stand out and connect deeply with users.',
                    'icon' => 'M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 3c1.72 0 3.347.433 4.775 1.2a10 10 0 014.507 8.328M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                    'tags' => ['Logo', 'UI/UX', 'Guidelines']
                ],
                [
                    'title' => 'Social Media Marketing',
                    'desc' => 'Data-driven strategies to grow your presence, engagement, and revenue across all platforms.',
                    'icon' => 'M7 20l4-16m2 16l4-16M6 9h14M4 15h14',
                    'tags' => ['SEO', 'Instagram', 'Ads']
                ],
                [
                    'title' => 'Influencer Marketing',
                    'desc' => 'Collaborate with the right creators to amplify your brand reach authentically and effectively.',
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'tags' => ['Growth', 'Creators', 'Reach']
                ],
                [
                    'title' => '2D / 3D Animation',
                    'desc' => 'High-impact visuals and storytelling that capture attention and communicate your message.',
                    'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                    'tags' => ['GSAP', 'Three.js', 'Video']
                ]
            ];

            foreach($services as $index => $s): 
            ?>
            <div class="group relative bg-white/[0.02] border border-white/5 p-8 md:p-12 rounded-2xl transition-all duration-700 hover:bg-white/[0.04] hover:border-[#D4A017]/30 hover:-translate-y-2" 
                 data-aos="fade-up" 
                 data-aos-delay="<?php echo 100 * ($index % 3); ?>">
                
                <div class="mb-10 relative">
                    <div class="w-14 h-14 bg-[#D4A017]/10 rounded-xl flex items-center justify-center group-hover:bg-[#D4A017] transition-all duration-500">
                        <svg class="w-7 h-7 text-[#D4A017] group-hover:text-black transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $s['icon']; ?>"></path>
                        </svg>
                    </div>
                </div>

                <h4 class="text-2xl font-bold text-white mb-6 tracking-tight group-hover:text-[#D4A017] transition-colors">
                    <?php echo $s['title']; ?>
                </h4>
                
                <p class="text-gray-500 text-sm leading-relaxed mb-8 font-light group-hover:text-gray-300 transition-colors">
                    <?php echo $s['desc']; ?>
                </p>

                <div class="flex flex-wrap gap-2 pt-6 border-t border-white/5">
                    <?php foreach($s['tags'] as $tag): ?>
                        <span class="text-[9px] uppercase tracking-widest text-gray-600 font-bold border border-white/10 px-3 py-1 rounded-full group-hover:border-[#D4A017]/30 group-hover:text-white transition-all">
                            <?php echo $tag; ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <span class="absolute top-8 right-8 text-white/5 text-4xl font-black group-hover:text-[#D4A017]/10 transition-colors">
                    0<?php echo $index + 1; ?>
                </span>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="mt-20 text-center" data-aos="zoom-in">
            <p class="text-gray-500 text-xs tracking-widest uppercase mb-8">Need a Custom Solution?</p>
            <a href="#contact" class="inline-flex items-center gap-6 group">
                <span class="text-white text-sm font-bold tracking-[0.3em] uppercase group-hover:text-[#D4A017] transition-colors">View All Capabilities</span>
                <div class="w-12 h-[1px] bg-white group-hover:bg-[#D4A017] group-hover:w-24 transition-all duration-500"></div>
            </a>
        </div>

    </div>
</section>