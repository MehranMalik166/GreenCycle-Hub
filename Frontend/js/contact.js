  (function() {
            'use strict';

            // ============================================================
            // FORM VALIDATION
            // ============================================================
            const form = document.getElementById('contactForm');
            const nameInput = document.getElementById('fullName');
            const emailInput = document.getElementById('email');
            const subjectInput = document.getElementById('subject');
            const messageInput = document.getElementById('message');
            const submitBtn = document.getElementById('submitBtn');
            const spinner = document.getElementById('spinner');
            const successMsg = document.getElementById('successMessage');

            // Error elements
            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const subjectError = document.getElementById('subjectError');
            const messageError = document.getElementById('messageError');

            // Validation functions
            function validateName() {
                const value = nameInput.value.trim();
                if (value.length < 2) {
                    nameInput.classList.add('error');
                    nameError.classList.add('show');
                    return false;
                }
                nameInput.classList.remove('error');
                nameError.classList.remove('show');
                return true;
            }

            function validateEmail() {
                const value = emailInput.value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    emailInput.classList.add('error');
                    emailError.classList.add('show');
                    return false;
                }
                emailInput.classList.remove('error');
                emailError.classList.remove('show');
                return true;
            }

            function validateSubject() {
                const value = subjectInput.value.trim();
                if (value.length < 3) {
                    subjectInput.classList.add('error');
                    subjectError.classList.add('show');
                    return false;
                }
                subjectInput.classList.remove('error');
                subjectError.classList.remove('show');
                return true;
            }

            function validateMessage() {
                const value = messageInput.value.trim();
                if (value.length < 10) {
                    messageInput.classList.add('error');
                    messageError.classList.add('show');
                    return false;
                }
                messageInput.classList.remove('error');
                messageError.classList.remove('show');
                return true;
            }

            // Real-time validation
            nameInput.addEventListener('blur', validateName);
            nameInput.addEventListener('input', function() {
                if (this.classList.contains('error')) validateName();
            });

            emailInput.addEventListener('blur', validateEmail);
            emailInput.addEventListener('input', function() {
                if (this.classList.contains('error')) validateEmail();
            });

            subjectInput.addEventListener('blur', validateSubject);
            subjectInput.addEventListener('input', function() {
                if (this.classList.contains('error')) validateSubject();
            });

            messageInput.addEventListener('blur', validateMessage);
            messageInput.addEventListener('input', function() {
                if (this.classList.contains('error')) validateMessage();
            });

            // Form submit
            form.addEventListener('submit', function(e) {
                // e.preventDefault();

                // Validate all fields
                const isNameValid = validateName();
                const isEmailValid = validateEmail();
                const isSubjectValid = validateSubject();
                const isMessageValid = validateMessage();

                if (!isNameValid || !isEmailValid || !isSubjectValid || !isMessageValid) {
                    e.preventDefault();
                  
                    // Scroll to first error

                    const firstError = form.querySelector('.error');
                    if (firstError) {
                        firstError.focus();
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return;
                }

                // // Show loading state
                // submitBtn.disabled = true;
                // spinner.classList.add('show');
                // submitBtn.querySelector('span').textContent = 'Sending...';

                // // Simulate form submission (replace with actual PHP/AJAX)
                // setTimeout(function() {
                //     // Hide loading
                //     submitBtn.disabled = false;
                //     spinner.classList.remove('show');
                //     submitBtn.querySelector('span').textContent = 'Send Message';

                //     // Show success message
                //     successMsg.classList.add('show');
                //     successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });

                //     // Reset form
                //     form.reset();

                //     // Clear errors
                //     form.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
                //     form.querySelectorAll('.error-msg').forEach(el => el.classList.remove('show'));

                //     // Auto-hide success message after 5 seconds
                //     // setTimeout(function() {
                //     //     successMsg.classList.remove('show');
                //     // }, 5000);

                //     console.log('✅ Form submitted successfully!');
                // }, 1500);
            });

            // ============================================================
            // FAQ ACCORDION
            // ============================================================
            const faqCards = document.querySelectorAll('.faq-card');

            faqCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Close other FAQs
                    faqCards.forEach(other => {
                        if (other !== this && other.classList.contains('open')) {
                            other.classList.remove('open');
                        }
                    });
                    this.classList.toggle('open');
                });
            });

            // ============================================================
            // SCROLL REVEAL
            // ============================================================
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

            // ============================================================
            // CONSOLE
            // ============================================================
            console.log('🌿 GreenCycle Hub — Contact Page loaded!');
            console.log('📧 Ready for PHP and MySQL integration.');
            console.log('🔧 Replace form submission with PHP backend code.');

        })();