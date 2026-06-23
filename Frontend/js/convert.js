(function () {
    'use strict';

    // ----- FORM HANDLING -----
    const form = document.getElementById('converterForm');
    const plasticType = document.getElementById('plasticType');
    const quantity = document.getElementById('quantity');
    const convertTo = document.getElementById('convertTo');
    const resultPlaceholder = document.getElementById('resultPlaceholder');
    const resultCard = document.getElementById('resultCard');

    // Error elements
    const plasticTypeError = document.getElementById('plasticTypeError');
    const quantityError = document.getElementById('quantityError');
    const convertToError = document.getElementById('convertToError');

    // Result display elements
    const resultType = document.getElementById('resultType');
    const resultQuantity = document.getElementById('resultQuantity');
    const resultConvertTo = document.getElementById('resultConvertTo');
    const resultOutput = document.getElementById('resultOutput');
    const savedCO2 = document.getElementById('savedCO2');
    const resultDate = document.getElementById('resultDate');

    // Conversion rates (estimated)
    const conversionRates = {
        'Eco Bricks': { output: 10, co2: 0.5, unit: 'Eco Bricks' },
        'Flower Pots': { output: 8, co2: 0.4, unit: 'Flower Pots' },
        'Plastic Furniture': { output: 5, co2: 0.6, unit: 'Furniture Pieces' },
        'Road Material': { output: 15, co2: 0.3, unit: 'KG Material' },
        'Recycled Granules': { output: 12, co2: 0.7, unit: 'KG Granules' }
    };

    // Get current date
    function getCurrentDate() {
        const now = new Date();
        const day = String(now.getDate()).padStart(2, '0');
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const year = now.getFullYear();
        return `${day}-${month}-${year}`;
    }

    // =============================================
    // 🟢 KG / TON HANDLING CODE (FIXED)
    // =============================================
    const quantityInput = document.getElementById('quantity');
    const unitLabel = document.getElementById('unitLabel');
    const kgRadio = document.querySelector('input[name="quantityUnit"][value="kg"]');
    const tonRadio = document.querySelector('input[name="quantityUnit"][value="ton"]');
    const hiddenKG = document.getElementById('quantityInKG');
    
    // Store the base value in KG
    let baseValueInKG = 0;
    
    // Function to update display based on selected unit
    function updateDisplay() {
        const isTon = tonRadio.checked;
        
        // Update unit label
        unitLabel.textContent = isTon ? 'TON' : 'KG';
        quantityInput.placeholder = isTon ? 'Enter quantity in tons' : 'Enter quantity in kilograms';
        quantityInput.min = isTon ? '0.01' : '0.1';
        quantityInput.step = isTon ? '0.01' : '0.1';
        
        // Convert and display value
        if (baseValueInKG > 0) {
            if (isTon) {
                // Convert KG to Ton (divide by 1000)
                quantityInput.value = (baseValueInKG / 1000).toFixed(3);
            } else {
                // Show in KG
                quantityInput.value = baseValueInKG.toFixed(1);
            }
        }
        
        // Update hidden field with KG value
        hiddenKG.value = baseValueInKG;
        
        // Update error message
        const minQty = isTon ? 0.01 : 0.1;
        quantityError.textContent = `Please enter a valid quantity (minimum ${minQty} ${isTon ? 'TON' : 'KG'})`;
    }
    
    // Function to update base value when user types
    function updateBaseValue() {
        const currentValue = parseFloat(quantityInput.value);
        const isTon = tonRadio.checked;
        
        if (!isNaN(currentValue) && currentValue > 0) {
            if (isTon) {
                // Convert Ton to KG (multiply by 1000)
                baseValueInKG = currentValue * 1000;
            } else {
                // Value is already in KG
                baseValueInKG = currentValue;
            }
        } else {
            baseValueInKG = 0;
        }
        
        // Update hidden field
        hiddenKG.value = baseValueInKG;
        validateQuantity();
    }
    
    // Validation function
    function validateQuantity() {
        const value = parseFloat(quantityInput.value);
        const isTon = tonRadio.checked;
        const minValue = isTon ? 0.01 : 0.1;
        
        if (!isNaN(value) && value >= minValue && value > 0) {
            quantityError.style.display = 'none';
            quantityInput.classList.remove('border-red-500');
            return true;
        } else {
            quantityError.style.display = 'block';
            quantityInput.classList.add('border-red-500');
            return false;
        }
    }
    
    // Event: When user types in input
    quantityInput.addEventListener('input', function() {
        updateBaseValue();
    });
    
    // Event: When user selects KG
    kgRadio.addEventListener('change', function() {
        if (this.checked) {
            // Convert current value from Ton to KG
            const currentValue = parseFloat(quantityInput.value);
            if (!isNaN(currentValue) && currentValue > 0) {
                baseValueInKG = currentValue * 1000;
            } else {
                baseValueInKG = 0;
            }
            updateDisplay();
            validateQuantity();
        }
    });
    
    // Event: When user selects Ton
    tonRadio.addEventListener('change', function() {
        if (this.checked) {
            // Convert current value from KG to Ton
            const currentValue = parseFloat(quantityInput.value);
            if (!isNaN(currentValue) && currentValue > 0) {
                baseValueInKG = currentValue;
            } else {
                baseValueInKG = 0;
            }
            updateDisplay();
            validateQuantity();
        }
    });
    
    // Blur validation
    quantityInput.addEventListener('blur', validateQuantity);
    
    // Initial setup
    updateDisplay();

    // =============================================
    // 🟢 FORM SUBMIT (UPDATED WITH UNIT HANDLING)
    // =============================================
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => el.classList.remove('show'));
        document.querySelectorAll('.form-input').forEach(el => el.classList.remove('input-error'));

        let isValid = true;

        // Validate Plastic Type
        if (!plasticType.value) {
            plasticType.classList.add('input-error');
            plasticTypeError.classList.add('show');
            isValid = false;
        }

        // Validate Quantity with unit
        const qty = parseFloat(quantity.value);
        const isTon = tonRadio.checked;
        const minQty = isTon ? 0.01 : 0.1;
        
        if (!quantity.value || isNaN(qty) || qty < minQty) {
            quantity.classList.add('input-error');
            quantityError.style.display = 'block';
            isValid = false;
        }

        // Validate Convert To
        if (!convertTo.value) {
            convertTo.classList.add('input-error');
            convertToError.classList.add('show');
            isValid = false;
        }

        if (!isValid) {
            const firstError = document.querySelector('.input-error');
            if (firstError) {
                firstError.focus();
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            return;
        }

        // ====== VARIABLES WITH UNIT HANDLING ======
        const plastic = plasticType.value;
        const qtyValue = parseFloat(quantity.value);
        const conversion = convertTo.value;
        const selectedUnit = isTon ? 'ton' : 'kg';
        
        // Get value in KG from hidden field
        let qtyInKG = parseFloat(hiddenKG.value);
        
        // If hidden field is empty, calculate from current value
        if (!qtyInKG || qtyInKG === 0) {
            qtyInKG = isTon ? qtyValue * 1000 : qtyValue;
        }

        const rate = conversionRates[conversion];
        const output = (qtyInKG * rate.output).toFixed(1);
        const co2Saved = (qtyInKG * rate.co2).toFixed(2);
        const token = localStorage.getItem("user_token");

        // Send the data 
        fetch("../Backend/convert.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
         body: `user_token=${token}&input_type=${plastic}&input_weight=${qtyInKG}&display_value=${qtyValue}&display_unit=${selectedUnit}&value_in_kg=${qtyInKG}&output_type=${conversion}&result=${output}`
        })
        .then(res => res.text())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });

        // Update result card
        resultType.textContent = plastic;
        
        // Show quantity with selected unit
        const displayUnit = isTon ? 'TON' : 'KG';
        resultQuantity.textContent = `${qtyValue} ${displayUnit}`;
        
        resultConvertTo.textContent = conversion;
        resultOutput.textContent = `${output} ${rate.unit}`;
        savedCO2.textContent = co2Saved + ' KG';
        resultDate.textContent = getCurrentDate();

        // Show result, hide placeholder
        resultPlaceholder.classList.add('hidden');
        resultCard.classList.remove('hidden');

        // Scroll to result
        resultCard.scrollIntoView({ behavior: 'smooth', block: 'center' });

        // Add celebration effect
        resultCard.style.animation = 'none';
        setTimeout(() => {
            resultCard.style.animation = 'pulseCta 0.6s ease';
        }, 10);
    });

    // Reset form
    form.addEventListener('reset', function (e) {
        setTimeout(() => {
            resultPlaceholder.classList.remove('hidden');
            resultCard.classList.add('hidden');
            document.querySelectorAll('.form-input').forEach(el => el.classList.remove('input-error'));
            document.querySelectorAll('.error-message').forEach(el => el.classList.remove('show'));
            // Reset to KG
            kgRadio.checked = true;
            baseValueInKG = 0;
            quantity.value = '';
            hiddenKG.value = '';
            updateDisplay();
        }, 100);
    });

    // Real-time validation on change
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('change', function () {
            this.classList.remove('input-error');
            const errorEl = document.getElementById(this.id + 'Error');
            if (errorEl) {
                errorEl.classList.remove('show');
            }
        });
    });

    // ----- DOWNLOAD RESULT (as text) -----
    window.downloadResult = function () {
        const plastic = resultType.textContent;
        const qty = resultQuantity.textContent;
        const converted = resultConvertTo.textContent;
        const output = resultOutput.textContent;
        const co2 = savedCO2.textContent;
        const date = resultDate.textContent;

        const content = `
        ┌─────────────────────────────────────────────┐
        │        ♻️ Conversion Complete               │
        ├─────────────────────────────────────────────┤
        │  Plastic:        ${plastic.padEnd(30)}│
        │  Quantity:       ${qty.padEnd(30)}│
        │  Converted To:   ${converted.padEnd(30)}│
        │  Output:         ${output.padEnd(30)}│
        │  CO₂ Saved:      ${co2.padEnd(30)}│
        │  Date:           ${date.padEnd(30)}│
        └─────────────────────────────────────────────┘
                `;

        const blob = new Blob([content], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `conversion-result-${date.replace(/-/g, '')}.txt`;
        a.click();
        URL.revokeObjectURL(url);
    };

    // ----- ANIMATED COUNTERS -----
  document.addEventListener("DOMContentLoaded", function () {

    // 1️⃣ FIRST: GET DATA FROM PHP API
    fetch("../Backend/convert.php")
    .then(r => r.json())
    .then(data => {

        // set values to HTML
        document.querySelectorAll(".plastic").forEach(el => {
            el.dataset.target = data.plastic;
        });

        document.querySelectorAll(".users").forEach(el => {
            el.dataset.target = data.users;
        });

        document.querySelectorAll(".methods").forEach(el => {
            el.dataset.target = data.methods;
        });

        document.querySelectorAll(".pollution").forEach(el => {
            el.dataset.target = data.pollution;
        });

        // 2️⃣ THEN START COUNTERS AFTER DATA LOAD
        startCounters();

    });


    // 3️⃣ COUNTER FUNCTION
    function startCounters() {

        const counters = document.querySelectorAll('.counter-number');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.target || "0");

                    if (el.dataset.animated) return;

                    el.dataset.animated = "true";

                    let current = 0;
                    const step = Math.ceil(target / 80);

                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        el.innerText = current.toLocaleString();
                    }, 25);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(c => observer.observe(c));
    }

});

    sections.forEach(section => revealObserver.observe(section));

    // ----- CONSOLE -----
    console.log('🌿 GreenCycle Hub — Convert Plastic Page loaded!');
    console.log('♻️ Start converting plastic waste into valuable products today.');

})();