<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1600&q=80');">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span>About Riverview College</span>
            <h1>Academic discipline with a practical, student-first approach.</h1>
            <p>We prepare students through strong classroom learning, campus mentoring, career guidance, and community values.</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-title mb-3">
                    <div class="eyebrow">Our Story</div>
                    <h2>More than two decades of steady academic growth.</h2>
                    <p>Riverview College was founded with a clear purpose: make quality higher education accessible, disciplined, and relevant to real career opportunities.</p>
                </div>
                <ul class="check-list">
                    <li><i class="fa-solid fa-circle-check"></i><span>Outcome-based teaching with regular mentoring and performance review.</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Academic calendar, examination support, and transparent student communication.</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Clubs, seminars, workshops, sports, and cultural programs for all-round growth.</span></li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="image-panel">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=1100&q=80" alt="Students on campus">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-soft">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">What Guides Us</div>
            <h2>Values that shape campus life</h2>
            <p>Every department works around a shared commitment to learning, conduct, opportunity, and service.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>Mission</h3>
                    <p>Deliver education that builds subject knowledge, communication, confidence, and employability.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-eye"></i></div>
                    <h3>Vision</h3>
                    <p>Become a respected regional institution known for academic quality and student achievement.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Values</h3>
                    <p>Discipline, integrity, respect, teamwork, curiosity, and responsibility toward society.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-6" data-aos="fade-up"><div class="stat-box"><i class="fa-solid fa-building-columns"></i><h3>25+</h3><p class="mb-0 text-secondary">Years</p></div></div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="100"><div class="stat-box"><i class="fa-solid fa-user-graduate"></i><h3>5k+</h3><p class="mb-0 text-secondary">Students</p></div></div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="200"><div class="stat-box"><i class="fa-solid fa-book-open"></i><h3>32</h3><p class="mb-0 text-secondary">Programs</p></div></div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="300"><div class="stat-box"><i class="fa-solid fa-briefcase"></i><h3>80%</h3><p class="mb-0 text-secondary">Placement Support</p></div></div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
