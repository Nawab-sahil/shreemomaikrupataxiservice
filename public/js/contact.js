/**
 * Contact Page JavaScript
 * Handles form validation, FAQ accordion, animations, and interactions
 */

class ContactManager {
    constructor() {
        this.form = document.getElementById('contactForm');
        this.initializeAOS();
        this.setupFormValidation();
        this.setupFAQAccordion();
        this.setupScrollProgress();
        this.setupRippleEffects();
        this.setupFormTracking();
    }

    /**
     * Initialize AOS (Animate On Scroll) library
     */
    initializeAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic',
                mirror: false
            });
        }
    }

    /**
     * Setup comprehensive form validation
     */
    setupFormValidation() {
        if (!this.form) return;

        // Real-time validation on input
        const inputs = this.form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => {
                if (input.classList.contains('error')) {
                    this.validateField(input);
                }
            });
        });

        // Form submission
        this.form.addEventListener('submit', (e) => this.handleFormSubmit(e));
    }

    /**
     * Validate individual form field
     */
    validateField(field) {
        const value = field.value.trim();
        const fieldName = field.name;
        const errorSpan = field.parentElement.querySelector('.error-message');
        let isValid = true;
        let errorMessage = '';

        // Reset error state
        field.classList.remove('error', 'success');
        if (errorSpan) {
            errorSpan.textContent = '';
            errorSpan.classList.remove('show');
        }

        // Required field validation
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = 'This field is required';
        }

        // Email validation
        if (fieldName === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address';
            }
        }

        // Phone validation (optional but if filled, must be valid)
        if (fieldName === 'phone' && value) {
            const phoneRegex = /^[\d\s\+\-\(\)]+$/;
            if (!phoneRegex.test(value) || value.length < 10) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number';
            }
        }

        // Name validation (minimum 2 characters)
        if (fieldName === 'name' && value && value.length < 2) {
            isValid = false;
            errorMessage = 'Name must be at least 2 characters long';
        }

        // Message validation (minimum 10 characters)
        if (fieldName === 'message' && value && value.length < 10) {
            isValid = false;
            errorMessage = 'Message must be at least 10 characters long';
        }

        // Update UI based on validation
        if (!isValid) {
            field.classList.add('error');
            if (errorSpan) {
                errorSpan.textContent = errorMessage;
                errorSpan.classList.add('show');
            }
        } else if (value) {
            field.classList.add('success');
        }

        return isValid;
    }

    /**
     * Handle form submission
     */
    async handleFormSubmit(e) {
        e.preventDefault();

        // Validate all fields
        const inputs = this.form.querySelectorAll('input[required], textarea[required], select[required]');
        let isFormValid = true;

        inputs.forEach(input => {
            if (!this.validateField(input)) {
                isFormValid = false;
            }
        });

        if (!isFormValid) {
            this.showNotification('Please fix the errors before submitting', 'error');
            return;
        }

        // Collect form data
        const formData = new FormData(this.form);
        const data = Object.fromEntries(formData);

        // Show loading state
        const submitButton = this.form.querySelector('button[type="submit"]');
        const originalButtonContent = submitButton.innerHTML;
        submitButton.disabled = true;
        submitButton.innerHTML = `
            <div class="spinner"></div>
            <span>Sending...</span>
        `;

        try {
            // Simulate API call (replace with actual endpoint)
            await this.simulateAPICall(data);

            // Show success message
            this.showSuccessMessage();

            // Reset form
            this.form.reset();
            inputs.forEach(input => {
                input.classList.remove('success', 'error');
            });

            // Track successful submission
            this.trackFormSubmission(data);

        } catch (error) {
            this.showNotification('Failed to send message. Please try again.', 'error');
            console.error('Form submission error:', error);
        } finally {
            // Restore button state
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonContent;
        }
    }

    /**
     * Simulate API call (replace with actual backend integration)
     */
    simulateAPICall(data) {
        return new Promise((resolve) => {
            console.log('Contact Form Data:', data);
            setTimeout(resolve, 1500); // Simulate network delay
        });
    }

    /**
     * Show success message
     */
    showSuccessMessage() {
        const successMessage = document.getElementById('successMessage');
        if (successMessage) {
            successMessage.classList.remove('hidden');
            successMessage.classList.add('success-animate');

            // Hide after 5 seconds
            setTimeout(() => {
                successMessage.classList.add('hidden');
            }, 5000);

            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    /**
     * Show notification
     */
    showNotification(message, type = 'info') {
        const colors = {
            success: 'bg-green-500',
            error: 'bg-red-500',
            info: 'bg-blue-500'
        };

        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 ${colors[type]} text-white px-6 py-4 rounded-lg shadow-2xl z-50 transform transition-all duration-300`;
        notification.style.transform = 'translateX(400px)';
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);

        setTimeout(() => {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    /**
     * Setup FAQ accordion functionality
     */
    setupFAQAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Close all other FAQs
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    otherAnswer.style.display = 'none';
                });

                // Toggle current FAQ
                if (!isActive) {
                    item.classList.add('active');
                    answer.style.display = 'block';
                    
                    // Track FAQ interaction
                    console.log('FAQ opened:', question.textContent.trim());
                }
            });
        });
    }

    /**
     * Setup scroll progress bar
     */
    setupScrollProgress() {
        const progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress';
        document.body.appendChild(progressBar);

        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }

    /**
     * Setup ripple effects on buttons
     */
    setupRippleEffects() {
        const buttons = document.querySelectorAll('button, .ripple-container');

        buttons.forEach(button => {
            button.addEventListener('click', (e) => {
                this.createRipple(e, button);
            });
        });
    }

    /**
     * Create ripple effect
     */
    createRipple(event, element) {
        const ripple = document.createElement('span');
        const rect = element.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;

        ripple.className = 'ripple';
        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;

        element.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    }

    /**
     * Setup form field tracking
     */
    setupFormTracking() {
        const formFields = this.form?.querySelectorAll('input, textarea, select') || [];

        formFields.forEach(field => {
            field.addEventListener('focus', () => {
                console.log(`Field focused: ${field.name}`);
            });
        });
    }

    /**
     * Track form submission for analytics
     */
    trackFormSubmission(data) {
        console.log('Form submitted successfully:', {
            timestamp: new Date().toISOString(),
            subject: data.subject,
            subscribed: data.subscribe === 'on'
        });

        // Integrate with Google Analytics or other tracking
        // Example: gtag('event', 'form_submission', { form_name: 'contact' });
    }
}

/**
 * Scroll to top functionality
 */
class ScrollToTop {
    constructor() {
        this.createButton();
        this.setupScrollListener();
    }

    createButton() {
        this.button = document.createElement('button');
        this.button.className = 'fixed bottom-8 right-8 w-14 h-14 bg-yellow-400 text-[#1a3a52] rounded-full shadow-2xl opacity-0 pointer-events-none transition-all duration-300 hover:bg-yellow-500 transform hover:scale-110 z-50';
        this.button.innerHTML = `
            <svg class="w-6 h-6 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"/>
            </svg>
        `;
        this.button.setAttribute('aria-label', 'Scroll to top');
        document.body.appendChild(this.button);

        this.button.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    setupScrollListener() {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 400) {
                this.button.style.opacity = '1';
                this.button.style.pointerEvents = 'auto';
            } else {
                this.button.style.opacity = '0';
                this.button.style.pointerEvents = 'none';
            }
        });
    }
}

/**
 * Phone number formatter
 */
class PhoneFormatter {
    constructor() {
        this.setupFormatter();
    }

    setupFormatter() {
        const phoneInput = document.getElementById('phone');
        if (!phoneInput) return;

        phoneInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, '');
            
            // Auto-format Indian phone numbers
            if (value.length > 0) {
                if (value.startsWith('91')) {
                    value = '+' + value;
                } else if (!value.startsWith('+')) {
                    value = '+91' + value;
                }
            }

            e.target.value = value.slice(0, 14); // Limit to +91 and 10 digits
        });
    }
}

/**
 * Auto-save form data to localStorage
 */
class FormAutoSave {
    constructor(formId) {
        this.form = document.getElementById(formId);
        if (!this.form) return;

        this.storageKey = `contactForm_${formId}`;
        this.loadSavedData();
        this.setupAutoSave();
    }

    setupAutoSave() {
        const inputs = this.form.querySelectorAll('input:not([type="checkbox"]), textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                this.saveData();
            });
        });
    }

    saveData() {
        const formData = new FormData(this.form);
        const data = Object.fromEntries(formData);
        localStorage.setItem(this.storageKey, JSON.stringify(data));
    }

    loadSavedData() {
        const savedData = localStorage.getItem(this.storageKey);
        if (!savedData) return;

        try {
            const data = JSON.parse(savedData);
            Object.keys(data).forEach(key => {
                const input = this.form.querySelector(`[name="${key}"]`);
                if (input && input.type !== 'checkbox') {
                    input.value = data[key];
                }
            });
        } catch (error) {
            console.error('Failed to load saved form data:', error);
        }
    }

    clearSavedData() {
        localStorage.removeItem(this.storageKey);
    }
}

/**
 * Performance monitoring
 */
class PerformanceMonitor {
    constructor() {
        this.logPerformance();
    }

    logPerformance() {
        if (window.performance) {
            window.addEventListener('load', () => {
                const perfData = window.performance.timing;
                const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
                const domReady = perfData.domContentLoadedEventEnd - perfData.navigationStart;

                console.log(`Contact Page Load Time: ${pageLoadTime}ms`);
                console.log(`DOM Ready Time: ${domReady}ms`);
            });
        }
    }
}

/**
 * Initialize all components when DOM is ready
 */
document.addEventListener('DOMContentLoaded', () => {
    // Initialize main contact manager
    const contactManager = new ContactManager();

    // Initialize scroll to top button
    const scrollToTop = new ScrollToTop();

    // Initialize phone formatter
    const phoneFormatter = new PhoneFormatter();

    // Initialize form auto-save
    const formAutoSave = new FormAutoSave('contactForm');

    // Clear auto-saved data on successful submission
    const originalShowSuccess = contactManager.showSuccessMessage.bind(contactManager);
    contactManager.showSuccessMessage = function() {
        originalShowSuccess();
        formAutoSave.clearSavedData();
    };

    // Initialize performance monitor
    const performanceMonitor = new PerformanceMonitor();

    // Setup smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Console greeting
    console.log('%c📞 Contact Page Loaded Successfully!', 
        'font-size: 16px; font-weight: bold; color: #fbbf24;');
    console.log('%cShree Momai Krupa Taxi Service - Contact Us', 
        'font-size: 12px; color: #1a3a52;');
});

/**
 * Handle visibility changes (tab switching)
 */
document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
        console.log('User switched away from contact page');
    } else {
        console.log('User returned to contact page');
        // Refresh AOS animations
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    }
});

/**
 * Export for external use if needed
 */
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { ContactManager, FormAutoSave };
}
