
<!-- end backend code here -->

<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCycle Hub · Contact Us</title>
    <link rel='stylesheet' href='css/contact.css'></link>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<!-- 
   
</head>
<body>

    <!-- ============================================================
    HERO SECTION
    ============================================================ -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0f3b2c] to-[#1a5a44] text-white py-16 md:py-20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#8bc34a]/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#8bc34a]/5 rounded-full -translate-x-1/2 translate-y-1/2"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-9xl opacity-5 float-element">
            <i class="fas fa-recycle"></i>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-semibold text-[#b5e48c] border border-white/10 mb-6">
                <i class="fas fa-envelope"></i>
                <span>Get In Touch</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Contact <span class="text-[#b5e48c]">Us</span>
            </h1>
            
            <div class="w-24 h-1 bg-gradient-to-r from-[#8bc34a] to-[#b5e48c] mx-auto mt-4 rounded-full"></div>
            
            <p class="text-xl md:text-2xl text-[#cde0c5] mt-6 max-w-3xl mx-auto leading-relaxed">
                Have questions, suggestions, or feedback? We'd love to hear from you.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Quick Response
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    24/7 Support
                </span>
                <span class="bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full text-sm border border-white/10 flex items-center gap-2">
                    <i class="fas fa-check-circle text-[#8bc34a]"></i>
                    Eco-Friendly
                </span>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CONTACT INFORMATION SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-[#f4faf5] section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-circle-info"></i>
                    Get In Touch
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Connect With <span class="text-[#2d7a5a]">Us</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-4 text-lg">We're here to help you with any questions or concerns.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Address Card -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Our Address</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        GreenCycle Hub<br />
                        Burhanpur, Madhya Pradesh, India
                    </p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-map-pin mr-1"></i> Visit Us
                    </div>
                </div>

                <!-- Email Card -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2">Email Us</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        <a href="mailto:support@greencyclehub.com" class="hover:text-[#2d7a5a] transition-colors">
                            support@greencyclehub.com
                        </a>
                    </p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-reply mr-1"></i> We Reply Fast
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="info-card rounded-2xl p-6 text-center">
                    <div class="info-icon w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#0f3b2c] mb-2 ">Call Us</h3>
                    <p class="text-[#1a5a44] leading-relaxed">
                        <a href="tel:+91 9301827656" class="hover:text-[#2d7a5a] transition-colors">
                            +91 9301827656
                        </a>
                    </p>
                    <div class="mt-3 inline-block bg-[#d4edb0] px-3 py-1 rounded-full text-xs font-semibold text-[#2d7a5a]">
                        <i class="fas fa-clock mr-1"></i> Mon-Sat 9AM-6PM
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    CONTACT FORM SECTION (PHP Ready)
    ============================================================ -->
    <section class="py-12 md:py-16 bg-white section-hidden" id="contact-form">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left: Form -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-[#d4edb0] rounded-xl flex items-center justify-center text-2xl text-[#2d7a5a]">
                            <i class="fas fa-pen"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-[#0f3b2c]">Send Us a Message</h2>
                            <p class="text-sm text-[#1a5a44]">We'll get back to you within 24 hours</p>
                        </div>
                    </div>

                    <!-- Success Message -->
                    <div id="successMessage" class="success-message">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-2xl text-[#2d7a5a]"></i>
                            <div>
                                <h4 class="font-bold">Message Sent Successfully!</h4>
                                <p class="text-sm">Thank you for contacting us. We'll respond shortly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <form id="contactForm" method="POST" action="../Backend/contact.php" class="space-y-5">
                       <!-- user token ke liye hidden input  -->
                    <input type="hidden" id="user_token" name="user_token">

                    <!-- Name -->
                        <div>
                            <label for="fullName" class="form-label block mb-2">
                                <i class="fas fa-user text-[#8bc34a] mr-2"></i>
                                Full Name
                            </label>
                            <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Enter your full name" required />
                            <div class="error-msg" id="nameError">Please enter your full name</div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="form-label block mb-2">
                                <i class="fas fa-envelope text-[#8bc34a] mr-2"></i>
                                Email Address
                            </label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required />
                            <div class="error-msg" id="emailError">Please enter a valid email address</div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="form-label block mb-2">
                                <i class="fas fa-tag text-[#8bc34a] mr-2"></i>
                                Subject
                            </label>
                            <input type="text" id="subject" name="subject" class="form-input" placeholder="Enter message subject" required />
                            <div class="error-msg" id="subjectError">Please enter a subject</div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="form-label block mb-2">
                                <i class="fas fa-comment text-[#8bc34a] mr-2"></i>
                                Message
                            </label>
                            <textarea id="message" name="message" rows="5" class="form-input resize-none" placeholder="Write your message here..." required></textarea>
                            <div class="error-msg" id="messageError">Please enter your message</div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submitBtn" class="btn-primary w-full rounded-xl px-6 py-4 text-[#0f3b2c] font-bold text-lg flex items-center justify-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                            <span class="spinner" id="spinner"></span>
                        </button>

                        <!-- Form footer -->
                        <p class="text-xs text-[#1a5a44]/70 text-center">
                            <i class="fas fa-lock text-[#8bc34a] mr-1"></i>
                            Your information is safe with us. We respect your privacy.
                        </p>
                    </form>

                 
                </div>

                <!-- Right: Info & Map -->
                <div class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-lg font-bold text-[#0f3b2c] mb-4 flex items-center gap-2">
                            <i class="fas fa-clock text-[#8bc34a]"></i>
                            Response Time
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between border-b border-[#e8f0e8] pb-2">
                                <span class="text-[#1a5a44]">Email Response</span>
                                <span class="text-[#2d7a5a] font-bold">24 Hours</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-[#e8f0e8] pb-2">
                                <span class="text-[#1a5a44]">Phone Support</span>
                                <span class="text-[#2d7a5a] font-bold">9AM - 6PM</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-[#1a5a44]">Emergency Response</span>
                                <span class="text-[#2d7a5a] font-bold">24/7</span>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-lg font-bold text-[#0f3b2c] mb-4 flex items-center gap-2">
                            <i class="fas fa-share-alt text-[#8bc34a]"></i>
                            Connect With Us
                        </h3>
                        <div class="flex gap-3 flex-wrap">
                            <a href="#" class="w-12 h-12 bg-[#d4edb0] rounded-full flex items-center justify-center text-[#2d7a5a] hover:bg-[#2d7a5a] hover:text-white transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#d4edb0] rounded-full flex items-center justify-center text-[#2d7a5a] hover:bg-[#2d7a5a] hover:text-white transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#d4edb0] rounded-full flex items-center justify-center text-[#2d7a5a] hover:bg-[#2d7a5a] hover:text-white transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#d4edb0] rounded-full flex items-center justify-center text-[#2d7a5a] hover:bg-[#2d7a5a] hover:text-white transition-all duration-300">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#d4edb0] rounded-full flex items-center justify-center text-[#2d7a5a] hover:bg-[#2d7a5a] hover:text-white transition-all duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    FAQ SECTION
    ============================================================ -->
    <section class="py-12 md:py-16 bg-[#f4faf5] section-hidden" id="faq">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 bg-[#d4edb0]/30 text-[#2d7a5a] px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-question-circle"></i>
                    FAQs
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0f3b2c] mt-4">
                    Frequently Asked <span class="text-[#2d7a5a]">Questions</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#2d7a5a] to-[#8bc34a] mx-auto mt-3 rounded-full"></div>
                <p class="text-[#1a5a44] mt-4 text-lg">Find answers to the most common questions about our platform.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <!-- FAQ 1 -->
                <div class="faq-card rounded-2xl p-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-[#0f3b2c] flex items-center gap-2">
                            <span class="text-[#8bc34a]">♻️</span>
                            What is plastic recycling?
                        </h3>
                        <i class="fas fa-chevron-down faq-icon text-[#8bc34a]"></i>
                    </div>
                    <div class="faq-answer text-[#1a5a44]">
                        Plastic recycling is the process of recovering waste plastic and reprocessing it into useful products. It helps reduce environmental pollution and conserves natural resources.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-card rounded-2xl p-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-[#0f3b2c] flex items-center gap-2">
                            <span class="text-[#8bc34a]">🔄</span>
                            How does the converter work?
                        </h3>
                        <i class="fas fa-chevron-down faq-icon text-[#8bc34a]"></i>
                    </div>
                    <div class="faq-answer text-[#1a5a44]">
                        The converter allows you to input plastic type and quantity, then calculates the estimated output based on our conversion algorithms. It helps you understand the potential of your recycling efforts.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-card rounded-2xl p-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-[#0f3b2c] flex items-center gap-2">
                            <span class="text-[#8bc34a]">📊</span>
                            Is the conversion result accurate?
                        </h3>
                        <i class="fas fa-chevron-down faq-icon text-[#8bc34a]"></i>
                    </div>
                    <div class="faq-answer text-[#1a5a44]">
                        Yes, our conversion results are based on industry-standard recycling rates and scientific calculations. However, actual results may vary based on plastic quality and recycling methods.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-card rounded-2xl p-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-[#0f3b2c] flex items-center gap-2">
                            <span class="text-[#8bc34a]">🌱</span>
                            How can I reduce plastic waste?
                        </h3>
                        <i class="fas fa-chevron-down faq-icon text-[#8bc34a]"></i>
                    </div>
                    <div class="faq-answer text-[#1a5a44]">
                        You can reduce plastic waste by choosing reusable alternatives, recycling properly, avoiding single-use plastics, and supporting eco-friendly products. Every small action counts!
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
                    Together We Can Build a <br />
                    <span class="text-[#b5e48c]">Cleaner Future</span>
                </h2>
                <p class="text-[#cde0c5] text-lg mt-4 max-w-2xl mx-auto">
                    Start your recycling journey today and contribute to a sustainable world. Every action matters.
                </p>
                <div class="mt-8">
                    <a href="convert.php" class="inline-flex items-center gap-3 px-10 py-4 bg-[#8bc34a] hover:bg-[#7cb342] text-[#0f3b2c] font-bold text-lg rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg pulse-cta">
                        <i class="fas fa-arrow-right"></i>
                        Convert Plastic Waste
                    </a>
                </div>
                <p class="text-sm text-[#cde0c5] mt-4">
                    <i class="fas fa-infinity text-[#8bc34a] mr-1"></i>
                    Start making a difference today
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    FOOTER CTA BANNER
    ============================================================ -->
    <section class="py-8 bg-[#f4faf5] section-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="cta-banner rounded-2xl p-6 md:p-8 text-center text-white relative overflow-hidden">
                <div class="absolute -top-10 -right-10 text-8xl opacity-5">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="absolute -bottom-10 -left-10 text-8xl opacity-5">
                    <i class="fas fa-recycle"></i>
                </div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="text-4xl">♻️</div>
                        <div>
                            <p class="text-lg font-semibold text-[#d4edb0]">
                                Every small recycling effort contributes to a greener planet.
                            </p>
                            <p class="text-sm text-[#cde0c5] opacity-80">
                                Join us in making a difference, one plastic at a time.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <span class="bg-[#8bc34a]/20 px-4 py-2 rounded-full text-sm font-medium text-[#b5e48c] border border-[#8bc34a]/30">
                            <i class="fas fa-heart text-[#8bc34a] mr-1"></i>
                            Care for Earth
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    JAVASCRIPT
    ============================================================ -->
  
    <script src='js/contact.js'></script>
    <script src="js/app.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>