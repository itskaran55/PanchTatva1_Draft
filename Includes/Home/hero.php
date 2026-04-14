<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panch Tatva | The Digital Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --gold: #D4A017;
            /* --bg: #1c1d1f; */
            --bg: #1b1e22;
        }
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: var(--bg);
            cursor: none;
            overflow-x: hidden;
        }

        /* Cinematic Mesh Gradient */
        .mesh-bg {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: 
                radial-gradient(at 0% 0%, rgba(212, 160, 23, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(212, 160, 23, 0.03) 0px, transparent 50%);
            z-index: -1;
        }

        /* Magnetic Cursor */
        #cursor-dot {
            width: 8px; height: 8px;
            background: var(--gold);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 10000;
        }
        #cursor-ring {
            width: 50px; height: 50px;
            border: 1px solid rgba(212, 160, 23, 0.4);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: all 0.1s ease-out;
        }

        /* Gold Text Magic */
        .text-reveal {
            background: linear-gradient(to bottom, #ffffff 30%, #D4A017 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 20px rgba(212, 160, 23, 0.2));
        }

        /* Glass Buttons */
        .glass-btn {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(212, 160, 23, 0.2);
            backdrop-filter: blur(12px);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .glass-btn:hover {
            background: var(--gold);
            color: #000;
            border-color: var(--gold);
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 40px rgba(212, 160, 23, 0.3);
        }

        /* Vertical Lines for Structure */
        .v-line {
            position: absolute;
            width: 1px;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.05), transparent);
        }
    </style>
</head>
<body class="text-white selection:bg-[#D4A017] selection:text-black">

    <div class="mesh-bg"></div>
    <div id="cursor-dot"></div>
    <div id="cursor-ring"></div>

    <div class="v-line left-[10%]"></div>
    <div class="v-line left-[50%]"></div>
    <div class="v-line left-[90%]"></div>

    <section class="relative h-screen w-full flex flex-col items-center justify-center px-4 overflow-hidden">
        
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.02] select-none">
            <h2 class="text-[25vw] font-black tracking-tighter uppercase leading-none">PanchTatva</h2>
        </div>

        <!-- <div class="relative z-20 mb-8" data-aos="zoom-out" data-aos-duration="2000">
            <img src="<?php echo BASE_URL; ?>Logo/Panch-Tatva-Final-Logo.png" alt="Panch Tatva" 
                 class="w-[30px] md:w-[84px] lg:w-[72px] filter brightness-110 drop-shadow-[0_0_50px_rgba(212,160,23,0.4)]">
        </div> -->

        <div class="z-30 text-center max-w-5xl">
            <div class="overflow-hidden mb-4">
                <span class="inline-block text-[10px] md:text-xs tracking-[0.6em] uppercase text-gray-400 font-light" data-aos="fade-up">
                    Collective of Experts
                </span>
            </div>

            <h1 class="text-6xl md:text-9xl font-black tracking-tighter leading-[0.85] mb-8" data-aos="fade-up" data-aos-delay="300">
                <span class="text-reveal">DIGITAL</span><br>
                <span class="text-white">EVOLUTION</span>
            </h1>

            <div class="max-w-2xl mx-auto mb-12">
                <p class="text-gray-400 text-sm md:text-lg font-light leading-relaxed px-4 italic" data-aos="fade-up" data-aos-delay="500">
                    "Where Strategy, Design & Technology Become One." We don't just build websites; we craft digital ecosystems built to scale.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6" data-aos="fade-up" data-aos-delay="700">
                <a href="#contact" class="glass-btn px-14 py-5 rounded-none font-semibold text-xs tracking-[0.3em] uppercase w-full sm:w-auto">
                    Get Started
                </a>
                <a href="#portfolio" class="px-14 py-5 font-semibold text-xs tracking-[0.3em] uppercase border-b border-white/20 hover:border-[#D4A017] transition-all w-full sm:w-auto">
                    Our Work
                </a>
            </div>
        </div>

        <div class="absolute bottom-12 left-12 hidden lg:block text-[10px] tracking-[0.3em] uppercase text-gray-500 vertical-text">
            Premium Branding • AI Automation
        </div>
        
        <div class="absolute bottom-12 right-12 hidden lg:block text-[10px] tracking-[0.3em] uppercase text-gray-500">
            Est. 2026 • Panch Tatva
        </div>

    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html> 