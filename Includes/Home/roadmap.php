<section id="process" class="relative bg-[#1b1e22] py-24 md:py-40 px-6 overflow-hidden border-t border-white/5">

    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#D4A017 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>

    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-[#D4A017]/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto max-w-7xl relative z-10">

        <div class="flex flex-col items-center text-center mb-24">
            <div class="inline-flex items-center gap-3 mb-6" data-aos="fade-down">
                <span class="w-12 h-[1px] bg-[#D4A017]"></span>
                <span class="text-[10px] tracking-[0.5em] uppercase text-[#D4A017] font-black">Our Execution</span>
                <span class="w-12 h-[1px] bg-[#D4A017]"></span>
            </div>
            <!-- <h2 class="text-5xl md:text-8xl font-bold tracking-tighter text-white uppercase" data-aos="fade-up" data-aos-delay="100">
                HOW WE <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D4A017] to-white italic font-light">BUILD</span>
            </h2> -->

            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white" data-aos="fade-up" data-aos-delay="100">
                How We 
                <span class="italic font-light opacity-80">Build</span>
            </h2>
        </div>

        <div class="relative">
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-y-1/2"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-4">

                <?php
                $processSteps = [
                    ['01', 'Discover', 'Understand your business & goals', 'fade-up'],
                    ['02', 'Plan', 'Strategy & roadmap creation', 'fade-down'],
                    ['03', 'Create', 'Design, develop, and build', 'fade-up'],
                    ['04', 'Launch', 'Go live with precision', 'fade-down'],
                    ['05', 'Scale', 'Optimize and grow continuously', 'fade-up']
                ];

                foreach ($processSteps as $index => $step):
                    $isEven = ($index % 2 == 0);
                ?>
                    <div class="relative group" data-aos="<?php echo $step[3]; ?>" data-aos-delay="<?php echo $index * 150; ?>">

                        <div class="relative z-20 bg-white/[0.02] border border-white/5 p-8 rounded-2xl backdrop-blur-sm transition-all duration-700 hover:border-[#D4A017]/50 hover:bg-white/[0.04] <?php echo $isEven ? 'lg:mb-32' : 'lg:mt-32'; ?>">

                            <span class="text-5xl font-black text-white/5 absolute -top-4 -right-2 group-hover:text-[#D4A017]/20 transition-colors">
                                <?php echo $step[0]; ?>
                            </span>

                            <div class="w-10 h-10 bg-[#D4A017]/10 rounded-lg flex items-center justify-center mb-6 border border-[#D4A017]/20 group-hover:bg-[#D4A017] transition-all duration-500">
                                <span class="text-xs font-bold text-[#D4A017] group-hover:text-black"><?php echo $step[0]; ?></span>
                            </div>

                            <h4 class="text-xl font-bold text-white mb-4 uppercase tracking-tighter group-hover:text-[#D4A017] transition-colors">
                                <?php echo $step[1]; ?>
                            </h4>
                            <p class="text-gray-500 text-xs leading-relaxed font-light group-hover:text-gray-300 transition-colors">
                                <?php echo $step[2]; ?>
                            </p>

                            <div class="hidden lg:block absolute <?php echo $isEven ? '-bottom-[65px]' : '-top-[65px]'; ?> left-1/2 -translate-x-1/2 w-3 h-3 bg-[#03060A] border-2 border-[#D4A017] rounded-full z-30 group-hover:scale-150 transition-transform"></div>
                        </div>

                        <div class="hidden lg:block absolute left-1/2 -translate-x-1/2 <?php echo $isEven ? 'bottom-0 h-16' : 'top-0 h-16'; ?> w-[1px] bg-gradient-to-b from-[#D4A017]/50 to-transparent pointer-events-none"></div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="mt-24 text-center" data-aos="zoom-in">
            <div class="inline-block p-[1px] bg-gradient-to-r from-transparent via-[#D4A017]/50 to-transparent w-full max-w-md"></div>
            <p class="mt-8 text-gray-500 text-[10px] tracking-[0.5em] uppercase italic">Panch Tatva — A Collective of Experts</p>
        </div>

    </div>
</section>