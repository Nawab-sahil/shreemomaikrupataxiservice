<!-- MODERN MINIMAL FOOTER -->
<footer class="modern-footer relative overflow-hidden">
    <style>
        .modern-footer {
            background: linear-gradient(135deg, #0f1a24 0%, #1a2a3a 100%);
            position: relative;
        }

        .modern-footer::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(transparent 95%, rgba(255, 255, 255, 0.03) 0%),
                linear-gradient(90deg, transparent 95%, rgba(255, 255, 255, 0.03) 0%);
            background-size: 40px 40px;
            opacity: 0.4;
        }
        
        .footer-top { 
            padding: 5rem 2rem 3rem; 
            position: relative;
            z-index: 2;
        }
        
        .footer-bottom { 
            padding: 1.5rem 2rem; 
            background: rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }

        /* Container */
        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Grid Layout */
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }
        
        @media (min-width: 768px) {
            .footer-grid { grid-template-columns: repeat(2, 1fr); gap: 2.5rem; }
        }

        @media (min-width: 1024px) {
            .footer-grid { grid-template-columns: 2fr 1fr  1fr 1fr; gap: 3rem; }
        }

        /* Column Styling */
        .footer-column {
            color: #ffffff;
        }

        .footer-column h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 1.25rem;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-family: 'Space Grotesk', 'Poppins', sans-serif;
        }

        .footer-column ul { list-style: none; }
        .footer-column li { margin-bottom: 0.75rem; }

        .footer-column a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .footer-column a:hover {
            color: #FFC107;
            padding-left: 4px;
        }

        /* About Section */
        .footer-about {
            grid-column: 1;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .footer-logo svg {
            width: 40px;
            height: 40px;
            color: #FFC107;
        }

        .footer-logo-text {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #ffffff;
            font-family: 'Space Grotesk', 'Poppins', sans-serif;
        }

        .footer-about p {
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.7;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        /* Social Links */
        .footer-social {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            cursor: pointer;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
        }

        .social-link:hover {
            background: #FFC107;
            color: #0f1a24;
            border-color: #FFC107;
            transform: translateY(-2px);
        }

        .social-link svg { width: 18px; height: 18px; }

        /* Contact Info */
        .footer-contact-item {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1rem;
            align-items: flex-start;
        }

        .footer-contact-icon {
            width: 20px;
            height: 20px;
            color: #FFC107;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .footer-contact-content {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .footer-contact-content a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-contact-content a:hover {
            color: #FFC107;
        }

        /* Footer Bottom */
        .footer-bottom-content {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            text-align: center;
        }

        @media (min-width: 768px) {
            .footer-bottom-content { 
                flex-direction: row; 
                justify-content: space-between;
                text-align: left;
            }
        }

        .footer-legal {
            display: flex;
            gap: 1.25rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-legal a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s ease;
        }

        .footer-legal a:hover { color: #FFC107; }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.55);
            font-size: 0.85rem;
        }

        .footer-copyright strong {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Badge */
        .footer-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 0.9rem;
            background: rgba(255, 193, 7, 0.12);
            border: 1px solid rgba(255, 193, 7, 0.25);
            border-radius: 999px;
            font-size: 0.75rem;
            color: #FFC107;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Divider */
        .footer-divider {
            margin: 2.5rem 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        /* Responsive */
        @media (max-width: 640px) {
            .footer-top { padding: 3rem 1rem 2rem; }
            .footer-bottom { padding: 1.25rem 1rem; }
            .footer-column h3 { font-size: 0.95rem; }
            .footer-logo-text { font-size: 1.1rem; }
        }
    </style>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- About Section -->
                <div class="footer-column footer-about">
                    <div class="footer-logo">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                        </svg>
                        <div class="footer-logo-text">Shree Momai Krupa</div>
                    </div>
                    
                    <div class="footer-badge">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        24/7 Service
                    </div>

                    <p>Your trusted taxi partner in Jamnagar, providing safe, reliable, and comfortable rides across Gujarat with professional drivers and modern fleet.</p>

                    <div class="footer-social">
                        <a href="https://facebook.com/shreemomaikrupa" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/919009058600" class="social-link" target="_blank" rel="noopener" aria-label="WhatsApp">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/shreemomaikrupa" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/shreemomaikrupa" class="social-link" target="_blank" rel="noopener" aria-label="Twitter">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/booking">Book Taxi</a></li>
                        <li><a href="/tours">Tours</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="/services">Airport Transfer</a></li>
                        <li><a href="/services">City Rides</a></li>
                        <li><a href="/tours">Outstation Trips</a></li>
                        <li><a href="/tours">Tour Packages</a></li>
                        <li><a href="/services">Corporate Travel</a></li>
                        <li><a href="/services">Event Transport</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-column">
                    <h3>Contact</h3>
                    
                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <div class="footer-contact-content">
                            <a href="tel:+919009058600">+91 900-905-8600</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <div class="footer-contact-content">
                            <a href="mailto:info@shreemomaikrupa.com">info@shreemomaikrupa.com</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <div class="footer-contact-content">
                            Defence Colony Rd, Jamnagar, Gujarat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <div class="footer-copyright">
                © 2024 <strong>Shree Momai Krupa Taxi Service</strong>. All rights reserved.
            </div>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <span style="color: rgba(229, 231, 235, 0.2);">|</span>
                <a href="#">Terms of Service</a>
                <span style="color: rgba(229, 231, 235, 0.2);">|</span>
                <a href="#">Sitemap</a>
                <span style="color: rgba(229, 231, 235, 0.2);">|</span>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>
</footer>
