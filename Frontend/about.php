<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · About</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        /* ----- custom styles & animations ----- */
        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f7f2;
        }

        /* section reveal animations */
        .section-hidden {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .section-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* card hover effects */
        .hover-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(139, 195, 74, 0.1);
        }
        .hover-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px -12px rgba(0, 40, 10, 0.2);
            border-color: #8bc34a;
        }

        /* icon circle hover */
        .icon-circle {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-card:hover .icon-circle {
            transform: scale(1.1) rotate(-5deg);
            background: #2d7a5a;
            color: white;
        }

        /* floating animation for banner */
        .float-banner {
            animation: floatBanner 6s ease-in-out infinite;
        }
        @keyframes floatBanner {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(3deg); }
        }

        /* pulse for CTA */
        .pulse-cta {
            animation: pulseCta 2.5s ease-in-out infinite;
        }
        @keyframes pulseCta {
            0%, 100% { box-shadow: 0 0 0 0 rgba(139, 195, 74, 0.4); }
            50% { box-shadow: 0 0 0 20px rgba(139, 195, 74, 0); }
        }

        /* process step animation */
        .process-step {
            transition: all 0.4s ease;
            cursor: default;
        }
        .process-step:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px -8px rgba(0, 40, 10, 0.2);
        }

        /* benefit card icon */
        .benefit-icon {
            transition: all 0.3s ease;
        }
        .hover-card:hover .benefit-icon {
            transform: scale(1.2) rotate(5deg);
        }

        /* scroll indicator */
        .scroll-indicator {
            animation: bounceDown 2s ease-in-out infinite;
        }
        @keyframes bounceDown {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(10px); }
        }

        /* gradient text utility */
        .gradient-text {
            background: linear-gradient(135deg, #2d7a5a, #8bc34a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>

    <!-- ============================================================
    PAGE BANNER SECTION
    ============================================================ -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white py-20 md:py-28">
        <!-- decorative elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#8bc34a]/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#8bc34a]/5 rounded-full -translate-x-1/2 translate-y-1/2"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-9xl opacity-5">
            <i class="fas fa-recycle"></i>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-semibold text-[#b5e48c] border border-white/10 mb-6">
                <i class="fas fa-leaf"></i>
                <span>Know Us Better</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                About <span class="gradient-text">GreenCycle Hub</span>
            </h1>
            
            <div class="w-24 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-4 rounded-full"></div>
            
            <p class="text-xl md:text-2xl text-[#cde0c5] mt-6 max-w-3xl mx-auto leading-relaxed">
                Promoting plastic waste recycling and environmental awareness through innovative solutions.
            </p>
            
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Sustainable Solutions
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Eco-Friendly
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Zero Waste Future
                </span>
            </div>
            
            <div class="mt-10 scroll-indicator">
                <i class="fas fa-chevron-down text-2xl text-[#b5e48c] opacity-60"></i>
            </div>
        </div>
    </section>

    <!-- ============================================================
    ABOUT PROJECT SECTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-white section-hidden" id="about-project">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- left content -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fas fa-info-circle"></i>
                        About Our Project
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4 leading-tight">
                        Transforming Plastic Waste <br />
                        <span class="gradient-text">Into Valuable Resources</span>
                    </h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mt-3 rounded-full"></div>
                    
                    <p class="text-[#1a5a44] mt-6 leading-relaxed text-lg">
                        GreenCycle Hub is a comprehensive Plastic Waste Management System designed to help 
                        users understand the importance of recycling and convert plastic waste into useful 
                        products. Our platform educates, empowers, and enables individuals and organizations 
                        to make a positive environmental impact.
                    </p>
                    
                    <p class="text-[#1a5a44] mt-4 leading-relaxed">
                        We believe that every piece of plastic has the potential to be transformed into 
                        something valuable. Through our innovative tools and educational resources, we're 
                        building a community of conscious recyclers working toward a sustainable future.
                    </p>
                    
                    <div class="mt-6 flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 text-[#2d7a5a]">
                            <i class="fas fa-check-circle"></i>
                            <span class="font-medium">Educational Resources</span>
                        </div>
                        <div class="flex items-center gap-2 text-[#2d7a5a]">
                            <i class="fas fa-check-circle"></i>
                            <span class="font-medium">Conversion Tools</span>
                        </div>
                        <div class="flex items-center gap-2 text-[#2d7a5a]">
                            <i class="fas fa-check-circle"></i>
                            <span class="font-medium">Impact Tracking</span>
                        </div>
                    </div>
                </div>
                
                <!-- right: illustration -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-[#d4edb0]/30 to-[#b5e48c]/20 rounded-3xl p-8 border border-[#8bc34a]/20">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl transition-all">
                                <div class="text-4xl mb-2">♻️</div>
                                <h4 class="font-bold text-[#0f3b2c] text-sm">Recycled</h4>
                                <p class="text-2xl font-bold text-[#2d7a5a]">28K+</p>
                                <p class="text-xs text-[#1a5a44]">KG Plastic</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl transition-all">
                                <div class="text-4xl mb-2">🌱</div>
                                <h4 class="font-bold text-[#0f3b2c] text-sm">Reduced</h4>
                                <p class="text-2xl font-bold text-[#2d7a5a]">12K+</p>
                                <p class="text-xs text-[#1a5a44]">Tons CO₂</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl transition-all">
                                <div class="text-4xl mb-2">👥</div>
                                <h4 class="font-bold text-[#0f3b2c] text-sm">Educated</h4>
                                <p class="text-2xl font-bold text-[#2d7a5a]">9.8K+</p>
                                <p class="text-xs text-[#1a5a44]">Users</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl transition-all">
                                <div class="text-4xl mb-2">🔄</div>
                                <h4 class="font-bold text-[#0f3b2c] text-sm">Methods</h4>
                                <p class="text-2xl font-bold text-[#2d7a5a]">156</p>
                                <p class="text-xs text-[#1a5a44]">Recycling</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- floating decoration -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-[#8bc34a]/20 rounded-full float-banner"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-[#2d7a5a]/20 rounded-full float-banner" style="animation-delay: 2s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    PLASTIC WASTE PROBLEM SECTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-[#f4faf5] section-hidden" id="problem">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-triangle-exclamation"></i>
                    The Challenge
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Understanding the <span class="gradient-text">Plastic Waste</span> Problem
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-5 text-lg leading-relaxed">
                    Plastic waste is one of the most pressing environmental challenges of our time, 
                    affecting ecosystems, wildlife, and human health worldwide.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: What is Plastic Waste -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-sm">
                    <div class="icon-circle w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-5">
                        <i class="fas fa-trash-can"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">What is Plastic Waste?</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Plastic waste refers to discarded plastic materials that have been used and 
                        disposed of, including packaging, bottles, bags, and industrial waste. 
                        Most plastics take hundreds of years to decompose.
                    </p>
                </div>

                <!-- Card 2: Why is it Harmful -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-sm">
                    <div class="icon-circle w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-5">
                        <i class="fas fa-skull"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">Why is it Harmful?</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Plastic waste releases toxic chemicals into soil and water, contributes to 
                        greenhouse gas emissions, and breaks down into microplastics that enter 
                        the food chain, affecting human health.
                    </p>
                </div>

                <!-- Card 3: Effects on Environment -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-sm">
                    <div class="icon-circle w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-5">
                        <i class="fas fa-earth-americas"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">Effects on Environment &amp; Wildlife</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Marine animals ingest or become entangled in plastic waste. Plastic pollution 
                        destroys habitats, contaminates water sources, and disrupts entire ecosystems, 
                        threatening biodiversity.
                    </p>
                </div>
            </div>

            <!-- additional stat -->
            <div class="mt-12 bg-gradient-to-r from-[#0f3b2c] to-[#1a5a44] rounded-2xl p-6 md:p-8 text-center text-white">
                <p class="text-lg md:text-xl font-medium">
                    <i class="fas fa-exclamation-triangle text-[#b5e48c] mr-3"></i>
                    Every year, over <span class="text-[#b5e48c] font-bold">8 million tons</span> of plastic waste 
                    enter our oceans — threatening marine life and ecosystems.
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    BENEFITS OF RECYCLING SECTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-white section-hidden" id="benefits">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-star"></i>
                    Why Recycle?
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Benefits of <span class="gradient-text">Recycling</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-5 text-lg leading-relaxed">
                    Recycling plastic waste offers numerous environmental, economic, and social benefits 
                    that contribute to a sustainable future.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Benefit 1 -->
                <div class="hover-card bg-[#f4faf5] rounded-2xl p-6 text-center">
                    <div class="benefit-icon text-5xl text-[#2d7a5a] mb-4">🌱</div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Reduce Pollution</h3>
                    <p class="text-sm text-[#1a5a44]">Decrease plastic waste in landfills and oceans, reducing environmental contamination.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="hover-card bg-[#f4faf5] rounded-2xl p-6 text-center">
                    <div class="benefit-icon text-5xl text-[#2d7a5a] mb-4">⛰️</div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Save Resources</h3>
                    <p class="text-sm text-[#1a5a44]">Conserve natural resources like oil and water used in plastic production.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="hover-card bg-[#f4faf5] rounded-2xl p-6 text-center">
                    <div class="benefit-icon text-5xl text-[#2d7a5a] mb-4">🐠</div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Protect Marine Life</h3>
                    <p class="text-sm text-[#1a5a44]">Prevent marine animals from ingesting or getting entangled in plastic waste.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="hover-card bg-[#f4faf5] rounded-2xl p-6 text-center">
                    <div class="benefit-icon text-5xl text-[#2d7a5a] mb-4">🔄</div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Create Useful Products</h3>
                    <p class="text-sm text-[#1a5a44]">Transform waste into valuable products, creating a circular economy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    MISSION & VISION SECTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold text-[#b5e48c] border border-white/10">
                    <i class="fas fa-bullseye"></i>
                    Our Purpose
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mt-4">
                    Mission &amp; <span class="text-[#b5e48c]">Vision</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:bg-white/10 transition-all">
                    <div class="w-16 h-16 bg-[#8bc34a]/20 rounded-2xl flex items-center justify-center text-3xl text-[#b5e48c] mb-5">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-[#d4edb0]">Our Mission</h3>
                    <p class="text-[#cde0c5] leading-relaxed text-lg">
                        To promote recycling awareness and sustainable waste management practices 
                        by providing innovative tools, educational resources, and community engagement 
                        that empower individuals to transform plastic waste into valuable resources.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-[#b5e48c]">
                        <i class="fas fa-check-circle"></i>
                        <span class="text-sm">Empowering change makers</span>
                    </div>
                </div>

                <!-- Vision -->
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:bg-white/10 transition-all">
                    <div class="w-16 h-16 bg-[#8bc34a]/20 rounded-2xl flex items-center justify-center text-3xl text-[#b5e48c] mb-5">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-[#d4edb0]">Our Vision</h3>
                    <p class="text-[#cde0c5] leading-relaxed text-lg">
                        To build a cleaner, greener, and more sustainable future where plastic waste 
                        is no longer a problem but a valuable resource. We envision a world where 
                        recycling is a way of life and communities thrive in harmony with nature.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-[#b5e48c]">
                        <i class="fas fa-globe"></i>
                        <span class="text-sm">A sustainable world for all</span>
                    </div>
                </div>
            </div>

            <!-- core values -->
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <div class="text-2xl mb-1">♻️</div>
                    <p class="text-sm text-[#cde0c5]">Sustainability</p>
                </div>
                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <div class="text-2xl mb-1">🤝</div>
                    <p class="text-sm text-[#cde0c5]">Community</p>
                </div>
                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <div class="text-2xl mb-1">💡</div>
                    <p class="text-sm text-[#cde0c5]">Innovation</p>
                </div>
                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <div class="text-2xl mb-1">🌍</div>
                    <p class="text-sm text-[#cde0c5]">Environment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    RECYCLING IMPORTANCE (TIMELINE)
    ============================================================ -->
    <section class="py-16 md:py-24 bg-white section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-route"></i>
                    The Journey
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Recycling <span class="gradient-text">Process</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-5 text-lg leading-relaxed">
                    A simple yet powerful process that transforms waste into valuable resources.
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-6 relative">
                <!-- connecting line (desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-[#8bc34a] via-[#b5e48c] to-[#8bc34a] transform -translate-y-1/2"></div>

                <!-- Step 1 -->
                <div class="process-step relative bg-[#f4faf5] rounded-2xl p-6 text-center border-2 border-[#8bc34a]/20 hover:border-[#8bc34a] z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#2d7a5a] to-[#1a5a44] rounded-full flex items-center justify-center text-2xl text-white mx-auto mb-4 shadow-lg">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="text-sm font-bold text-[#8bc34a] mb-1">STEP 1</div>
                    <h4 class="text-lg font-bold text-[#0f3b2c]">Collect</h4>
                    <p class="text-sm text-[#1a5a44] mt-1">Gather plastic waste from various sources</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step relative bg-[#f4faf5] rounded-2xl p-6 text-center border-2 border-[#8bc34a]/20 hover:border-[#8bc34a] z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#2d7a5a] to-[#1a5a44] rounded-full flex items-center justify-center text-2xl text-white mx-auto mb-4 shadow-lg">
                        <i class="fas fa-filter"></i>
                    </div>
                    <div class="text-sm font-bold text-[#8bc34a] mb-1">STEP 2</div>
                    <h4 class="text-lg font-bold text-[#0f3b2c]">Sort</h4>
                    <p class="text-sm text-[#1a5a44] mt-1">Separate by type and quality</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step relative bg-[#f4faf5] rounded-2xl p-6 text-center border-2 border-[#8bc34a]/20 hover:border-[#8bc34a] z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#2d7a5a] to-[#1a5a44] rounded-full flex items-center justify-center text-2xl text-white mx-auto mb-4 shadow-lg">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="text-sm font-bold text-[#8bc34a] mb-1">STEP 3</div>
                    <h4 class="text-lg font-bold text-[#0f3b2c]">Recycle</h4>
                    <p class="text-sm text-[#1a5a44] mt-1">Process into raw materials</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step relative bg-[#f4faf5] rounded-2xl p-6 text-center border-2 border-[#8bc34a]/20 hover:border-[#8bc34a] z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#2d7a5a] to-[#1a5a44] rounded-full flex items-center justify-center text-2xl text-white mx-auto mb-4 shadow-lg">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="text-sm font-bold text-[#8bc34a] mb-1">STEP 4</div>
                    <h4 class="text-lg font-bold text-[#0f3b2c]">Reuse</h4>
                    <p class="text-sm text-[#1a5a44] mt-1">Create new useful products</p>
                </div>
            </div>

            <!-- mobile arrows -->
            <div class="md:hidden flex flex-col items-center gap-2 mt-4 text-2xl text-[#8bc34a]">
                <i class="fas fa-arrow-down"></i>
                <i class="fas fa-arrow-down"></i>
                <i class="fas fa-arrow-down"></i>
            </div>

            <!-- process description -->
            <div class="mt-12 bg-gradient-to-r from-[#d4edb0]/30 to-[#b5e48c]/20 rounded-2xl p-6 text-center border border-[#8bc34a]/20">
                <p class="text-[#0f3b2c] font-medium">
                    <i class="fas fa-infinity text-[#2d7a5a] mr-2"></i>
                    From waste to wonder — every item recycled is a step toward a cleaner planet.
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CALL TO ACTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white section-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-10 md:p-16 border border-white/10 relative overflow-hidden">
                <!-- decorative -->
                <div class="absolute -top-20 -right-20 text-8xl opacity-5">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="absolute -bottom-20 -left-20 text-8xl opacity-5">
                    <i class="fas fa-recycle"></i>
                </div>

                <div class="text-6xl mb-6">🌍</div>
                <h2 class="text-3xl md:text-5xl font-bold leading-tight">
                    Join the Movement for a <br />
                    <span class="text-[#b5e48c]">Cleaner Planet</span>
                </h2>
                <p class="text-[#cde0c5] text-lg mt-4 max-w-2xl mx-auto leading-relaxed">
                    Every action counts. Start your recycling journey today and be part of the 
                    solution to plastic pollution. Together, we can make a difference.
                </p>
                <div class="mt-8">
                    <a href="convert.php" class="inline-flex items-center gap-3 px-10 py-4 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-bold text-lg rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg pulse-cta">
                        <i class="fas fa-play"></i>
                        Start Plastic Conversion
                    </a>
                </div>
                <p class="text-sm text-[#cde0c5] mt-4">
                    <i class="fas fa-shield-alt text-[#8bc34a] mr-1"></i>
                    Free &amp; easy to get started
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    JAVASCRIPT: Scroll Animations
    ============================================================ -->
    <script>
        (function() {
            'use strict';

            // ----- scroll reveal animation -----
            const sections = document.querySelectorAll('.section-hidden');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('section-visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            sections.forEach(section => observer.observe(section));

            // ----- smooth scroll for anchor links -----
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // ----- console greeting -----
            console.log('🌿 GreenCycle Hub — About Page loaded successfully!');
            console.log('♻️ Together, we can build a sustainable future.');

        })();
    </script>

<script src="app.js"></script>
</body>
</html>

<?php include 'includes/footer.php'; ?>