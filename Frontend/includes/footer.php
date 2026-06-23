<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Footer</title>
     
    <link rel='stylesheet' href='css/footer.css'></link>

    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- <style>
        /* ----- global reset & base ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
            background: #f0f7f2;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* dummy content to push footer down */
        .content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1.5rem;
            text-align: center;
        }
        .content h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #0f3b2c;
            letter-spacing: -0.5px;
        }
        .content h1 i {
            color: #2d7a5a;
            margin-right: 0.5rem;
        }
        .content p {
            color: #1a5a44;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0.5rem auto 0;
        }

        /* ============================================================
                   FOOTER STYLES
                   ============================================================ */
        .footer {
            background: linear-gradient(145deg, #0f3b2c, #1a5a44);
            color: #e3f3d9;
            padding: 3rem 1.5rem 1.5rem;
            border-top: 4px solid #8bc34a;
            box-shadow: 0 -10px 30px rgba(0, 30, 10, 0.15);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 2rem 2.5rem;
        }

        /* ----- brand / description ----- */
        .footer-brand h2 {
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            background: linear-gradient(to right, #d4edb0, #b5e48c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .footer-brand h2 i {
            -webkit-text-fill-color: #b5e48c;
            font-size: 2.2rem;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }
        .footer-brand p {
            font-size: 0.98rem;
            line-height: 1.6;
            color: #cde0c5;
            max-width: 320px;
            margin-bottom: 1.2rem;
        }

        /* ----- quick links & contact ----- */
        .footer h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #d4edb0;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
            position: relative;
            display: inline-block;
        }
        .footer h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 32px;
            height: 3px;
            background: #8bc34a;
            border-radius: 6px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer ul li {
            margin-bottom: 0.55rem;
        }
        .footer ul li a {
            color: #d4e6ce;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid transparent;
            padding-bottom: 2px;
        }
        .footer ul li a i {
            color: #8bc34a;
            font-size: 0.8rem;
            width: 20px;
            transition: transform 0.2s;
        }
        .footer ul li a:hover {
            color: #ffffff;
            transform: translateX(6px);
            border-bottom-color: #8bc34a;
        }
        .footer ul li a:hover i {
            transform: translateX(3px) scale(1.1);
            color: #b5e48c;
        }

        /* ----- contact info (icons + text) ----- */
        .footer-contact li {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #d4e6ce;
            font-size: 0.95rem;
            margin-bottom: 0.7rem;
        }
        .footer-contact li i {
            color: #8bc34a;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
            transition: transform 0.2s;
        }
        .footer-contact li:hover i {
            transform: scale(1.15);
            color: #b5e48c;
        }
        .footer-contact li span {
            line-height: 1.4;
        }

        /* ----- social icons ----- */
        .footer-social {
            display: flex;
            gap: 0.9rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
        }
        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: rgba(139, 195, 74, 0.15);
            color: #d4edb0;
            font-size: 1.3rem;
            text-decoration: none;
            border: 1px solid rgba(139, 195, 74, 0.25);
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.2);
            backdrop-filter: blur(2px);
        }
        .footer-social a:hover {
            background: #8bc34a;
            color: #0f3b2c;
            transform: translateY(-6px) scale(1.05);
            box-shadow: 0 10px 20px -6px rgba(0, 40, 10, 0.5);
            border-color: #8bc34a;
        }

        /* ----- copyright ----- */
        .footer-bottom {
            max-width: 1200px;
            margin: 2.5rem auto 0;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(139, 195, 74, 0.25);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.8rem;
            font-size: 0.92rem;
            color: #b5ccad;
        }
        .footer-bottom p {
            margin: 0;
        }
        .footer-bottom .heart {
            color: #b5e48c;
            display: inline-block;
            animation: pulseHeart 2s infinite;
        }

        @keyframes pulseHeart {
            0%,
            100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        /* ============================================================
                   RESPONSIVE
                   ============================================================ */

        /* tablet & small laptops */
        @media screen and (max-width: 992px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
                gap: 2rem 1.8rem;
            }
            .footer-brand p {
                max-width: 100%;
            }
        }

        /* mobile */
        @media screen and (max-width: 600px) {
            .footer {
                padding: 2.5rem 1rem 1.2rem;
            }
            .footer-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .footer-brand h2 {
                font-size: 1.8rem;
            }
            .footer h3 {
                font-size: 1.1rem;
            }
            .footer-social a {
                width: 42px;
                height: 42px;
                font-size: 1.2rem;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 0.4rem;
            }
            .content h1 {
                font-size: 2rem;
            }
        }

        /* small mobile */
        @media screen and (max-width: 380px) {
            .footer-brand h2 {
                font-size: 1.5rem;
            }
            .footer ul li a {
                font-size: 0.9rem;
            }
        }
    </style> -->
</head>
<body>

    <!-- ====== dummy page content ====== -->
    <div class="content">
        <div>
            <h1><i class="fas fa-leaf"></i> GreenCycle Hub</h1>
            <p>Scroll down to see the modern, eco-friendly footer.</p>
            <div style="margin-top: 1.5rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <span style="background: #d4edb0; padding: 0.3rem 1.2rem; border-radius: 30px; font-size: 0.9rem; color: #0f3b2c;">
                    <i class="fas fa-recycle"></i> Plastic Waste Management
                </span>
            </div>
        </div>
    </div>

    <!-- ============================================================
    FOOTER
    ============================================================ -->
    <footer class="footer" id="mainFooter">

        <div class="footer-container">

            <!-- Brand & description -->
            <div class="footer-brand">
                <h2>
                    <i class="fas fa-leaf"></i>
                    GreenCycle Hub
                </h2>
                <p>
                    Helping users understand plastic recycling and convert plastic waste
                    into useful products.
                </p>
                <!-- social icons (also placed here for better UX) -->
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                   <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="home.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="about.php"><i class="fas fa-chevron-right"></i> About</a></li>
                    <li><a href="convert.php"><i class="fas fa-chevron-right"></i> Convert Plastic</a></li>
                    <li><a href="history.php"><i class="fas fa-chevron-right"></i> History</a></li>
               
                    <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="footer-contact">
                <h3>Contact</h3>
                <ul>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>info@greencyclehub.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>+91 9301827656</span>
                    </li>
                    <li>
                        <i class="fas fa-location-dot"></i>
                        <span>House No. 123, Green Street, Burhanpur, Madhya Pradesh - 450331, India</span>
                    </li>
                </ul>
            </div>

            <!-- Social (separate column for desktop) -->
            <div class="footer-social-col">
                <h3>Follow Us</h3>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                </div>
                <!-- extra subtle note -->
                <p style="margin-top: 1.2rem; font-size: 0.85rem; color: #aac0a2;">
                    <i class="fas fa-recycle" style="color: #8bc34a;"></i> 
                    Reduce. Reuse. Recycle.
                </p>
            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>
                &copy; 2026 <strong>GreenCycle Hub</strong>. All Rights Reserved.
            </p>
            <p>
                <span class="heart"><i class="fas fa-heart"></i></span>
                Made with care for our planet
            </p>
        </div>

    </footer>

    <!-- ====== JAVASCRIPT (optional micro-interactions) ====== -->
    <script>
        (function() {
            'use strict';

            // --- small enhancement: copyright year dynamic (optional) ---
            const footer = document.getElementById('mainFooter');
            if (footer) {
                const yearSpan = footer.querySelector('.footer-bottom strong');
                if (yearSpan) {
                    // we keep the static "2026" as per requirement, but we can update it:
                    // actually we want to keep "2026" as specified, so we do nothing.
                    // but we can show a console message for fun.
                }
            }

            // --- social icon hover extra feedback (already in CSS) ---
            // --- smooth scroll for quick links (optional) ---
            const quickLinks = document.querySelectorAll('.footer-links a, .footer-social a');
            quickLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // just a demo: if href is "#", prevent default
                    if (this.getAttribute('href') === '#') {
                        e.preventDefault();
                        // you could add a small ripple or toast
                        console.log('🔗 ' + this.textContent.trim() + ' clicked (demo)');
                    }
                });
            });

            // --- dynamic year in footer (optional, but we keep "2026" as required) ---
            // If you want to auto-update, uncomment the lines below:
            const copyright = document.querySelector('.footer-bottom p:first-child');
            if (copyright) {
                const year = new Date().getFullYear();
                copyright.innerHTML = '&copy; ' + year + ' <strong>GreenCycle Hub</strong>. All Rights Reserved.';
            }

            console.log('🌿 GreenCycle Hub footer loaded successfully.');
        })();
    </script>

</body>
</html>