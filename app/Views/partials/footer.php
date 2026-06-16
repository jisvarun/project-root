    <footer id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="brand-mark"><i class="fa-solid fa-graduation-cap"></i></span>
                        <div>
                            <h4 class="mb-0">Riverview College</h4>
                            <small>Excellence in Education</small>
                        </div>
                    </div>
                    <p>Riverview College Road, Knowledge City, Patna, Bihar 800001</p>
                    <div class="social mt-3">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?= url_to('about') ?>">About</a></li>
                        <li><a href="<?= url_to('courses') ?>">Courses</a></li>
                        <li><a href="<?= url_to('syllabus') ?>">Syllabus</a></li>
                        <li><a href="<?= url_to('home') ?>#notice">Notice</a></li>
                        <li><a href="<?= url_to('home') ?>#gallery">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4>Student Support</h4>
                    <ul>
                        <li><a href="<?= url_to('home') ?>#admission">Admission Cell</a></li>
                        <li><a href="<?= url_to('syllabus') ?>">Examination Desk</a></li>
                        <li><a href="<?= url_to('courses') ?>">Placement Cell</a></li>
                        <li><a href="#">Scholarships</a></li>
                        <li><a href="#">Library Portal</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fa-solid fa-phone me-2"></i>+91 98765 43210</li>
                        <li><i class="fa-solid fa-envelope me-2"></i>info@riverviewcollege.edu</li>
                        <li><i class="fa-solid fa-clock me-2"></i>Mon - Sat, 9:00 AM - 5:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom d-flex flex-wrap justify-content-between gap-2">
                <span>Copyright &copy; 2026 Riverview College. All rights reserved.</span>
                <span>Designed for modern college admission experience.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        if (document.querySelector(".heroSwiper")) {
            new Swiper(".heroSwiper", {
                loop: true,
                speed: 900,
                effect: "fade",
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        }

        if (window.AOS) {
            AOS.init({
                duration: 750,
                once: true,
                offset: 80
            });
        }
    </script>
</body>
</html>
