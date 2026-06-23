(function () {
    'use strict';

    // ============================================================
    // 1. TOKEN MANAGEMENT
    // ============================================================
    
    let token = localStorage.getItem("user_token");
    if (!token) {
        token = crypto.randomUUID();
        localStorage.setItem("user_token", token);
    }

    console.log("🔑 User Token:", token);

    // ============================================================
    // 2. PAGINATION VARIABLES
    // ============================================================
    
    let currentPage = 1;
    const perPage = 10;
    let allData = [];
    let filteredData = [];

    // ============================================================
    // 3. LOAD HISTORY DATA
    // ============================================================
    
    function loadHistory() {
        const tableBody = document.getElementById("historyTableBody");
        const emptyState = document.getElementById("emptyState");
        const recordCount = document.getElementById("recordCount");

        // Show loading state
        tableBody.innerHTML = `
            <tr>
                <td colspan="7" class="text-center py-8">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-[#8bc34a]"></div>
                    <p class="text-gray-500 mt-2">Loading records...</p>
                </td>
            </tr>
        `;

        fetch(`../Backend/history.php?user_token=${token}`)
            .then(res => {
                if (!res.ok) {
                    throw new Error(`HTTP error! status: ${res.status}`);
                }
                return res.json();
            })
            .then(data => {
                console.log("📊 Data received:", data);
                
                if (!Array.isArray(data)) {
                    console.error("Invalid data format:", data);
                    data = [];
                }

                allData = data;
                filteredData = [...allData];
                
                // Update record count
                recordCount.textContent = `Showing ${filteredData.length} records`;
                
                // Update summary cards
                updateSummaryCards(filteredData);
                
                // Render table
                renderTable(filteredData);
                renderPagination(filteredData);
                
                // Show/hide empty state
                if (filteredData.length === 0) {
                    emptyState.classList.remove('hidden');
                    tableBody.innerHTML = '';
                } else {
                    emptyState.classList.add('hidden');
                }
            })
            .catch(error => {
                console.error("❌ History Error:", error);
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="7" class="text-center py-8 text-red-500">
                            <i class="fas fa-exclamation-circle text-2xl"></i>
                            <p class="mt-2">Error loading data. Please try again.</p>
                            <p class="text-sm text-gray-400">${error.message}</p>
                        </td>
                    </tr>
                `;
            });
    }

    // ============================================================
    // 4. RENDER TABLE (WITH UNIT DISPLAY)
    // ============================================================
    
    function renderTable(data) {
        const tableBody = document.getElementById("historyTableBody");
        
        if (!tableBody) {
            console.error("❌ historyTableBody not found!");
            return;
        }
        
        if (!data || data.length === 0) {
            tableBody.innerHTML = `
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px; color: #6b7280; font-size: 16px;">
                        No records found
                    </td>
                </tr>
            `;
            return;
        }

        const start = (currentPage - 1) * perPage;
        const end = Math.min(start + perPage, data.length);
        const pageData = data.slice(start, end);

        let html = '';
        pageData.forEach((item, index) => {
            const serialNumber = start + index + 1;
            
            // Format date
            let date = 'N/A';
            if (item.created_at) {
                try {
                    date = new Date(item.created_at).toLocaleDateString('en-US', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    });
                } catch(e) {
                    date = item.created_at;
                }
            }

            // Display quantity with unit
            let quantityDisplay = 'N/A';
            if (item.display_value && item.display_unit) {
                const unit = item.display_unit.toUpperCase();
                quantityDisplay = `${parseFloat(item.display_value).toFixed(2)} ${unit}`;
            } else {
                // Fallback: agar purana data hai toh sirf KG dikhao
                quantityDisplay = `${parseFloat(item.input_weight || 0).toFixed(1)} KG`;
            }

            html += `
                <tr style="border-bottom: 1px solid #e5e7eb; background: ${index % 2 === 0 ? 'white' : '#f9fbf9'};">
                    <td style="padding: 12px 18px; color: #1a5a44; font-size: 14px; text-align: center; min-width: 50px;">${serialNumber}</td>
                    <td style="padding: 12px 18px; color: #1a5a44; font-size: 14px; min-width: 130px;">
                        <span style="background: #d4edda; color: #155724; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; display: inline-block; white-space: nowrap;">${escapeHtml(item.input_type || 'N/A')}</span>
                    </td>
                    <td style="padding: 12px 18px; color: #1a5a44; font-size: 14px; font-weight: 500; min-width: 120px;">
                        ${quantityDisplay}
                        <span style="font-size: 11px; color: #6b7280; display: block;">(${parseFloat(item.input_weight || 0).toFixed(1)} KG)</span>
                    </td>
                    <td style="padding: 12px 18px; color: #1a5a44; font-size: 14px; min-width: 130px;">
                        <span style="background: #cce5ff; color: #004085; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; display: inline-block; white-space: nowrap;">${escapeHtml(item.output_type || 'N/A')}</span>
                    </td>
                    <td style="padding: 12px 18px; color: #1a5a44; font-size: 14px; font-weight: 500; min-width: 100px;">${escapeHtml(item.result || 'N/A')}</td>
                    <td style="padding: 12px 18px; color: #6b7280; font-size: 13px; min-width: 110px; white-space: nowrap;">${date}</td>
                </tr>
            `;
        });

        tableBody.innerHTML = html;
        console.log("✅ Table rendered with", pageData.length, "rows");
    }

    // ============================================================
    // 5. RENDER PAGINATION
    // ============================================================
    
    function renderPagination(data) {
        const paginationInfo = document.getElementById("paginationInfo");
        const paginationButtons = document.getElementById("paginationButtons");
        
        if (!data || data.length === 0) {
            paginationInfo.textContent = "No records found";
            paginationButtons.innerHTML = '';
            return;
        }

        const totalPages = Math.ceil(data.length / perPage);
        const start = (currentPage - 1) * perPage + 1;
        const end = Math.min(currentPage * perPage, data.length);
        
        paginationInfo.textContent = `Showing ${start} - ${end} of ${data.length} records`;

        let buttonsHtml = '';

        // Previous button
        if (currentPage > 1) {
            buttonsHtml += `<button class="page-btn" onclick="goToPage(${currentPage - 1})">
                <i class="fas fa-chevron-left"></i>
            </button>`;
        } else {
            buttonsHtml += `<button class="page-btn disabled" disabled>
                <i class="fas fa-chevron-left"></i>
            </button>`;
        }

        // Page numbers
        const range = 2;
        const startPage = Math.max(1, currentPage - range);
        const endPage = Math.min(totalPages, currentPage + range);

        if (startPage > 1) {
            buttonsHtml += `<button class="page-btn" onclick="goToPage(1)">1</button>`;
            if (startPage > 2) {
                buttonsHtml += `<span class="page-btn border-0 bg-transparent cursor-default">...</span>`;
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            if (i === currentPage) {
                buttonsHtml += `<button class="page-btn active">${i}</button>`;
            } else {
                buttonsHtml += `<button class="page-btn" onclick="goToPage(${i})">${i}</button>`;
            }
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                buttonsHtml += `<span class="page-btn border-0 bg-transparent cursor-default">...</span>`;
            }
            buttonsHtml += `<button class="page-btn" onclick="goToPage(${totalPages})">${totalPages}</button>`;
        }

        // Next button
        if (currentPage < totalPages) {
            buttonsHtml += `<button class="page-btn" onclick="goToPage(${currentPage + 1})">
                <i class="fas fa-chevron-right"></i>
            </button>`;
        } else {
            buttonsHtml += `<button class="page-btn disabled" disabled>
                <i class="fas fa-chevron-right"></i>
            </button>`;
        }

        paginationButtons.innerHTML = buttonsHtml;
    }

    // ============================================================
    // 6. GO TO PAGE FUNCTION
    // ============================================================
    
    window.goToPage = function(page) {
        currentPage = page;
        renderTable(filteredData);
        renderPagination(filteredData);
        // Scroll to top of table
        document.querySelector('.table-container')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    };

    // ============================================================
    // 7. UPDATE SUMMARY CARDS
    // ============================================================
    
    function updateSummaryCards(data) {
        const summaryContainer = document.getElementById("summaryCards");
        
        if (!data || data.length === 0) {
            summaryContainer.innerHTML = `
                <div class="summary-card rounded-2xl p-6 text-center col-span-3">
                    <p class="text-gray-500">No data available for statistics</p>
                </div>
            `;
            return;
        }

        // Calculate statistics
        const totalConversions = data.length;
        let totalWeight = 0;
        const conversionCounts = {};

        data.forEach(item => {
            totalWeight += parseFloat(item.input_weight || 0);
            const outputType = item.output_type || 'Unknown';
            conversionCounts[outputType] = (conversionCounts[outputType] || 0) + 1;
        });

        // Find most popular conversion
        let mostPopular = 'N/A';
        let maxCount = 0;
        for (const [type, count] of Object.entries(conversionCounts)) {
            if (count > maxCount) {
                maxCount = count;
                mostPopular = type;
            }
        }

        summaryContainer.innerHTML = `
            <div class="summary-card rounded-2xl p-6 text-center">
                <div class="summary-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                   <i class="fas fa-sync-alt"></i>
                </div>
                <div class="text-3xl md:text-4xl font-bold text-[#2d7a5a]">
                    ${totalConversions}
                </div>
                <p class="text-[#1a5a44] font-medium mt-1">Total Conversions</p>
                <p class="text-sm text-[#1a5a44]/70 mt-2">
                    <i class="fas fa-recycle text-[#8bc34a] mr-1"></i>
                    Recycling actions completed
                </p>
            </div>

            <div class="summary-card rounded-2xl p-6 text-center">
                <div class="summary-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                    <i class="fas fa-weight-scale"></i>
                </div>
                <div class="text-3xl md:text-4xl font-bold text-[#2d7a5a]">
                    ${totalWeight.toFixed(1)} KG
                </div>
                <p class="text-[#1a5a44] font-medium mt-1">Total Plastic Recycled</p>
                <p class="text-sm text-[#1a5a44]/70 mt-2">
                    <i class="fas fa-leaf text-[#8bc34a] mr-1"></i>
                    Waste diverted from landfills
                </p>
            </div>

            <div class="summary-card rounded-2xl p-6 text-center">
                <div class="summary-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                    <i class="fas fa-star"></i>
                </div>
                <div class="text-xl md:text-2xl font-bold text-[#2d7a5a]">
                    ${escapeHtml(mostPopular)}
                </div>
                <p class="text-[#1a5a44] font-medium mt-1">Most Popular Conversion</p>
                <p class="text-sm text-[#1a5a44]/70 mt-2">
                    <i class="fas fa-trophy text-[#8bc34a] mr-1"></i>
                    Top recycling choice
                </p>
            </div>
        `;
    }

    // ============================================================
    // 8. FILTER FUNCTIONS
    // ============================================================
    
    function filterRecords() {
        const plasticFilter = document.getElementById('searchPlastic').value.toLowerCase().trim();
        const productFilter = document.getElementById('searchProduct').value.toLowerCase().trim();
        const dateFilter = document.getElementById('searchDate').value;

        filteredData = allData.filter(item => {
            const plastic = (item.input_type || '').toLowerCase();
            const product = (item.output_type || '').toLowerCase();
            const date = item.created_at ? new Date(item.created_at).toISOString().split('T')[0] : '';

            const matchPlastic = !plasticFilter || plastic.includes(plasticFilter);
            const matchProduct = !productFilter || product.includes(productFilter);
            const matchDate = !dateFilter || date === dateFilter;

            return matchPlastic && matchProduct && matchDate;
        });

        // Reset to first page when filtering
        currentPage = 1;
        
        // Update UI
        document.getElementById('recordCount').textContent = `Showing ${filteredData.length} records`;
        renderTable(filteredData);
        renderPagination(filteredData);
        
        // Show/hide empty state
        const emptyState = document.getElementById("emptyState");
        if (filteredData.length === 0) {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
        }
    }

    // ============================================================
    // 9. UTILITY FUNCTIONS
    // ============================================================
    
    function escapeHtml(text) {
        if (!text) return 'N/A';
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // ============================================================
    // 10. EVENT LISTENERS
    // ============================================================
    
    document.addEventListener('DOMContentLoaded', function() {
        // Load history on page load
        loadHistory();

        // Filter button
        document.getElementById('applyFilter')?.addEventListener('click', filterRecords);

        // Clear filter button
        document.getElementById('clearFilter')?.addEventListener('click', function() {
            document.getElementById('searchPlastic').value = '';
            document.getElementById('searchProduct').value = '';
            document.getElementById('searchDate').value = '';
            filterRecords();
        });

        // Real-time filter on input
        document.getElementById('searchPlastic')?.addEventListener('input', filterRecords);
        document.getElementById('searchProduct')?.addEventListener('input', filterRecords);
        document.getElementById('searchDate')?.addEventListener('change', filterRecords);
    });

    console.log('🌿 GreenCycle Hub History Loaded');

})();