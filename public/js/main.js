// Unique Modern Design Interactions
document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileNav = document.getElementById('mobileNav');
  
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      if (mobileNav) {
        mobileNav.classList.toggle('active');
      }
    });
    
    // Close menu when a link is clicked
    if (mobileNav) {
      const mobileLinks = mobileNav.querySelectorAll('a');
      mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
          mobileToggle.classList.remove('active');
          mobileNav.classList.remove('active');
        });
      });
    }
  }
  
  // Quick booking form functionality
  const quickBookingForm = document.getElementById('quickBookingForm');
  if (quickBookingForm) {
    const fromLocation = document.getElementById('fromLocation');
    const toLocation = document.getElementById('toLocation');
    const travelDate = document.getElementById('travelDate');
    const travelTime = document.getElementById('travelTime');
    
    // Set today's date as default
    const today = new Date().toISOString().split('T')[0];
    if (travelDate) {
      travelDate.value = today;
    }
    
    quickBookingForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      if (!fromLocation.value.trim() || !toLocation.value.trim()) {
        alert('Please enter both locations!');
        return;
      }
      
      const params = new URLSearchParams({
        pickup: fromLocation.value,
        dropoff: toLocation.value,
        date: travelDate.value,
        time: travelTime.value
      });
      
      window.location.href = `/booking?${params.toString()}`;
    });
    
    // Allow Enter key on inputs
    [fromLocation, toLocation, travelDate, travelTime].forEach(input => {
      if (input) {
        input.addEventListener('keypress', function(e) {
          if (e.key === 'Enter') {
            quickBookingForm.dispatchEvent(new Event('submit'));
          }
        });
      }
    });
  }
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
  
  // Form validation for booking page
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    if (form.classList.contains('booking-form')) {
      form.addEventListener('submit', function(e) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
          if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = '#FF4444';
            field.style.boxShadow = '0 0 8px rgba(255, 68, 68, 0.2)';
          } else {
            field.style.borderColor = '';
            field.style.boxShadow = '';
          }
        });
        
        if (!isValid) {
          e.preventDefault();
          alert('Please fill in all required fields');
        }
      });
      
      // Remove error styling on focus
      const inputs = form.querySelectorAll('input, select, textarea');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.style.borderColor = '';
          this.style.boxShadow = '';
        });
      });
    }
  });
  
  // Scroll animations for service cards
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
      }
    });
  }, observerOptions);
  
  document.querySelectorAll('.service-card, .feature-item, .stat-box').forEach(card => {
    card.style.opacity = '0';
    observer.observe(card);
  });
  
  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.unique-navbar');
    if (navbar) {
      if (window.scrollY > 30) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }
  });
  
  // Active nav link on scroll
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section[id]');
    const scrollPosition = window.scrollY + 150;
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      const sectionId = section.getAttribute('id');
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        document.querySelectorAll('.nav-link').forEach(link => {
          link.classList.remove('active');
        });
        const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
        if (activeLink) {
          activeLink.classList.add('active');
        }
      }
    });
  });
});

// Keyboard shortcut for booking (Ctrl + B)
document.addEventListener('keydown', function(e) {
  if (e.key === 'b' && e.ctrlKey) {
    e.preventDefault();
    const bookingLink = document.querySelector('a[href*="/booking"]');
    if (bookingLink) {
      window.location.href = bookingLink.href;
    }
  }
});

// Console branding
console.log('%c🚗 SHREE MOMAI KRUPA TAXI SERVICE', 'font-size: 16px; font-weight: bold; color: #00D4FF;');
console.log('%cUnique. Modern. Reliable.', 'font-size: 12px; color: #0F2847;');
