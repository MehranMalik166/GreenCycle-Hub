   (function() {
            'use strict';

            // ----- animated counters (Intersection Observer) -----
            const counters = document.querySelectorAll('.counter-number');
        //      console.log({
        // target: el.getAttribute('data-target'),
        // text: el.innerText,
        // element: el
    // });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-target'), 10);
                        if (isNaN(target) || el.dataset.animated === 'true') return;

                        el.dataset.animated = 'true';
                        animateCounter(el, target);
                    }
                });
            }, {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            });

            counters.forEach(counter => observer.observe(counter));

            function animateCounter(element, target) {
                let current = 0;
                const increment = Math.ceil(target / 80); // smooth over ~80 frames
                const duration = 2000; // ms
                const stepTime = Math.floor(duration / 80);

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = current.toLocaleString();
                }, stepTime);
            }

            // ----- smooth scroll for "Learn More" button (already handled by CSS) -----

            // ----- small console greeting -----
            console.log('🌿 GreenCycle Hub — Home page loaded successfully.');
            console.log('♻️ Together, we can make a difference!');

        })();