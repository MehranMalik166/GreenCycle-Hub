<?php
// ====== PHP ACTIVE PAGE DETECTION ======
$current_page = basename($_SERVER['PHP_SELF']);

function isActive($page, $current_page) {
    return $page === $current_page ? 'active' : '';
}

function isToolsActive($current_page) {
    $tools_pages = ['convert.php', 'history.php', 'statistics.php'];
    return in_array($current_page, $tools_pages) ? 'active' : '';
}

if (empty($current_page) || $current_page == '') {
    $current_page = 'home.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Navbar</title>

    <link rel='stylesheet' href='css/navbar.css'></link>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- <style>
        /* ----- NAVBAR STYLES ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 200vh;
            background: linear-gradient(135deg, #f0f7f2 0%, #e8f5e9 100%);
        }

        /* Navbar */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: linear-gradient(135deg, #0f3b2c 0%, #1a5a44 100%);
            border-bottom: 3px solid #8bc34a;
            box-shadow: 0 4px 20px rgba(0, 30, 10, 0.3);
            padding: 0 1.5rem;
        }

        .logo-text {
            font-size: 1.6rem;
            font-weight: 700;
            background: linear-gradient(135deg, #d4edb0, #b5e48c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }
        .logo-icon {
            color: #b5e48c;
            font-size: 2rem;
            filter: drop-shadow(0 2px 8px rgba(139, 195, 74, 0.3));
            transition: transform 0.3s ease;
        }
        .logo-icon:hover {
            transform: rotate(-15deg) scale(1.1);
        }

        /* Nav Links - Desktop */
        .nav-link {
            color: #d4e6ce;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 0.95rem;
            letter-spacing: 0.3px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        .nav-link:hover {
            background: rgba(139, 195, 74, 0.15);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .nav-link i {
            color: #8bc34a;
            transition: transform 0.3s ease;
        }
        .nav-link:hover i {
            transform: scale(1.1);
        }

        .nav-link.active {
            background: #2d7a5a !important;
            color: white !important;
            box-shadow: 0 4px 15px rgba(45, 122, 90, 0.4);
        }
        .nav-link.active i {
            color: #d4edb0 !important;
        }

        /* Desktop Dropdown */
        .dropdown-group {
            position: relative;
        }
        .dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            min-width: 220px;
            background: rgba(20, 60, 40, 0.97);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 0.6rem 0;
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(139, 195, 74, 0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px) scale(0.95);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
        }
        .dropdown-group:hover .dropdown-menu,
        .dropdown-menu:hover {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }
        .dropdown-group:hover .fa-caret-down {
            transform: rotate(180deg);
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.6rem 1.8rem;
            color: #d4e6ce;
            font-weight: 450;
            border-left: 3px solid transparent;
            transition: all 0.25s ease;
            font-size: 0.92rem;
            text-decoration: none;
        }
        .dropdown-menu a:hover {
            background: rgba(139, 195, 74, 0.1);
            border-left-color: #8bc34a;
            color: #ffffff;
            padding-left: 2rem;
        }
        .dropdown-menu a i {
            color: #8bc34a;
            width: 20px;
            text-align: center;
        }
        .dropdown-menu a.active {
            background: rgba(139, 195, 74, 0.15);
            border-left-color: #8bc34a;
            color: #ffffff;
        }

        /* ============================================
                   MOBILE SIDEBAR STYLES
                   ============================================ */
        .hamburger-btn {
            background: transparent;
            border: 2px solid rgba(139, 195, 74, 0.3);
            border-radius: 12px;
            padding: 0.5rem 0.8rem;
            color: #d4edb0;
            font-size: 1.6rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .hamburger-btn:hover {
            background: rgba(139, 195, 74, 0.1);
            border-color: #8bc34a;
        }

        /* Sidebar Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            right: -320px;
            width: 300px;
            height: 100%;
            background: linear-gradient(180deg, #0f3b2c, #1a5a44);
            z-index: 1001;
            padding: 1.5rem;
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow-y: auto;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.3);
        }
        .sidebar.open {
            right: 0;
        }

        /* Sidebar Header */
        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(139, 195, 74, 0.2);
            margin-bottom: 1.5rem;
        }
        .sidebar-header .logo-text {
            font-size: 1.4rem;
        }
        .sidebar-close {
            background: transparent;
            border: none;
            color: #d4edb0;
            font-size: 1.8rem;
            cursor: pointer;
            padding: 0.3rem 0.6rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .sidebar-close:hover {
            background: rgba(139, 195, 74, 0.15);
            transform: rotate(90deg);
        }

        /* Sidebar Nav Links */
        .sidebar .nav-link {
            width: 100%;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            font-size: 1rem;
            border-left: 3px solid transparent;
            margin-bottom: 0.2rem;
            text-decoration: none;
        }
        .sidebar .nav-link:hover {
            background: rgba(139, 195, 74, 0.1);
            border-left-color: #8bc34a;
        }
        .sidebar .nav-link.active {
            background: #2d7a5a !important;
            border-left-color: #b5e48c;
        }

        /* Sidebar Dropdown */
        .sidebar .dropdown-group {
            width: 100%;
        }
        .sidebar .dropdown-menu {
            position: static;
            background: rgba(10, 40, 28, 0.4);
            backdrop-filter: blur(4px);
            border-radius: 12px;
            margin: 0.3rem 0.5rem 0.3rem 1rem;
            padding: 0;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transform: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(139, 195, 74, 0.1);
            pointer-events: none;
            box-shadow: none;
            min-width: auto;
        }
        .sidebar .dropdown-menu.open {
            max-height: 300px;
            opacity: 1;
            visibility: visible;
            padding: 0.4rem 0;
            pointer-events: auto;
        }
        .sidebar .dropdown-group.open .dropdown-menu {
            max-height: 300px;
            opacity: 1;
            visibility: visible;
            padding: 0.4rem 0;
            pointer-events: auto;
        }
        .sidebar .dropdown-group.open .fa-caret-down {
            transform: rotate(180deg);
        }
        .sidebar .dropdown-menu a {
            padding: 0.5rem 1.2rem;
            border-left: 2px solid transparent;
            font-size: 0.9rem;
            text-decoration: none;
        }
        .sidebar .dropdown-menu a:hover {
            padding-left: 1.5rem;
            background: rgba(139, 195, 74, 0.08);
            border-left-color: #8bc34a;
        }
        .sidebar .dropdown-menu a.active {
            background: rgba(139, 195, 74, 0.12);
            border-left-color: #8bc34a;
        }

        /* Hide desktop nav on mobile */
        @media (max-width: 768px) {
            .desktop-nav {
                display: none !important;
            }
        }
        @media (min-width: 769px) {
            .mobile-toggle {
                display: none !important;
            }
            .sidebar-overlay {
                display: none !important;
            }
            .sidebar {
                display: none !important;
            }
        }

        /* Scrollbar styling for sidebar */
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: #8bc34a;
            border-radius: 10px;
        }

        .current-page-info {
            background: #d4edb0;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            color: #0f3b2c;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 1rem;
        }
    </style> -->
</head>
<body>

    <!-- ============================================================
    NAVBAR
    ============================================================ -->
    <nav class="navbar flex items-center justify-between flex-wrap">

        <!-- Logo -->
        <div class="flex items-center gap-3 py-3 ">
            <i class="fas fa-leaf logo-icon"></i>
            <span class="sm:font-lg text-white" class="logo-text">GreenCycle Hub</span>
        </div>

        <!-- Hamburger (mobile) -->
        <button id="hamburger" class="hamburger-btn mobile-toggle" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Desktop Navigation -->
        <ul id="desktopNav" class="desktop-nav flex items-center gap-1">
            <!-- Home -->
            <li>
                <a href="home.php" class="nav-link <?php echo isActive('home.php', $current_page); ?>">
                    <i class="fas fa-house"></i> Home
                </a>
            </li>
            
            <!-- About -->
            <li>
                <a href="about.php" class="nav-link <?php echo isActive('about.php', $current_page); ?>">
                    <i class="fas fa-circle-info"></i> About
                </a>
            </li>
            
            <!-- Tools (Dropdown) -->
            <li class="dropdown-group">
                <a href="#" class="nav-link <?php echo isToolsActive($current_page); ?>">
                    <span><i class="fas fa-tools"></i> Tools</span>
                    <i class="fas fa-caret-down ml-1 transition-transform duration-300"></i>
                </a>
                <ul class="dropdown-menu flex flex-col">
                    <li>
                        <a href="convert.php" class="<?php echo isActive('convert.php', $current_page); ?>">
                            <i class="fas fa-recycle"></i> Convert Plastic
                        </a>
                    </li>
                    <li>
                        <a href="history.php" class="<?php echo isActive('history.php', $current_page); ?>">
                            <i class="fas fa-clock-rotate-left"></i> History
                        </a>
                    </li>
                   
                </ul>
            </li>
            
            <!-- Contact -->
            <li>
                <a href="contact.php" class="nav-link <?php echo isActive('contact.php', $current_page); ?>">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </nav>

    <!-- ============================================================
    SIDEBAR OVERLAY
    ============================================================ -->
    <div id="sidebarOverlay" class="sidebar-overlay"></div>

    <!-- ============================================================
    SIDEBAR (Mobile)
    ============================================================ -->
    <div id="sidebar" class="sidebar">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <div class="flex items-center gap-2">
                <i class="fas fa-leaf text-2xl text-[#b5e48c]"></i>
                <span class="logo-text text-xl">GreenCycle Hub</span>
            </div>
            <button id="closeSidebar" class="sidebar-close">
                <i class="fas fa-xmark"></i>
            </button>
        </div>

        <!-- Sidebar Navigation -->
        <ul id="sidebarNav" class="flex flex-col gap-0.5">
            <!-- Home -->
            <li>
                <a href="home.php" class="nav-link <?php echo isActive('home.php', $current_page); ?>">
                    <i class="fas fa-house"></i> Home
                </a>
            </li>
            
            <!-- About -->
            <li>
                <a href="about.php" class="nav-link <?php echo isActive('about.php', $current_page); ?>">
                    <i class="fas fa-circle-info"></i> About
                </a>
            </li>
            
            <!-- Tools (Dropdown) -->
            <li class="dropdown-group">
                <a href="#" id="sidebarDropdownToggle" class="nav-link flex items-center justify-between <?php echo isToolsActive($current_page); ?>">
                    <span><i class="fas fa-tools"></i> Tools</span>
                    <i class="fas fa-caret-down transition-transform duration-300"></i>
                </a>
                <ul class="dropdown-menu flex flex-col">
                    <li>
                        <a href="convert.php" class="<?php echo isActive('convert.php', $current_page); ?>">
                            <i class="fas fa-recycle"></i> Convert Plastic
                        </a>
                    </li>
                    <li>
                        <a href="history.php" class="<?php echo isActive('history.php', $current_page); ?>">
                            <i class="fas fa-clock-rotate-left"></i> History
                        </a>
                    </li>
                    <li>
                        <a href="statistics.php" class="<?php echo isActive('statistics.php', $current_page); ?>">
                            <i class="fas fa-chart-simple"></i> Statistics
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Contact -->
            <li>
                <a href="contact.php" class="nav-link <?php echo isActive('contact.php', $current_page); ?>">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>

        <!-- Sidebar Footer -->
        <div class="mt-8 pt-4 border-t border-[#3b7a5a] text-center">
            <p class="text-[#aac0a2] text-sm">
                <i class="fas fa-leaf text-[#8bc34a] mr-1"></i>
                Reduce. Reuse. Recycle.
            </p>
        </div>
    </div>

    <!-- ============================================================
    DEMO CONTENT - Shows current page
    ============================================================ -->
 

    <!-- ============================================================
    JAVASCRIPT
    ============================================================ -->
    <script>
        (function() {
            'use strict';

            // DOM Elements
            const hamburger = document.getElementById('hamburger');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const closeSidebar = document.getElementById('closeSidebar');
            const sidebarDropdownToggle = document.getElementById('sidebarDropdownToggle');
            const sidebarDropdownGroup = sidebarDropdownToggle?.closest('.dropdown-group');

            // ----- Open Sidebar -----
            function openSidebar() {
                sidebar.classList.add('open');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                // Change hamburger icon
                const icon = hamburger.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            }

            // ----- Close Sidebar -----
            function closeSidebarFn() {
                sidebar.classList.remove('open');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
                // Reset hamburger icon
                const icon = hamburger.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
                // Close any open dropdowns in sidebar
                sidebar.querySelectorAll('.dropdown-group.open').forEach(group => {
                    group.classList.remove('open');
                });
            }

            // ----- Toggle Sidebar -----
            hamburger.addEventListener('click', function(e) {
                e.stopPropagation();
                if (sidebar.classList.contains('open')) {
                    closeSidebarFn();
                } else {
                    openSidebar();
                }
            });

            // ----- Close Sidebar with Close Button -----
            closeSidebar.addEventListener('click', closeSidebarFn);

            // ----- Close Sidebar with Overlay -----
            overlay.addEventListener('click', closeSidebarFn);

            // ----- Close Sidebar with Escape Key -----
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && sidebar.classList.contains('open')) {
                    closeSidebarFn();
                }
            });

            // ============================================================
            // SIDEBAR DROPDOWN TOGGLE (Mobile)
            // ============================================================
            if (sidebarDropdownToggle && sidebarDropdownGroup) {
                sidebarDropdownToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Close other dropdowns in sidebar
                    sidebar.querySelectorAll('.dropdown-group.open').forEach(group => {
                        if (group !== sidebarDropdownGroup) {
                            group.classList.remove('open');
                        }
                    });

                    sidebarDropdownGroup.classList.toggle('open');
                });
            }

            // ============================================================
            // CLOSE SIDEBAR WHEN CLICKING A LINK (Mobile)
            // ============================================================
            const sidebarLinks = sidebar.querySelectorAll('.nav-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Don't close if it's the dropdown toggle
                    if (this.id === 'sidebarDropdownToggle') return;

                    // Close sidebar after a tiny delay to let the link navigate
                    setTimeout(closeSidebarFn, 150);
                });
            });

            // ============================================================
            // HANDLE RESIZE: Close sidebar on desktop
            // ============================================================
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && sidebar.classList.contains('open')) {
                    closeSidebarFn();
                }
            });

            // ============================================================
            // PREVENT SIDEBAR CLOSE WHEN CLICKING INSIDE IT
            // ============================================================
            sidebar.addEventListener('click', function(e) {
                e.stopPropagation();
            });

            console.log('🌿 GreenCycle Hub — Navbar with Sidebar loaded!');
            console.log('📱 Click hamburger to open slide-in sidebar from right.');
            console.log('📄 Current page: <?php echo $current_page; ?>');

        })();
    </script>

</body>
</html>