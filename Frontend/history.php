<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Conversion History</title>
  
    <link rel="stylesheet" href="css/history.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                <i class="fas fa-clock-rotate-left"></i>
                <span>History &amp; Records</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Conversion <span class="text-[#b5e48c]">History</span>
            </h1>
            
            <div class="w-24 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-4 rounded-full"></div>
            
            <p class="text-xl md:text-2xl text-[#cde0c5] mt-6 max-w-3xl mx-auto leading-relaxed">
                View all previously converted plastic waste records and track your recycling impact.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Track Progress
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    View History
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Monitor Impact
                </span>
            </div>
        </div>
    </section>

    <!-- ============================================================
    SUMMARY CARDS SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-[#f4faf5] section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-chart-simple"></i>
                    Statistics Overview
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Your Recycling <span class="text-[#2d7a5a]">Impact</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-4 text-lg">Summary of all your conversion activities.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6" id="summaryCards">
                <!-- Will be filled by JavaScript -->
            </div>
        </div>
    </section>

    <!-- ============================================================
    SEARCH & FILTER SECTION
    ============================================================ -->
    <section class="py-8 md:py-12 bg-white section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-6 md:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <i class="fas fa-filter text-[#2d7a5a] text-xl"></i>
                    <h3 class="text-xl font-bold text-[#0f3b2c]">Search &amp; Filter Records</h3>
                </div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="text-sm font-semibold text-[#1a5a44] block mb-1">
                            <i class="fas fa-tag text-[#8bc34a] mr-1"></i>
                            Plastic Type
                        </label>
                        <input type="text" id="searchPlastic" class="filter-input" placeholder="Search by plastic type..." />
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1a5a44] block mb-1">
                            <i class="fas fa-cube text-[#8bc34a] mr-1"></i>
                            Conversion Product
                        </label>
                        <input type="text" id="searchProduct" class="filter-input" placeholder="Search by product..." />
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1a5a44] block mb-1">
                            <i class="fas fa-calendar text-[#8bc34a] mr-1"></i>
                            Date
                        </label>
                        <input type="date" id="searchDate" class="filter-input" />
                    </div>
                </div>
                <div class="flex gap-3 mt-4">
                    <button id="applyFilter" class="btn-primary px-6 py-2.5 rounded-xl text-[#0f3b2c] font-bold flex items-center gap-2">
                        <i class="fas fa-search"></i>
                        Apply Filter
                    </button>
                    <button id="clearFilter" class="px-6 py-2.5 rounded-xl border-2 border-[#8bc34a]/30 hover:border-[#8bc34a] text-[#1a5a44] font-medium transition-all">
                        <i class="fas fa-undo"></i>
                        Clear
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    HISTORY RECORDS SECTION
    ============================================================ -->
    <section class="py-8 md:py-12 bg-[#f4faf5] section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-[#0f3b2c]">Conversion Records</h2>
                    <p class="text-[#1a5a44] text-sm mt-1" id="recordCount">
                        Loading records...
                    </p>
                </div>
                <div class="text-sm text-[#1a5a44] hidden md:block">
                    <i class="fas fa-rotate text-[#8bc34a] mr-1"></i>
                    Last updated: <?php echo date('d M Y, h:i A'); ?>
                </div>
            </div>

            <!-- DESKTOP TABLE VIEW -->
         
<!-- ============================================================
DESKTOP TABLE VIEW - FIXED
============================================================ -->
<!-- Table Container with Horizontal Scroll -->
<!-- Table Container with Fixed Height -->
<div class="table-container" style="overflow-x: auto; overflow-y: auto; max-height: 500px; -webkit-overflow-scrolling: touch; border-radius: 12px; border: 1px solid #e8f0e8;">
    <table style="width: 100%; min-width: 700px; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background: #1a5a44; color: white; position: sticky; top: 0; z-index: 10;">
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">#</th>
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">Plastic Type</th>
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">Quantity</th>
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">Converted To</th>
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">Output</th>
                <th style="padding: 14px 18px; text-align: left; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;">Date</th>
            </tr>
        </thead>
        <tbody id="historyTableBody">
            <!-- Data will be loaded here -->
        </tbody>
    </table>
</div>

            <!-- MOBILE CARD VIEW -->
            <!-- <div id="mobileCards" class="md:hidden space-y-4 mt-6">
                Data will be loaded by JavaScript
            </div> -->

            <!-- EMPTY STATE -->
            <div id="emptyState" class="hidden text-center py-16">
                <div class="empty-state text-8xl mb-6">♻️</div>
                <h3 class="text-2xl font-bold text-[#0f3b2c]">No Conversion History Found</h3>
                <p class="text-[#1a5a44] mt-2">Start your recycling journey and make a difference today!</p>
                <div class="mt-6 flex justify-center gap-4 text-4xl">
                    <span>🌱</span>
                    <span>🌍</span>
                    <span>♻️</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    PAGINATION SECTION
    ============================================================ -->
    <section class="py-8 bg-white section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-[#1a5a44]" id="paginationInfo">
                    Loading...
                </p>
                <div class="flex gap-2 flex-wrap justify-center" id="paginationButtons">
                    <!-- Will be filled by JavaScript -->
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

                <div class="text-5xl mb-4 text-green-300"><i class="fas fa-sync-alt"></i>  </div>
                <h2 class="text-2xl md:text-4xl font-bold leading-tight">
                    Convert More <span class="text-[#b5e48c]">Plastic Waste</span>
                </h2>
                <p class="text-[#cde0c5] text-lg mt-4 max-w-2xl mx-auto">
                    Every conversion counts. Continue your recycling journey and make a positive impact on the environment.
                </p>
                <div class="mt-8">
                    <a href="convert.php" class="inline-flex items-center gap-3 px-10 py-4 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-bold text-lg rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg pulse-cta">
                        <i class="fas fa-arrow-right"></i>
                        Go To Converter
                    </a>
                </div>
                <p class="text-sm text-[#cde0c5] mt-4">
                    <i class="fas fa-infinity text-[#8bc34a] mr-1"></i>
                    Start a new conversion today
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    JAVASCRIPT
    ============================================================ -->
    <script src="js/history.js"></script>
    <script src='js/app.js'></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>