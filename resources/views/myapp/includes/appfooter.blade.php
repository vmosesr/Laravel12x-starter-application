    
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <footer class="bg-light text-dark pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="h5 mb-3">About Us</h3>
                    <p class="small">
                        We provide innovative ICT solutions that transform businesses. Our focus is on delivering high-quality services that align with the latest trends in technology.
                    </p>
                    <p class="small mb-1">
                        <i class="fas fa-map-marker-alt me-2"></i> 123 Innovation Street, Tech City
                    </p>
                    <p class="small mb-1">
                        <i class="fas fa-phone-alt me-2"></i> +1 234 567 890
                    </p>
                    <p class="small mb-1">
                        <i class="fas fa-envelope me-2"></i> support@techcompany.com
                    </p>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <h3 class="h5 mb-3">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Services</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Contact Us</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">FAQs</a></li>
                    </ul>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="h5 mb-3">Recent Blog Posts</h3>
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none text-dark small d-block">How AI is Transforming Business Operations</a>
                        <span class="text-muted small">September 18, 2024</span>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none text-dark small d-block">The Future of Cloud Computing</a>
                        <span class="text-muted small">August 5, 2024</span>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none text-dark small d-block">Top 5 Emerging Tech Trends</a>
                        <span class="text-muted small">July 22, 2024</span>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <h3 class="h5 mb-3">Stay Connected</h3>
                    <p class="small mb-3">
                        Subscribe to our newsletter to receive the latest updates and news directly in your inbox.
                    </p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-sm" placeholder="Your Email" required>
                            <button class="btn btn-primary btn-sm btn-hover-grow" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-decoration-none text-dark bg-white p-2 rounded-circle d-flex align-items-center justify-content-center social-icon" style="width: 36px; height: 36px;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-decoration-none text-dark bg-white p-2 rounded-circle d-flex align-items-center justify-content-center social-icon" style="width: 36px; height: 36px;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-decoration-none text-dark bg-white p-2 rounded-circle d-flex align-items-center justify-content-center social-icon" style="width: 36px; height: 36px;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-decoration-none text-dark bg-white p-2 rounded-circle d-flex align-items-center justify-content-center social-icon" style="width: 36px; height: 36px;">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="text-center" data-aos="fade-up">
                <p class="small mb-0">&copy; 2025 TSUAD LLC. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>