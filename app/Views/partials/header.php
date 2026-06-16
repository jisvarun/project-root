<?php
    $title = $title ?? 'Riverview College';
    $active = $active ?? 'home';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="top-strip">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex flex-wrap gap-3">
                <span><i class="fa-solid fa-phone me-2"></i>+91 98765 43210</span>
                <span><i class="fa-solid fa-envelope me-2"></i>admissions@riverviewcollege.edu</span>
            </div>
            <div class="d-flex gap-3">
                <a href="<?= url_to('home') ?>#notice">Notices</a>
                <a href="<?= url_to('contact') ?>">Contact</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3" href="<?= url_to('home') ?>">
                <span class="brand-mark"><i class="fa-solid fa-graduation-cap"></i></span>
                <span>
                    <strong>Riverview College</strong>
                    <small>Knowledge. Character. Service.</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link <?= $active === 'home' ? 'active' : '' ?>" href="<?= url_to('home') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= $active === 'about' ? 'active' : '' ?>" href="<?= url_to('about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link <?= $active === 'courses' ? 'active' : '' ?>" href="<?= url_to('courses') ?>">Courses</a></li>
                    <li class="nav-item"><a class="nav-link <?= $active === 'syllabus' ? 'active' : '' ?>" href="<?= url_to('syllabus') ?>">Syllabus</a></li>
                    <li class="nav-item"><a class="nav-link <?= $active === 'contact' ? 'active' : '' ?>" href="<?= url_to('contact') ?>">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://universities.jharkhand.gov.in/home" target="_blank" rel="noopener noreferrer">Chancellor Portal</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url_to('login') ?>">Login</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-brand" href="<?= url_to('home') ?>#admission">Apply Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
