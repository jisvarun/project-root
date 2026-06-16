<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<header class="hero">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1800&q=80');">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-kicker"><i class="fa-solid fa-star"></i> Admissions Open 2026</div>
                        <h1>Build your future with a campus that moves with ambition.</h1>
                        <p>Explore modern classrooms, experienced faculty, practical learning, research support, and an active student community.</p>
                        <div class="hero-actions">
                            <a href="#admission" class="btn btn-brand"><i class="fa-solid fa-paper-plane me-2"></i>Start Admission</a>
                            <a href="<?= url_to('courses') ?>" class="btn btn-light-outline"><i class="fa-solid fa-book-open me-2"></i>View Courses</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1800&q=80');">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-kicker"><i class="fa-solid fa-flask"></i> Research Led Learning</div>
                        <h1>Learn through projects, labs, field work, and mentorship.</h1>
                        <p>Our programs combine theory with real assignments so students graduate with clarity, confidence, and workplace readiness.</p>
                        <div class="hero-actions">
                            <a href="<?= url_to('about') ?>" class="btn btn-brand"><i class="fa-solid fa-circle-info me-2"></i>Know More</a>
                            <a href="#gallery" class="btn btn-light-outline"><i class="fa-solid fa-images me-2"></i>Campus Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1800&q=80');">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-kicker"><i class="fa-solid fa-users"></i> Student First Campus</div>
                        <h1>A vibrant environment for academics, culture, and leadership.</h1>
                        <p>Clubs, seminars, sports, placements, and skill programs make college life active, purposeful, and future-ready.</p>
                        <div class="hero-actions">
                            <a href="#events" class="btn btn-brand"><i class="fa-solid fa-calendar-days me-2"></i>Upcoming Events</a>
                            <a href="<?= url_to('contact') ?>" class="btn btn-light-outline"><i class="fa-solid fa-location-dot me-2"></i>Visit Campus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>

<section class="stat-band">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6" data-aos="fade-up">
                <div class="stat-box"><i class="fa-solid fa-user-graduate"></i><h3>5k+</h3><p class="mb-0 text-secondary">Students</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-box"><i class="fa-solid fa-chalkboard-user"></i><h3>120+</h3><p class="mb-0 text-secondary">Faculty</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-box"><i class="fa-solid fa-book"></i><h3>32</h3><p class="mb-0 text-secondary">Programs</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-box"><i class="fa-solid fa-award"></i><h3>18</h3><p class="mb-0 text-secondary">Awards</p></div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-image">
                    <div class="about-badge"><strong>25+</strong><span>Years of academic excellence</span></div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-title mb-3">
                    <div class="eyebrow">About College</div>
                    <h2>Education designed for knowledge, discipline, and practical success.</h2>
                    <p>Riverview College is a multidisciplinary institution focused on strong fundamentals, applied learning, and student development.</p>
                </div>
                <ul class="check-list">
                    <li><i class="fa-solid fa-circle-check"></i><span>Modern labs, digital classrooms, library resources, and career guidance.</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Experienced faculty with mentoring for academic and professional growth.</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Regular seminars, industrial visits, internships, and placement support.</span></li>
                </ul>
                <a href="<?= url_to('about') ?>" class="btn btn-brand mt-4"><i class="fa-solid fa-building-columns me-2"></i>Explore Campus</a>
            </div>
        </div>
    </div>
</section>

<section id="courses" class="section-padding bg-soft">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">Our Courses</div>
            <h2>Programs for every career path</h2>
            <p>Choose from undergraduate and postgraduate programs across science, commerce, arts, technology, and management.</p>
        </div>
        <div class="row g-4">
            <?php
                $courses = [
                    ['fa-laptop-code', 'BCA & Computer Science', 'Programming, web development, databases, networking, and software project training.'],
                    ['fa-chart-line', 'B.Com & Management', 'Accounting, finance, business analytics, entrepreneurship, and corporate communication.'],
                    ['fa-microscope', 'B.Sc Science', 'Physics, chemistry, mathematics, biology, research methods, and laboratory practice.'],
                ];
            ?>
            <?php foreach ($courses as $course): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="course-card">
                        <div class="icon-box"><i class="fa-solid <?= esc($course[0]) ?>"></i></div>
                        <h3><?= esc($course[1]) ?></h3>
                        <p><?= esc($course[2]) ?></p>
                        <a href="<?= url_to('courses') ?>" class="fw-bold text-success">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="administration" class="section-padding">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">Administration</div>
            <h2>Leadership focused on academic growth</h2>
            <p>Our administration team works closely with faculty, students, and parents to keep learning transparent and purposeful.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="admin-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80" alt="Principal">
                    <div class="admin-body"><h3>Dr. Arvind Sharma</h3><p class="text-success fw-bold mb-2">Principal</p><p class="mb-0">Guiding academic policy, faculty development, and institutional vision.</p></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="admin-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="Dean academics">
                    <div class="admin-body"><h3>Prof. Meera Singh</h3><p class="text-success fw-bold mb-2">Dean Academics</p><p class="mb-0">Coordinating curriculum, examinations, research activity, and mentoring.</p></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="admin-card">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=800&q=80" alt="Registrar">
                    <div class="admin-body"><h3>Mr. Karan Verma</h3><p class="text-success fw-bold mb-2">Registrar</p><p class="mb-0">Managing admissions, records, student services, and campus operations.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="notice" class="section-padding bg-soft">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title" data-aos="fade-up">
                    <div class="eyebrow">Notice Board</div>
                    <h2>Latest announcements</h2>
                    <p>Important updates for admissions, examinations, events, and student services.</p>
                </div>
                <div class="d-grid gap-3">
                    <div class="notice-card" data-aos="fade-up"><div class="notice-date"><div><span>18</span>Jun</div></div><div><h3 class="h5 fw-bold">First merit list for UG admission will be published online.</h3><p class="mb-0">Students should keep their documents ready for verification after selection.</p></div></div>
                    <div class="notice-card" data-aos="fade-up" data-aos-delay="100"><div class="notice-date"><div><span>22</span>Jun</div></div><div><h3 class="h5 fw-bold">Internal examination form submission deadline.</h3><p class="mb-0">Late submissions will require department approval and applicable fee.</p></div></div>
                    <div class="notice-card" data-aos="fade-up" data-aos-delay="200"><div class="notice-date"><div><span>29</span>Jun</div></div><div><h3 class="h5 fw-bold">Campus placement orientation for final year students.</h3><p class="mb-0">Placement cell will explain registration, resume review, and interview schedule.</p></div></div>
                </div>
            </div>
            <div class="col-lg-5" id="events">
                <div class="section-title" data-aos="fade-up">
                    <div class="eyebrow">Events</div>
                    <h2>Campus calendar</h2>
                    <p>Upcoming programs and activities for students.</p>
                </div>
                <div class="d-grid gap-3">
                    <div class="event-card" data-aos="fade-up"><div class="event-meta"><i class="fa-solid fa-calendar-day me-2"></i>July 05, 2026</div><h3 class="h5 fw-bold">Freshers Orientation</h3><p class="mb-0">Department introductions, campus tour, and student club registration.</p></div>
                    <div class="event-card" data-aos="fade-up" data-aos-delay="100"><div class="event-meta"><i class="fa-solid fa-calendar-day me-2"></i>July 12, 2026</div><h3 class="h5 fw-bold">Innovation Expo</h3><p class="mb-0">Project exhibition, startup talks, and prototype demonstrations.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="section-padding">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">Gallery</div>
            <h2>Life at Riverview College</h2>
            <p>Campus spaces, classrooms, events, laboratories, and student activities.</p>
        </div>
        <div class="row g-4">
            <?php
                $gallery = [
                    ['https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=900&q=80', 'Central Library'],
                    ['https://images.unsplash.com/photo-1581093458791-9f3c3900df7b?auto=format&fit=crop&w=900&q=80', 'Science Lab'],
                    ['https://images.unsplash.com/photo-1527891751199-7225231a68dd?auto=format&fit=crop&w=900&q=80', 'Seminars'],
                ];
            ?>
            <?php foreach ($gallery as $item): ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <a class="gallery-item" href="#"><img src="<?= esc($item[0]) ?>" alt="<?= esc($item[1]) ?>"><span><?= esc($item[1]) ?></span></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="admission" class="pb-5">
    <div class="container">
        <div class="cta" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Admissions are open for the 2026 academic session.</h2>
                    <p>Submit your enquiry and our admission team will contact you with eligibility, fees, and document details.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= url_to('contact') ?>" class="btn btn-light fw-bold px-4 py-3"><i class="fa-solid fa-user-plus me-2"></i>Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
