// Booking Page Manager
class BookingManager {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 3;
        this.formData = this.loadFormData();
        this.init();
    }

    init() {
        this.bindEvents();
        this.restoreFormData();
        this.updateStepIndicator();
        this.initAOS();
    }

    initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }
    }

    bindEvents() {
        // Journey cards selection
        document.querySelectorAll('.journey-card input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', () => this.handleJourneySelection(radio));
        });

        // Navigation buttons
        document.querySelectorAll('.next-step').forEach(btn => {
            btn.addEventListener('click', () => this.nextStep());
        });

        document.querySelectorAll('.prev-step').forEach(btn => {
            btn.addEventListener('click', () => this.prevStep());
        });

        // Form submission
        const bookingForm = document.getElementById('bookingForm');
        if (bookingForm) {
            bookingForm.addEventListener('submit', (e) => this.handleSubmit(e));
        }

        // Form inputs - auto-save and validation
        document.querySelectorAll('input, select, textarea').forEach(input => {
            input.addEventListener('input', () => {
                this.saveFormData();
                this.updateSummary();
                this.clearError(input);
            });
            
            input.addEventListener('blur', () => {
                this.validateField(input);
            });
        });

        // Phone formatting
        const phoneInput = document.querySelector('input[name="phone"]');
        if (phoneInput) {
            phoneInput.addEventListener('input', (e) => this.formatPhone(e));
        }

        // Date input minimum date
        const dateInput = document.querySelector('input[name="date"]');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }

        // Modal close
        const modal = document.getElementById('successModal');
        if (modal) {
            // Close on backdrop click
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    this.closeModal();
                }
            });
            
            // Find close button and attach listener
            const closeBtn = modal.querySelector('button');
            if (closeBtn) {
                closeBtn.addEventListener('click', () => this.closeModal());
            }
        }
    }

    handleJourneySelection(radio) {
        const selectedValue = radio.value;
        this.formData.journeyType = selectedValue;
        this.saveFormData();
        this.updateSummary();

        // Add pulse effect to selected card
        const card = radio.closest('.journey-card');
        card.classList.add('pulse-glow');
        setTimeout(() => card.classList.remove('pulse-glow'), 1000);
    }

    nextStep() {
        if (!this.validateStep(this.currentStep)) {
            this.showStepErrors(this.currentStep);
            return;
        }

        if (this.currentStep < this.totalSteps) {
            this.currentStep++;
            this.updateSteps();
            this.scrollToTop();
        }
    }

    prevStep() {
        if (this.currentStep > 1) {
            this.currentStep--;
            this.updateSteps();
            this.scrollToTop();
        }
    }

    updateSteps() {
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(step => {
            step.classList.remove('active');
            step.classList.add('hidden');
        });

        // Show current step
        const currentStepEl = document.querySelector(`.form-step[data-step="${this.currentStep}"]`);
        if (currentStepEl) {
            currentStepEl.classList.add('active');
            currentStepEl.classList.remove('hidden');
        }

        // Update step indicator
        this.updateStepIndicator();
    }

    updateStepIndicator() {
        document.querySelectorAll('.step-number').forEach((indicator, index) => {
            const stepNum = index + 1;
            
            indicator.classList.remove('active', 'completed');
            
            if (stepNum === this.currentStep) {
                indicator.classList.add('active');
            } else if (stepNum < this.currentStep) {
                indicator.classList.add('completed');
            }
        });

        // Update step lines
        document.querySelectorAll('.step-line').forEach((line, index) => {
            const lineNum = index + 1;
            
            if (lineNum < this.currentStep) {
                line.classList.add('active');
            } else {
                line.classList.remove('active');
            }
        });
    }

    validateStep(step) {
        let isValid = true;

        switch(step) {
            case 1:
                // Validate journey type selection
                const journeyType = document.querySelector('input[name="journeyType"]:checked');
                if (!journeyType) {
                    isValid = false;
                }
                break;

            case 2:
                // Validate trip details
                const pickup = document.querySelector('input[name="pickup"]');
                const drop = document.querySelector('input[name="drop"]');
                const date = document.querySelector('input[name="date"]');
                const time = document.querySelector('input[name="time"]');
                const passengers = document.querySelector('select[name="passengers"]');

                if (!this.validateField(pickup) || !this.validateField(drop) ||
                    !this.validateField(date) || !this.validateField(time) ||
                    !this.validateField(passengers)) {
                    isValid = false;
                }
                break;

            case 3:
                // Validate personal info
                const name = document.querySelector('input[name="name"]');
                const phone = document.querySelector('input[name="phone"]');
                const email = document.querySelector('input[name="email"]');

                if (!this.validateField(name) || !this.validateField(phone) ||
                    !this.validateField(email)) {
                    isValid = false;
                }
                break;
        }

        return isValid;
    }

    validateField(field) {
        if (!field) return true;

        const value = field.value.trim();
        let isValid = true;
        let errorMsg = '';

        // Check required
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMsg = 'This field is required';
        }

        // Email validation
        if (field.type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMsg = 'Please enter a valid email';
            }
        }

        // Phone validation
        if (field.type === 'tel' && value) {
            const phoneRegex = /^[6-9]\d{9}$/;
            const cleanPhone = value.replace(/\D/g, '');
            if (!phoneRegex.test(cleanPhone)) {
                isValid = false;
                errorMsg = 'Please enter a valid 10-digit phone number';
            }
        }

        // Date validation
        if (field.type === 'date' && value) {
            const selectedDate = new Date(value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            if (selectedDate < today) {
                isValid = false;
                errorMsg = 'Please select a future date';
            }
        }

        // Update field state
        if (isValid) {
            field.classList.remove('error');
            field.classList.add('success');
            this.removeErrorMessage(field);
        } else {
            field.classList.remove('success');
            field.classList.add('error');
            this.showErrorMessage(field, errorMsg);
        }

        return isValid;
    }

    showErrorMessage(field, message) {
        this.removeErrorMessage(field);
        
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message text-red-500 text-sm mt-1';
        errorDiv.textContent = message;
        
        field.parentNode.appendChild(errorDiv);
    }

    removeErrorMessage(field) {
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
    }

    clearError(field) {
        if (field.value.trim()) {
            field.classList.remove('error');
            this.removeErrorMessage(field);
        }
    }

    showStepErrors(step) {
        let message = '';
        
        switch(step) {
            case 1:
                message = 'Please select a journey type';
                break;
            case 2:
                message = 'Please fill in all trip details';
                break;
            case 3:
                message = 'Please complete your personal information';
                break;
        }

        this.showNotification(message, 'error');
    }

    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 ${
            type === 'error' ? 'bg-red-500' : 'bg-blue-500'
        } text-white`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.3s';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    formatPhone(e) {
        const input = e.target;
        let value = input.value.replace(/\D/g, '');
        
        if (value.length > 10) {
            value = value.slice(0, 10);
        }
        
        if (value.length > 5) {
            value = value.slice(0, 5) + '-' + value.slice(5);
        }
        
        input.value = value;
    }

    updateSummary() {
        // Journey Type
        const journeyTypeEl = document.getElementById('summary-type');
        const journeyType = document.querySelector('input[name="journeyType"]:checked');
        if (journeyTypeEl && journeyType) {
            journeyTypeEl.textContent = journeyType.value.charAt(0).toUpperCase() + journeyType.value.slice(1);
        }

        // Pickup
        const pickupEl = document.getElementById('summary-pickup');
        const pickup = document.querySelector('input[name="pickup"]');
        if (pickupEl && pickup) {
            pickupEl.textContent = pickup.value || '-';
        }

        // Drop-off
        const dropEl = document.getElementById('summary-drop');
        const drop = document.querySelector('input[name="drop"]');
        if (dropEl && drop) {
            dropEl.textContent = drop.value || '-';
        }

        // Date & Time combined
        const datetimeEl = document.getElementById('summary-datetime');
        const date = document.querySelector('input[name="date"]');
        const time = document.querySelector('input[name="time"]');
        if (datetimeEl && date && time) {
            let dateTimeText = '-';
            if (date.value && time.value) {
                const formattedDate = new Date(date.value).toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });
                dateTimeText = `${formattedDate} at ${time.value}`;
            } else if (date.value) {
                const formattedDate = new Date(date.value).toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });
                dateTimeText = formattedDate;
            }
            datetimeEl.textContent = dateTimeText;
        }

        // Passengers
        const passengersEl = document.getElementById('summary-passengers');
        const passengers = document.querySelector('select[name="passengers"]');
        if (passengersEl && passengers && passengers.value) {
            passengersEl.textContent = passengers.value;
        }
    }

    handleSubmit(e) {
        e.preventDefault();

        // Final validation
        if (!this.validateStep(3)) {
            this.showStepErrors(3);
            return;
        }

        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="spinner"></span> Processing...';
        submitBtn.disabled = true;

        // Simulate API call
        setTimeout(() => {
            // Generate booking ID
            const bookingId = this.generateBookingId();
            
            // Show success modal
            this.showSuccessModal(bookingId);

            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;

            // Clear form data
            this.clearFormData();
        }, 2000);
    }

    generateBookingId() {
        const prefix = 'SMK';
        const timestamp = Date.now();
        const random = Math.floor(Math.random() * 1000);
        return `${prefix}${timestamp}${random}`.slice(0, 12);
    }

    showSuccessModal(bookingId) {
        const modal = document.getElementById('successModal');
        const bookingIdEl = document.getElementById('bookingId');
        
        if (modal && bookingIdEl) {
            bookingIdEl.textContent = bookingId;
            modal.classList.add('show');
            modal.style.display = 'flex';

            // Confetti effect (optional)
            this.triggerConfetti();
        }
    }

    closeModal() {
        const modal = document.getElementById('successModal');
        if (modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
                // Reset form
                document.getElementById('bookingForm').reset();
                this.currentStep = 1;
                this.updateSteps();
                this.scrollToTop();
            }, 300);
        }
    }

    triggerConfetti() {
        // Simple confetti effect
        const colors = ['#fbbf24', '#10b981', '#3b82f6', '#ef4444', '#8b5cf6'];
        const confettiCount = 50;

        for (let i = 0; i < confettiCount; i++) {
            setTimeout(() => {
                const confetti = document.createElement('div');
                confetti.style.cssText = `
                    position: fixed;
                    width: 10px;
                    height: 10px;
                    background: ${colors[Math.floor(Math.random() * colors.length)]};
                    top: -10px;
                    left: ${Math.random() * 100}%;
                    opacity: 1;
                    border-radius: 50%;
                    z-index: 9999;
                    pointer-events: none;
                `;
                
                document.body.appendChild(confetti);

                const animation = confetti.animate([
                    { transform: 'translateY(0) rotate(0deg)', opacity: 1 },
                    { transform: `translateY(${window.innerHeight}px) rotate(${Math.random() * 360}deg)`, opacity: 0 }
                ], {
                    duration: 3000 + Math.random() * 2000,
                    easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                });

                animation.onfinish = () => confetti.remove();
            }, i * 30);
        }
    }

    saveFormData() {
        const form = document.getElementById('bookingForm');
        const formData = new FormData(form);
        const data = {};

        formData.forEach((value, key) => {
            data[key] = value;
        });

        localStorage.setItem('bookingFormData', JSON.stringify(data));
    }

    loadFormData() {
        const saved = localStorage.getItem('bookingFormData');
        return saved ? JSON.parse(saved) : {};
    }

    restoreFormData() {
        Object.keys(this.formData).forEach(key => {
            const field = document.querySelector(`[name="${key}"]`);
            if (field) {
                if (field.type === 'radio') {
                    const radio = document.querySelector(`[name="${key}"][value="${this.formData[key]}"]`);
                    if (radio) radio.checked = true;
                } else {
                    field.value = this.formData[key];
                }
            }
        });

        this.updateSummary();
    }

    clearFormData() {
        localStorage.removeItem('bookingFormData');
        this.formData = {};
    }

    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

// Initialize Booking Manager
let bookingManagerInstance;

document.addEventListener('DOMContentLoaded', () => {
    bookingManagerInstance = new BookingManager();
});

// Global function for onclick handler
function closeModal() {
    if (bookingManagerInstance) {
        bookingManagerInstance.closeModal();
    }
}
