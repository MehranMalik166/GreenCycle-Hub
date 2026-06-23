<!-- we add the navabr  -->
<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Home</title>

    <link rel="stylesheet" href="css/home.css"></link>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  
</head>
<body>

    <!-- ============================================================
    HERO SECTION
    ============================================================ -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white">
        <!-- decorative leaf -->
        <div class="absolute top-10 right-10 text-6xl opacity-10 floating-leaf">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#8bc34a] rounded-full opacity-5 -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- left content -->
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 bg-[#8bc34a]/20 rounded-full px-4 py-2 text-sm font-medium text-[#b5e48c] backdrop-blur-sm border border-[#8bc34a]/30">
                        <i class="fas fa-recycle"></i>
                        <span>Plastic Waste Management</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
                        Transform Plastic Waste <br />
                        <span class="bg-gradient-to-r from-[#d4edb0] to-[#b5e48c] bg-clip-text text-transparent">Into Useful Products</span>
                    </h1>

                    <p class="text-lg text-[#d4e6ce] max-w-lg leading-relaxed">
                        Helping users understand plastic recycling and convert plastic waste into useful products. Join us in creating a sustainable future.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="convert.php" class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-[#8bc34a]/30">
                            <i class="fas fa-play"></i>
                            Start Converting
                        </a>
                        <a href="#why-matters" class="inline-flex items-center gap-2 px-8 py-3.5 border-2 border-[#8bc34a] hover:bg-[#8bc34a]/10 text-[#d4edb0] font-semibold rounded-full transition-all duration-300">
                            <i class="fas fa-circle-info"></i>
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- right: modern illustration -->
                <div class="hero-image-placeholder aspect-square md:aspect-[4/3] w-full max-w-lg mx-auto md:ml-auto flex items-center justify-center p-8 border border-[#8bc34a]/30 shadow-2xl">
                    <div class="text-center space-y-3">
                        <div class="text-7xl sm:text-8xl mb-2">♻️</div>
                        <div class="flex justify-center gap-6 text-4xl">
                            <span>🔄</span>
                            <span>🌱</span>
                            <span>🌍</span>
                        </div>
                        <p class="text-[#d4edb0] font-medium text-sm bg-[#0f3b2c]/60 px-4 py-2 rounded-full inline-block backdrop-blur-sm border border-[#8bc34a]/20">
                            <i class="fas fa-arrow-right mr-2"></i> Zero Waste Future
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    WHY PLASTIC RECYCLING MATTERS
    ============================================================ -->
    <section id="why-matters" class="py-16 md:py-24 bg-[#f4faf5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#2d7a5a] font-semibold text-sm tracking-wider uppercase flex items-center justify-center gap-2">
                    <i class="fas fa-seedling"></i>
                    Why It Matters
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-3">
                    Why Plastic Recycling <span class="text-[#2d7a5a]">Matters</span>
                </h2>
                <p class="text-[#1a5a44] mt-4 text-lg">
                    Plastic pollution is one of the greatest environmental challenges. Recycling helps reduce waste, conserve resources, and protect our planet for future generations.
                </p>
            </div>

            <!-- 3 feature cards -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-sm hover:shadow-xl">
                    <div class="feature-icon w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center mx-auto mb-5 text-3xl text-[#2d7a5a]">
                        <i class="fas fa-cloud-sun"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">Reduce Pollution</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Diverting plastic from landfills and oceans reduces environmental pollution and protects wildlife.
                    </p>
                </div>

                <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-sm hover:shadow-xl">
                    <div class="feature-icon w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center mx-auto mb-5 text-3xl text-[#2d7a5a]">
                        <i class="fas fa-earth-americas"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">Save Environment</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Recycling conserves natural resources, saves energy, and reduces greenhouse gas emissions.
                    </p>
                </div>

                <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-sm hover:shadow-xl">
                    <div class="feature-icon w-16 h-16 bg-[#d4edb0] rounded-2xl flex items-center justify-center mx-auto mb-5 text-3xl text-[#2d7a5a]">
                        <i class="fas fa-arrows-rotate"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f3b2c] mb-3">Promote Recycling</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        Encouraging recycling creates a circular economy where waste becomes a valuable resource.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    RECYCLING PROCESS SECTION
    ============================================================ -->
     <!-- ===== SECTION ===== -->
   <!-- ============================================================
    RECYCLING PROCESS SECTION - COMPLETE REDESIGN
    ============================================================ -->
<section class="py-16 md:py-24 bg-gradient-to-br from-[#0f3b2c] via-[#1a5a44] to-[#0f3b2c] text-white relative overflow-hidden">
    <!-- decorative elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#8bc34a]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#8bc34a]/5 rounded-full translate-x-1/2 translate-y-1/2"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full">
        <div class="absolute top-20 left-10 text-6xl opacity-5 floating-leaf">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="absolute bottom-20 right-10 text-6xl opacity-5 floating-leaf" style="animation-delay: 3s;">
            <i class="fas fa-recycle"></i>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- section header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-[#b5e48c] px-5 py-2.5 rounded-full text-sm font-semibold tracking-wider uppercase border border-white/10">
                <i class="fas fa-gear"></i>
                Our Process
            </div>
            <h2 class="text-3xl md:text-5xl font-bold mt-4 leading-tight">
                How We <span class="text-[#b5e48c]">Transform</span> <br />
                <span class="text-[#d4edb0]">Plastic Waste</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-4 rounded-full"></div>
            <p class="text-[#cde0c5] mt-5 text-lg max-w-2xl mx-auto leading-relaxed">
                From collection to creation — discover how we turn plastic waste into valuable products
                through our sustainable recycling process.
            </p>
        </div>

        <!-- process steps - timeline style -->
        <div class="relative">
            <!-- vertical timeline line (center) -->
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-[#8bc34a] via-[#b5e48c] to-[#8bc34a] transform -translate-x-1/2"></div>
            
            <div class="space-y-12 md:space-y-0">
                <!-- Step 1 -->
                <div class="relative md:flex md:items-center md:justify-between">
                    <div class="md:w-5/12 text-right pr-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all duration-500 group">
                            <div class="flex items-center justify-end gap-3 mb-3">
                                <span class="text-sm font-bold text-[#b5e48c]">STEP 01</span>
                                <span class="w-12 h-0.5 bg-[#8bc34a]/50"></span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#b5e48c] transition-colors">Collect Plastic Waste</h3>
                            <p class="text-[#cde0c5] leading-relaxed">Gather plastic waste from households, industries, and recycling centers through our extensive collection network.</p>
                            <div class="mt-3 flex items-center justify-end gap-2 text-sm text-[#b5e48c]">
                                <span>Collection points</span>
                                <i class="fas fa-location-dot"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- center icon -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-2xl text-white shadow-2xl border-4 border-[#0f3b2c] relative z-10">
                            <i class="fas fa-trash-can"></i>
                        </div>
                    </div>
                    
                    <div class="md:w-5/12 pl-8"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative md:flex md:items-center md:justify-between md:flex-row-reverse">
                    <div class="md:w-5/12 text-left pl-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all duration-500 group">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="w-12 h-0.5 bg-[#8bc34a]/50"></span>
                                <span class="text-sm font-bold text-[#b5e48c]">STEP 02</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#b5e48c] transition-colors">Sort &amp; Segregate</h3>
                            <p class="text-[#cde0c5] leading-relaxed">Separate plastics by type, color, and quality using advanced sorting technology for optimal recycling.</p>
                            <div class="mt-3 flex items-center gap-2 text-sm text-[#b5e48c]">
                                <i class="fas fa-microchip"></i>
                                <span>AI-powered sorting</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-2xl text-white shadow-2xl border-4 border-[#0f3b2c] relative z-10">
                            <i class="fas fa-filter"></i>
                        </div>
                    </div>
                    
                    <div class="md:w-5/12 pr-8"></div>
                </div>

                <!-- Step 3 -->
                <div class="relative md:flex md:items-center md:justify-between">
                    <div class="md:w-5/12 text-right pr-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all duration-500 group">
                            <div class="flex items-center justify-end gap-3 mb-3">
                                <span class="text-sm font-bold text-[#b5e48c]">STEP 03</span>
                                <span class="w-12 h-0.5 bg-[#8bc34a]/50"></span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#b5e48c] transition-colors">Recycle &amp; Process</h3>
                            <p class="text-[#cde0c5] leading-relaxed">Transform sorted plastic into high-quality raw materials through advanced recycling technologies.</p>
                            <div class="mt-3 flex items-center justify-end gap-2 text-sm text-[#b5e48c]">
                                <span>Zero waste technology</span>
                                <i class="fas fa-recycle"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-2xl text-white shadow-2xl border-4 border-[#0f3b2c] relative z-10">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                    
                    <div class="md:w-5/12 pl-8"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative md:flex md:items-center md:justify-between md:flex-row-reverse">
                    <div class="md:w-5/12 text-left pl-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all duration-500 group">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="w-12 h-0.5 bg-[#8bc34a]/50"></span>
                                <span class="text-sm font-bold text-[#b5e48c]">STEP 04</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-[#b5e48c] transition-colors">Create New Products</h3>
                            <p class="text-[#cde0c5] leading-relaxed">Manufacture innovative, sustainable products from recycled plastic materials.</p>
                            <div class="mt-3 flex items-center gap-2 text-sm text-[#b5e48c]">
                                <i class="fas fa-box-open"></i>
                                <span>Sustainable products</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-2xl text-white shadow-2xl border-4 border-[#0f3b2c] relative z-10">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    
                    <div class="md:w-5/12 pr-8"></div>
                </div>
            </div>
        </div>

        <!-- mobile process (cards with numbers) -->
        <div class="md:hidden mt-8 space-y-4">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-white font-bold text-sm">01</div>
                    <div>
                        <h4 class="text-white font-bold">Collect Plastic Waste</h4>
                        <p class="text-sm text-[#cde0c5]">Gather waste from various sources</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-[#8bc34a]">
                <i class="fas fa-arrow-down"></i>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-white font-bold text-sm">02</div>
                    <div>
                        <h4 class="text-white font-bold">Sort &amp; Segregate</h4>
                        <p class="text-sm text-[#cde0c5]">AI-powered sorting technology</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-[#8bc34a]">
                <i class="fas fa-arrow-down"></i>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-white font-bold text-sm">03</div>
                    <div>
                        <h4 class="text-white font-bold">Recycle &amp; Process</h4>
                        <p class="text-sm text-[#cde0c5]">Advanced recycling technology</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-[#8bc34a]">
                <i class="fas fa-arrow-down"></i>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#8bc34a] to-[#2d7a5a] rounded-full flex items-center justify-center text-white font-bold text-sm">04</div>
                    <div>
                        <h4 class="text-white font-bold">Create New Products</h4>
                        <p class="text-sm text-[#cde0c5]">Sustainable product manufacturing</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom stats -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                <div class="text-3xl font-bold text-[#b5e48c]">4</div>
                <div class="text-sm text-[#cde0c5]">Simple Steps</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                <div class="text-3xl font-bold text-[#b5e48c]">100%</div>
                <div class="text-sm text-[#cde0c5]">Sustainable</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                <div class="text-3xl font-bold text-[#b5e48c]">24/7</div>
                <div class="text-sm text-[#cde0c5]">Operations</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                <div class="text-3xl font-bold text-[#b5e48c]">♻️</div>
                <div class="text-sm text-[#cde0c5]">Zero Waste</div>
            </div>
        </div>
    </div>
</section>
    <!-- ============================================================
    FEATURES SECTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-[#f4faf5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#2d7a5a] font-semibold text-sm tracking-wider uppercase flex items-center justify-center gap-2">
                    <i class="fas fa-star"></i>
                    Features
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-3">
                    Powerful <span class="text-[#2d7a5a]">Features</span>
                </h2>
                <p class="text-[#1a5a44] mt-4 text-lg">
                    Everything you need to manage plastic waste effectively and track your impact.
                </p>
            </div>

          <div class="grid md:grid-cols-3 gap-8">
    
    <!-- Card 1 -->
    <a href="convert.php" class="block bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-[#8bc34a] hover:border-l-[#2d7a5a] group">
        <div class="card-icon w-14 h-14 bg-[#d4edb0] rounded-xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-4 group-hover:scale-110 group-hover:-rotate-8 group-hover:bg-[#2d7a5a] group-hover:text-white transition-all duration-300">
            <i class="fas fa-recycle"></i>
        </div>
        <h3 class="text-xl font-bold text-[#0f3b2c] mb-2 group-hover:text-[#2d7a5a] transition-colors">Convert Plastic Waste</h3>
        <p class="text-[#1a5a44]">Transform plastic waste into reusable materials with our easy-to-use conversion tool.</p>
    </a>

    <!-- Card 2 -->
    <a href="history.php" class="block bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-[#8bc34a] hover:border-l-[#2d7a5a] group">
        <div class="card-icon w-14 h-14 bg-[#d4edb0] rounded-xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-4 group-hover:scale-110 group-hover:-rotate-8 group-hover:bg-[#2d7a5a] group-hover:text-white transition-all duration-300">
            <i class="fas fa-history"></i>
        </div>
        <h3 class="text-xl font-bold text-[#0f3b2c] mb-2 group-hover:text-[#2d7a5a] transition-colors">View Conversion History</h3>
        <p class="text-[#1a5a44]">Track all your past conversions and monitor your recycling progress over time.</p>
    </a>

    <!-- Card 3 -->
    <a href="history.php" class="block bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-[#8bc34a] hover:border-l-[#2d7a5a] group">
        <div class="card-icon w-14 h-14 bg-[#d4edb0] rounded-xl flex items-center justify-center text-2xl text-[#2d7a5a] mb-4 group-hover:scale-110 group-hover:-rotate-8 group-hover:bg-[#2d7a5a] group-hover:text-white transition-all duration-300">
            <i class="fas fa-chart-pie"></i>
        </div>
        <h3 class="text-xl font-bold text-[#0f3b2c] mb-2 group-hover:text-[#2d7a5a] transition-colors">Explore Statistics</h3>
        <p class="text-[#1a5a44]">View detailed statistics and insights about your recycling efforts and environmental impact.</p>
    </a>

</div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    IMPACT STATISTICS (animated counters)
    ============================================================ -->
    <section class="py-16 md:py-24 bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#b5e48c] font-semibold text-sm tracking-wider uppercase flex items-center justify-center gap-2">
                    <i class="fas fa-chart-line"></i>
                    Our Impact
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 text-[#d4edb0]">
                    Making a <span class="text-[#b5e48c]">Difference</span>
                </h2>
                <p class="text-[#cde0c5] mt-4 text-lg">
                    Together, we're creating a cleaner, greener planet through plastic recycling.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all">
                    <div class="text-4xl mb-2">♻️</div>
                    <div class="counter-number text-4xl md:text-5xl font-bold text-[#b5e48c]" data-target="28456">0</div>
                    <p class="text-[#cde0c5] mt-2 font-medium">Plastic Recycled (kg)</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all">
                    <div class="text-4xl mb-2">🌱</div>
                    <div class="counter-number text-4xl md:text-5xl font-bold text-[#b5e48c]" data-target="12438">0</div>
                    <p class="text-[#cde0c5] mt-2 font-medium">Pollution Reduced (tons)</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all">
                    <div class="text-4xl mb-2">🔄</div>
                    <div class="counter-number text-4xl md:text-5xl font-bold text-[#b5e48c]" data-target="156">0</div>
                    <p class="text-[#cde0c5] mt-2 font-medium">Recycling Methods</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-all">
                    <div class="text-4xl mb-2">👥</div>
                    <div class="counter-number text-4xl md:text-5xl font-bold text-[#b5e48c]" data-target="9876">0</div>
                    <p class="text-[#cde0c5] mt-2 font-medium">Users Educated</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CALL TO ACTION
    ============================================================ -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-to-br from-[#f4faf5] to-[#e8f5e9] rounded-3xl p-10 md:p-16 border border-[#8bc34a]/30 shadow-xl relative overflow-hidden">
                <!-- decoration -->
                <div class="absolute -top-10 -right-10 text-8xl opacity-5">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="absolute -bottom-10 -left-10 text-8xl opacity-5">
                    <i class="fas fa-recycle"></i>
                </div>

                <h2 class="text-3xl md:text-5xl font-bold text-[#0f3b2c] relative z-10">
                    Ready to Make a <span class="text-[#2d7a5a]">Difference</span>?
                </h2>
                <p class="text-[#1a5a44] text-lg mt-4 max-w-2xl mx-auto relative z-10">
                    Join thousands of users who are actively converting plastic waste into useful products. Start your recycling journey today.
                </p>
                <div class="mt-8 relative z-10">
                    <a href="convert.php" class="inline-flex items-center gap-3 px-10 py-4 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-bold text-lg rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg pulse-glow">
                        <i class="fas fa-play"></i>
                        Start Plastic Conversion
                    </a>
                </div>
                <p class="text-sm text-[#1a5a44] mt-4 relative z-10">
                    <i class="fas fa-shield-alt text-[#8bc34a] mr-1"></i>
                    Free &amp; easy to get started
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    JAVASCRIPT: Animated Counters
    ============================================================ -->
    <script src='home.js'>
     
    </script>

    <script src="app.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>