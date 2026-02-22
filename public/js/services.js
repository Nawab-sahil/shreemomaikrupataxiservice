/**
 * Services Page Interactive Features
 */

class ServicesManager {
    constructor() {
        this.init();
    }

    /**
     * Initialize all features
     */
    init() {
        this.setupScrollAnimations();
        this.setupCardInteractions();
        this.setupSmoothScroll();
        this.setupCounterAnimations();
        this.trackServiceViews();
    }

    /**
     * Setup scroll-based animations
     */
    setupScrollAnimations() {
        // Simple scroll reveal for elements with data-aos
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    
                    // Apply delay if specified
                    const delay = entry.target.getAttribute('data-aos-delay');
                    if (delay) {
                        entry.target.style.transitionDelay = `${delay}ms`;
                    }
                }
            });
        }, observerOptions);

        // Observe all elements with data-aos attribute
        document.querySelectorAll('[data-aos]').forEach(element => {
            observer.observe(element);
        });
    }

    /**
     * Setup card hover interactions
     */
    setupCardInteractions() {
        const serviceCards = document.querySelectorAll('.group.relative.bg-white');

        serviceCards.forEach(card => {
            // Add 3D tilt effect on mouse move
            card.addEventListener('mousemove', (e) => {
                this.handleCardTilt(card, e);
            });

            // Reset tilt on mouse leave
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });

            // Add ripple effect on click
            card.addEventListener('click', (e) => {
                this.createRipple(e, card);
            });
        });
    }

    /**
     * Handle 3D tilt effect
     */
    handleCardTilt(card, event) {
        const rect = card.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
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

        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        ripple.classList.add('ripple-effect');

        element.style.position = 'relative';
        element.style.overflow = 'hidden';
        element.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);

        // Add ripple CSS if not exists
        if (!document.getElementById('ripple-styles')) {
            const style = document.createElement('style');
            style.id = 'ripple-styles';
            style.textContent = `
                .ripple-effect {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
                    transform: scale(0);
                    animation: ripple-animation 0.6s ease-out;
                    pointer-events: none;
                }
                @keyframes ripple-animation {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }

    /**
     * Setup smooth scrolling for anchor links
     */
    setupSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const targetId = anchor.getAttribute('href');
                if (targetId === '#') return;

                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const headerOffset = 100;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Animate numbers in stats section
     */
    setupCounterAnimations() {
        const counters = document.querySelectorAll('.text-3xl, .text-4xl');
        
        const observerOptions = {
            threshold: 0.5,
            triggerOnce: true
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounter(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            const text = counter.textContent.trim();
            // Only animate if it contains numbers
            if (/\d/.test(text)) {
                counterObserver.observe(counter);
            }
        });
    }

    /**
     * Animate a counter element
     */
    animateCounter(element) {
        const text = element.textContent;
        const match = text.match(/(\d+)/);
        
        if (!match) return;

        const target = parseInt(match[0]);
        const suffix = text.replace(/\d+/, '');
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current) + suffix;
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + suffix;
            }
        };

        updateCounter();
    }

    /**
     * Track service views for analytics
     */
    trackServiceViews() {
        const serviceLinks = document.querySelectorAll('a[href^="/booking"], a[href^="/contact"]');
        
        serviceLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const serviceName = this.getServiceName(link);
                console.log('Service interaction:', serviceName);
                
                // You can add analytics tracking here
                // Example: gtag('event', 'service_click', { service_name: serviceName });
            });
        });
    }

    /**
     * Get service name from link context
     */
    getServiceName(link) {
        const card = link.closest('.group, .grid > div');
        if (card) {
            const heading = card.querySelector('h3');
            return heading ? heading.textContent.trim() : 'Unknown Service';
        }
        return 'Unknown Service';
    }

    /**
     * Add parallax effect to hero section
     */
    setupParallax() {
        const heroSection = document.querySelector('.bg-gradient-to-br');
        if (!heroSection) return;

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = heroSection.querySelectorAll('.animate-float, .animate-float-delayed');
            
            shapes.forEach((shape, index) => {
                const speed = 0.3 + (index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    }
}

/**
 * Utility: Format price
 */
function formatPrice(price) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price);
}

/**
 * Utility: Check if element is in viewport
 */
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

/**
 * Initialize when DOM is ready
 */
document.addEventListener('DOMContentLoaded', () => {
    // Initialize Services Manager
    const servicesManager = new ServicesManager();

    // Make globally accessible for debugging
    window.servicesManager = servicesManager;

    // Add loading state removal
    document.body.classList.remove('service-loading');

    // Enhanced button hover effects
    const buttons = document.querySelectorAll('a[class*="bg-gradient"]');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.transform = 'scale(1.05) translateY(-2px)';
        });

        button.addEventListener('mouseleave', () => {
            button.style.transform = '';
        });
    });

    // Add shake animation to Call button on load
    setTimeout(() => {
        const callButton = document.querySelector('a[href^="tel:"]');
        if (callButton) {
            callButton.classList.add('animate-pulse');
            setTimeout(() => {
                callButton.classList.remove('animate-pulse');
            }, 3000);
        }
    }, 2000);

    // Performance optimization: Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    console.log('Services page initialized successfully ✨');
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { ServicesManager, formatPrice, isInViewport };
}
