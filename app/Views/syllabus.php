<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80');">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span>Syllabus</span>
            <h1>Course-wise syllabus overview for current students.</h1>
            <p>Find semester structure, core papers, practical subjects, and skill modules.</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="section-title text-center mx-auto" data-aos="fade-up">
            <div class="eyebrow">Academic Structure</div>
            <h2>Syllabus by program</h2>
            <p>This page shows a clean overview. Detailed PDF downloads can be connected later from the admin panel or public files.</p>
        </div>
        <div class="accordion syllabus-accordion" id="syllabusAccordion" data-aos="fade-up">
            <?php
                $items = [
                    ['BCA & Computer Science', ['Programming Fundamentals', 'Data Structures', 'Database Management System', 'Web Technology', 'Software Engineering', 'Major Project']],
                    ['B.Com & Management', ['Financial Accounting', 'Business Law', 'Cost Accounting', 'Taxation', 'Business Analytics', 'Entrepreneurship Development']],
                    ['B.Sc Science', ['Physics Practical', 'Chemistry Practical', 'Mathematics', 'Environmental Science', 'Research Methods', 'Laboratory Project']],
                    ['BA Humanities', ['Indian History', 'Political Theory', 'Sociology', 'Economics', 'Communication Skills', 'Public Administration']],
                ];
            ?>
            <?php foreach ($items as $index => $item): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#syllabus<?= $index ?>">
                            <?= esc($item[0]) ?>
                        </button>
                    </h2>
                    <div id="syllabus<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" data-bs-parent="#syllabusAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <?php foreach ($item[1] as $subject): ?>
                                    <div class="col-md-6">
                                        <div class="subject-row"><i class="fa-solid fa-book"></i><span><?= esc($subject) ?></span></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding bg-soft">
    <div class="container">
        <div class="cta" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Need syllabus details for admission or exam preparation?</h2>
                    <p>Contact the academic office for official syllabus copies, exam rules, and subject combinations.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= url_to('contact') ?>" class="btn btn-light fw-bold px-4 py-3"><i class="fa-solid fa-envelope me-2"></i>Contact Office</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
