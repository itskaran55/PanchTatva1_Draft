<?php 
include(__DIR__ . '/../Config/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panch Tatva | Premium Digital Agency</title>
    
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* CRITICAL: Remove any native smooth scroll to stop the lagging fight */
        html {
            scroll-behavior: auto !important;
        }

        body {
            background-color: #03060A;
            cursor: none;
            overflow-x: hidden;
            width: 100%;
        }

        /* Hardware Acceleration for Cursor */
        #cursor-dot, #cursor-ring {
            pointer-events: none;
            position: fixed;
            z-index: 9999;
            border-radius: 50%;
            will-change: transform;
            /* Using transform instead of top/left for 60fps performance */
            transform: translate3d(-100%, -100%, 0); 
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        /* Lenis CSS */
        html.lenis { height: auto; }
        .lenis.lenis-smooth { scroll-behavior: auto; }
        .lenis.lenis-smooth [data-lenis-prevent] { overscroll-behavior: contain; }
        .lenis.lenis-stopped { overflow: hidden; }

         @media (pointer: coarse) {
            #cursor-dot {
                display: none !important;
            }
            #cursor-ring {
                display: none !important;
            }

        }
    </style>
</head>
<body>
    <div id="cursor-dot" style="width: 8px; height: 8px; background: #D4A017;"></div>
    <div id="cursor-ring" style="width: 40px; height: 40px; border: 1.5px solid rgba(212, 160, 23, 0.4);"></div>

    <div class="main">
        <?php 
            include(__DIR__ . '/../Includes/Layout/header.php'); 
            include(__DIR__ . '/../Includes/Home/hero.php'); 
            include(__DIR__ . '/../Includes/Home/philosophy.php'); 
            include(__DIR__ . '/../Includes/Home/ourofferings.php'); 
            include(__DIR__ . '/../Includes/Home/roadmap.php'); 
            include(__DIR__ . '/../Includes/Home/portfolio.php'); 
            include(__DIR__ . '/../Includes/Home/whychooseus.php'); 
            include(__DIR__ . '/../Includes/Home/cta.php'); 
            include(__DIR__ . '/../Includes/Layout/footer.php'); 
        ?>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>

    <script>
        // 1. Butter-Smooth Lenis Setup
        const lenis = new Lenis({
            duration: 1.2,
            lerp: 0.1, // Smoothness intensity
            wheelMultiplier: 1,
            gestureOrientation: 'vertical',
            normalizeWheel: true, // Fixes trackpad vs mouse wheel inconsistency
            smoothWheel: true
        });

        // Request Animation Frame for Lenis
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // 2. High-Performance AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50,
            disable: window.innerWidth < 768 // Disable on mobile to prevent lag
        });

        // Sync AOS positions on Lenis scroll
        lenis.on('scroll', () => {
            AOS.refresh();
        });

        // 3. Ultra-Fast Cursor (No Lag)
        const dot = document.getElementById('cursor-dot');
        const ring = document.getElementById('cursor-ring');

        let mouseX = 0, mouseY = 0;
        let dotX = 0, dotY = 0;
        let ringX = 0, ringY = 0;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // Animation loop for cursor to keep it detached from scroll lag
        function animateCursor() {
            // Smooth easing for cursor
            dotX += (mouseX - dotX) * 0.2;
            dotY += (mouseY - dotY) * 0.2;
            ringX += (mouseX - ringX) * 0.1;
            ringY += (mouseY - ringY) * 0.1;

            dot.style.transform = `translate3d(${dotX - 4}px, ${dotY - 4}px, 0)`;
            ring.style.transform = `translate3d(${ringX - 20}px, ${ringY - 20}px, 0)`;

            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Hover Interactivity
        const interactives = document.querySelectorAll('a, button, .group, img');
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                ring.style.transform += ' scale(1.5)';
                ring.style.borderColor = '#D4A017';
                ring.style.backgroundColor = 'rgba(212, 160, 23, 0.1)';
            });
            el.addEventListener('mouseleave', () => {
                ring.style.backgroundColor = 'transparent';
                ring.style.borderColor = 'rgba(212, 160, 23, 0.4)';
            });
        });

            // --- SMOOTH ANCHOR SCROLLING VIA LENIS ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);

                if (target) {
                    lenis.scrollTo(target, {
                        offset: -100, // This keeps the section from hiding under your fixed header
                        duration: 1.5,
                        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
                    });
                }
            });
        });
    </script>
</body>
</html>