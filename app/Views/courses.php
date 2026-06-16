<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1600&q=80');">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span>Academic Programs</span>
            <h1>Choose a course aligned with your career direction.</h1>
            <p>Our programs combine classroom teaching, assignments, labs, workshops, and mentoring.</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">Courses</div>
            <h2>Undergraduate and skill programs</h2>
            <p>Explore course options across technology, commerce, science, humanities, and professional skills.</p>
        </div>
        <div class="row g-4">
            <?php
                $courses = [
                    ['fa-laptop-code', 'BCA & Computer Science', '3 Years', 'Programming, web development, databases, computer networks, and final year software projects.'],
                    ['fa-chart-line', 'B.Com & Management', '3 Years', 'Accounting, taxation, business law, financial management, analytics, and entrepreneurship.'],
                    ['fa-microscope', 'B.Sc Science', '3 Years', 'Physics, chemistry, mathematics, biology, practical labs, and research foundation.'],
                    ['fa-scale-balanced', 'BA Humanities', '3 Years', 'History, political science, sociology, economics, literature, and public administration.'],
                    ['fa-briefcase', 'MBA Foundation', '2 Years', 'Marketing, HR, finance, operations, leadership, presentations, and case study practice.'],
                    ['fa-language', 'Skill Certificates', '3-6 Months', 'Spoken English, office automation, digital marketing, data skills, and interview readiness.'],
                ];
            ?>
            <?php foreach ($courses as $course): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="course-card">
                        <div class="icon-box"><i class="fa-solid <?= esc($course[0]) ?>"></i></div>
                        <div class="course-duration"><?= esc($course[2]) ?></div>
                        <h3><?= esc($course[1]) ?></h3>
                        <p><?= esc($course[3]) ?></p>
                        <a href="<?= url_to('syllabus') ?>" class="fw-bold text-success">View Syllabus <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding bg-soft">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-title mb-0">
                    <div class="eyebrow">Career Support</div>
                    <h2>Learning continues beyond the classroom.</h2>
                    <p>Students get support through resume clinics, mock interviews, industrial visits, internships, seminars, and placement orientation.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="support-grid">
                    <div><i class="fa-solid fa-file-lines"></i><span>Resume Review</span></div>
                    <div><i class="fa-solid fa-users-viewfinder"></i><span>Mock Interview</span></div>
                    <div><i class="fa-solid fa-industry"></i><span>Industrial Visits</span></div>
                    <div><i class="fa-solid fa-certificate"></i><span>Skill Workshops</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
