// ============================================================
// app.js - Fixed Version
// ============================================================

// Token management
if (!localStorage.getItem("user_token")) {
    localStorage.setItem("user_token", crypto.randomUUID());
}

const token = localStorage.getItem("user_token");

// Check if element exists before setting value
const tokenInput = document.getElementById("user_token");
if (tokenInput) {
    tokenInput.value = token;
} else {
    console.log("ℹ️ No #user_token element found, token stored in localStorage only");
    console.log("🔑 Token:", token);
}

// OR - Agar hidden input nahi hai toh create kar do
if (!document.getElementById("user_token")) {
    const hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.id = 'user_token';
    hiddenInput.value = token;
    document.body.appendChild(hiddenInput);
    console.log("✅ Created hidden input with token");
}

// ============================================================
// SCROLL REVEAL OBSERVER - section-hidden -> section-visible
// ============================================================

document.addEventListener('DOMContentLoaded', function() {
    const revealSections = document.querySelectorAll('.section-hidden');

    if (revealSections.length === 0) {
        console.log("ℹ️ No .section-hidden elements found");
        return;
    }

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealSections.forEach(section => observer.observe(section));

    console.log(`✅ Scroll reveal observer attached to ${revealSections.length} sections`);
});