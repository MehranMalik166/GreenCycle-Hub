<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Convert Plastic</title>

  <link rel="stylesheet" href="css/convert.css">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

</head>
<body>

    <!-- ============================================================
    PAGE HEADER SECTION
    ============================================================ -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white py-16 md:py-20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#8bc34a]/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#8bc34a]/5 rounded-full -translate-x-1/2 translate-y-1/2"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-9xl opacity-5 float-element">
            <i class="fas fa-recycle"></i>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-semibold text-[#b5e48c] border border-white/10 mb-6">
                <i class="fas fa-arrows-spin"></i>
                <span>Convert &amp; Recycle</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Plastic Waste <span class="text-[#b5e48c]">Converter</span>
            </h1>
            
            <div class="w-24 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-4 rounded-full"></div>
            
            <p class="text-xl md:text-2xl text-[#cde0c5] mt-6 max-w-3xl mx-auto leading-relaxed">
                Convert plastic waste into useful products and understand its recycling potential.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Eco-Friendly
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Sustainable
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Zero Waste
                </span>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CONVERTER FORM + RESULT SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-[#f4faf5] section-hidden" id="converter">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- LEFT: Form -->
                <div class="glass-card rounded-3xl p-8 md:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-[#d4edb0] rounded-xl flex items-center justify-center text-2xl text-[#2d7a5a]">
                            <i class="fas fa-pen-ruler"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-[#0f3b2c]">Conversion Details</h2>
                            <p class="text-sm text-[#1a5a44]">Enter the details to calculate your recycling impact</p>
                        </div>
                    </div>

                    <form id="converterForm" class="space-y-6">

                    <input type="hidden" id="user_token" name="user_token">
                        <!-- Plastic Type -->
                        <div>
                            <label for="plasticType" class="form-label block mb-2">
                                <i class="fas fa-tag text-[#8bc34a] mr-2"></i>
                                Plastic Type
                            </label>
                            <div class="relative">
                                <select id="plasticType" class="form-input w-full rounded-xl px-4 py-3 appearance-none pr-12">
                                    <option value="">Select Plastic Type</option>
                                    <option value="PET Bottle">PET Bottle</option>
                                    <option value="Plastic Bag">Plastic Bag</option>
                                    <option value="Plastic Container">Plastic Container</option>
                                    <option value="Mixed Plastic">Mixed Plastic</option>
                                </select>
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1a5a44] pointer-events-none">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="error-message" id="plasticTypeError">Please select a plastic type</div>
                        </div>

                        <!-- Quantity -->
                        <div>
                            <label for="quantity" class="form-label block mb-2">
                                <i class="fas fa-weight-scale text-[#8bc34a] mr-2"></i>
                                Quantity (KG)
                            </label>
                            <div class="relative">
                                <input type="number" id="quantity" class="form-input w-full rounded-xl px-4 py-3" 
                                       placeholder="Enter quantity in kilograms" min="0.1" step="0.1" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1a5a44] text-sm font-medium">
                                    KG
                                </div>
                            </div>
                            <div class="error-message" id="quantityError">Please enter a valid quantity (minimum 0.1 KG)</div>
                        </div>

                        <!-- Convert To -->
                        <div>
                            <label for="convertTo" class="form-label block mb-2">
                                <i class="fas fa-arrow-right-arrow-left text-[#8bc34a] mr-2"></i>
                                Convert To
                            </label>
                            <div class="relative">
                                <select id="convertTo" class="form-input w-full rounded-xl px-4 py-3 appearance-none pr-12">
                                    <option value="">Select Conversion Method</option>
                                    <option value="Eco Bricks">Eco Bricks</option>
                                    <option value="Flower Pots">Flower Pots</option>
                                    <option value="Plastic Furniture">Plastic Furniture</option>
                                    <option value="Road Material">Road Material</option>
                                    <option value="Recycled Granules">Recycled Granules</option>
                                </select>
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1a5a44] pointer-events-none">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="error-message" id="convertToError">Please select a conversion method</div>
                        </div>

                        <!-- Generate Button -->
                        <button type="submit" class="btn-primary w-full rounded-xl px-6 py-4 text-[#0f3b2c] font-bold text-lg flex items-center justify-center gap-3">
                            <i class="fas fa-wand-magic-sparkles"></i>
                            Generate Result
                        </button>

                        <!-- Reset Button -->
                        <button type="reset" class="w-full rounded-xl px-6 py-3 text-[#1a5a44] font-medium text-sm border-2 border-[#8bc34a]/30 hover:border-[#8bc34a] transition-all">
                            <i class="fas fa-rotate-right mr-2"></i>
                            Reset Form
                        </button>
                    </form>
                </div>

                <!-- RIGHT: Result Card -->
                <div id="resultContainer" class="flex items-center justify-center min-h-[400px]">
                    <!-- Placeholder -->
                    <div id="resultPlaceholder" class="glass-card rounded-3xl p-10 text-center w-full">
                        <div class="text-7xl mb-4">🔄</div>
                        <h3 class="text-xl font-bold text-[#0f3b2c]">Ready to Convert</h3>
                        <p class="text-[#1a5a44] mt-2">Fill in the details and click "Generate Result" to see your recycling impact.</p>
                        <div class="mt-6 flex justify-center gap-4">
                            <span class="text-3xl">♻️</span>
                            <span class="text-3xl">🌱</span>
                            <span class="text-3xl">🌍</span>
                        </div>
                    </div>

                    <!-- Result Card -->
                    <div id="resultCard" class="result-card rounded-2xl w-full hidden">
                        <!-- Header -->
                        <div class="result-header">
                            <h3>
                                <i class="fas fa-check-circle text-[#b5e48c]"></i>
                                Conversion Complete
                            </h3>
                            <span class="badge">
                                <i class="fas fa-leaf mr-1"></i>
                                Verified
                            </span>
                        </div>

                        <!-- Result Details -->
                        <div class="p-4">
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-tag text-[#8bc34a] mr-2"></i>
                                    Plastic
                                </span>
                                <span id="resultType" class="result-value">PET Bottle</span>
                            </div>
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-weight-scale text-[#8bc34a] mr-2"></i>
                                    Quantity
                                </span>
                                <span id="resultQuantity" class="result-value">5 KG</span>
                            </div>
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-arrow-right-arrow-left text-[#8bc34a] mr-2"></i>
                                    Converted To
                                </span>
                                <span id="resultConvertTo" class="result-value">Eco Bricks</span>
                            </div>
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-cubes text-[#8bc34a] mr-2"></i>
                                    Output
                                </span>
                                <span id="resultOutput" class="result-value highlight font-bold">50 Eco Bricks</span>
                            </div>
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-leaf text-[#8bc34a] mr-2"></i>
                                    CO₂ Saved
                                </span>
                                <span id="savedCO2" class="result-value text-[#2d7a5a] font-bold">2.5 KG</span>
                            </div>
                            <div class="result-row">
                                <span class="result-label">
                                    <i class="fas fa-calendar-day text-[#8bc34a] mr-2"></i>
                                    Date
                                </span>
                                <span id="resultDate" class="result-value">20-06-2026</span>
                            </div>
                        </div>

                        <!-- Footer Actions -->
                        <div class="border-t border-[#e8f0e8] p-4 flex justify-between items-center">
                            <div class="flex items-center gap-2 text-sm text-[#1a5a44]">
                                <i class="fas fa-recycle text-[#8bc34a]"></i>
                                <span>♻️ Plastic waste successfully converted</span>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="window.print()" class="print-btn text-[#1a5a44] hover:text-[#8bc34a] transition-all p-2 rounded-lg hover:bg-[#d4edb0]/30" title="Print Result">
                                    <i class="fas fa-print text-lg"></i>
                                </button>
                                <button onclick="downloadResult()" class="text-[#1a5a44] hover:text-[#8bc34a] transition-all p-2 rounded-lg hover:bg-[#d4edb0]/30" title="Download Result">
                                    <i class="fas fa-download text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    ENVIRONMENTAL IMPACT SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-white section-hidden" id="impact">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-earth-americas"></i>
                    Environmental Impact
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Making a <span class="text-[#2d7a5a]">Difference</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-4 text-lg">Every conversion contributes to a cleaner, greener planet.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="text-5xl mb-3">♻️</div>
                    <div class="counter-number text-3xl md:text-4xl font-bold text-[#2d7a5a]" data-target="28456">0</div>
                    <p class="text-[#1a5a44] font-medium mt-1">KG Plastic Recycled</p>
                    <p class="text-sm text-[#1a5a44]/70 mt-2">Reducing waste in landfills</p>
                </div>

                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="text-5xl mb-3">🌱</div>
                    <div class="counter-number text-3xl md:text-4xl font-bold text-[#2d7a5a]" data-target="12438">0</div>
                    <p class="text-[#1a5a44] font-medium mt-1">KG CO₂ Reduced</p>
                    <p class="text-sm text-[#1a5a44]/70 mt-2">Lowering carbon footprint</p>
                </div>

                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="text-5xl mb-3">🌍</div>
                    <div class="counter-number text-3xl md:text-4xl font-bold text-[#2d7a5a]" data-target="9876">0</div>
                    <p class="text-[#1a5a44] font-medium mt-1">Users Educated</p>
                    <p class="text-sm text-[#1a5a44]/70 mt-2">Building awareness</p>
                </div>
            </div>

            <div class="mt-8 bg-gradient-to-r from-[#d4edb0]/30 to-[#b5e48c]/20 rounded-2xl p-6 text-center border border-[#8bc34a]/20">
                <p class="text-[#0f3b2c] font-medium">
                    <i class="fas fa-bullhorn text-[#2d7a5a] mr-2"></i>
                    "Every kilogram of plastic recycled saves energy and protects our environment."
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    INFORMATION CARDS SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-[#f4faf5] section-hidden" id="info-cards">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-cubes"></i>
                    Recycled Products
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    What We <span class="text-[#2d7a5a]">Create</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-4 text-lg">Turning plastic waste into valuable, sustainable products.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Eco Bricks -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Eco Bricks</h3>
                    <p class="text-sm text-[#1a5a44] leading-relaxed">Building blocks made from compressed plastic waste, used in construction.</p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-recycle mr-1"></i> 100% Recycled
                    </div>
                </div>

                <!-- Flower Pots -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Flower Pots</h3>
                    <p class="text-sm text-[#1a5a44] leading-relaxed">Beautiful, durable pots for gardening made from recycled plastic.</p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-leaf mr-1"></i> Eco-Friendly
                    </div>
                </div>

                <!-- Plastic Furniture -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-chair"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Plastic Furniture</h3>
                    <p class="text-sm text-[#1a5a44] leading-relaxed">Durable, weather-resistant furniture made from recycled plastic.</p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-house mr-1"></i> Long-lasting
                    </div>
                </div>

                <!-- Road Material -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-road"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Road Material</h3>
                    <p class="text-sm text-[#1a5a44] leading-relaxed">Plastic waste used in road construction, making them stronger and more durable.</p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-truck mr-1"></i> Sustainable
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CALL TO ACTION SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white section-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="glass-dark rounded-3xl p-8 md:p-12 relative overflow-hidden">
                <div class="absolute -top-20 -right-20 text-8xl opacity-5">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="absolute -bottom-20 -left-20 text-8xl opacity-5">
                    <i class="fas fa-recycle"></i>
                </div>

                <div class="text-5xl mb-4">🌍</div>
                <h2 class="text-2xl md:text-4xl font-bold leading-tight">
                    Every Kilogram of Plastic <br />
                    <span class="text-[#b5e48c]">Recycled Makes a Difference</span>
                </h2>
                <p class="text-[#cde0c5] text-lg mt-4 max-w-2xl mx-auto">
                    Track your recycling journey and see the positive impact you're making on the environment.
                </p>
                <div class="mt-8">
                    <a href="history.php" class="inline-flex items-center gap-3 px-10 py-4 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-bold text-lg rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg pulse-cta">
                        <i class="fas fa-clock-rotate-left"></i>
                        View Conversion History
                    </a>
                </div>
                <p class="text-sm text-[#cde0c5] mt-4">
                    <i class="fas fa-chart-line text-[#8bc34a] mr-1"></i>
                    Track your impact in real-time
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    JAVASCRIPT
    ============================================================ -->


<script src='js/convert.js'></script>
    <script src="js/app.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>