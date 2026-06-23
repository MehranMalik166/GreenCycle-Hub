
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

   
    // Form submit
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

        // Validate Quantity
        const qty = parseFloat(quantity.value);
        if (!quantity.value || isNaN(qty) || qty < 0.1) {
            quantity.classList.add('input-error');
            quantityError.classList.add('show');
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

        // varibales define 
        
         const plastic = plasticType.value;
const qtyValue = parseFloat(quantity.value);
const conversion = convertTo.value;

const rate = conversionRates[conversion];
const output = (qtyValue * rate.output).toFixed(1);
const co2Saved = (qtyValue * rate.co2).toFixed(2);
const token = localStorage.getItem("user_token");


        // 
        // send the data 
        fetch("../Backend/convert.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
           body: `user_token=${token}&input_type=${plastic}&input_weight=${qtyValue}&output_type=${conversion}&result=${output}`
        })
            .then(res => res.text())
            .then(data => {
                console.log(data);
            });
        // ===================================

        // Update result card
        resultType.textContent = plastic;
        resultQuantity.textContent = qtyValue + ' KG';
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
    const counters = document.querySelectorAll('.counter-number');

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
        const increment = Math.ceil(target / 80);
        const stepTime = 25;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = current.toLocaleString();
        }, stepTime);
    }

    // ----- SCROLL REVEAL -----
    const sections = document.querySelectorAll('.section-hidden');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    sections.forEach(section => revealObserver.observe(section));

    // ----- CONSOLE -----
    console.log('🌿 GreenCycle Hub — Convert Plastic Page loaded!');
    console.log('♻️ Start converting plastic waste into valuable products today.');

})();
