<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="auth-card" data-aos="fade-up">
                    <div class="auth-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                    <h1>Student Login</h1>
                    <p>Access admission updates, notices, syllabus, and student services.</p>

                    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
                    <?php endif; ?>

                    <form action="<?= url_to('login.post') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label class="form-label" for="loginEmail">Email Address</label>
                            <input type="email" name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="loginEmail" value="<?= old('email') ?>" placeholder="Enter email address">
                            <?php if (isset($errors['email'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="loginPassword">Password</label>
                            <input type="password" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="loginPassword" placeholder="Enter password">
                            <?php if (isset($errors['password'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['password']) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <a href="#" class="auth-link">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-brand w-100">Login</button>
                    </form>

                    <div class="auth-footer">
                        New student? <a href="<?= url_to('register') ?>">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
