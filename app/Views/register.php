<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
                <div class="auth-card" data-aos="fade-up">
                    <div class="auth-icon"><i class="fa-solid fa-user-plus"></i></div>
                    <h1>Student Registration</h1>
                    <p>Create your account to submit enquiries and receive admission updates.</p>

                    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
                    <?php endif; ?>

                    <form action="<?= url_to('register.post') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="fullName">Full Name</label>
                                <input type="text" name="full_name" class="form-control <?= isset($errors['full_name']) ? 'is-invalid' : '' ?>" id="fullName" value="<?= old('full_name') ?>" placeholder="Enter full name">
                                <?php if (isset($errors['full_name'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['full_name']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <input type="tel" name="phone" class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>" id="phoneNumber" value="<?= old('phone') ?>" placeholder="Enter phone number">
                                <?php if (isset($errors['phone'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['phone']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="registerEmail">Email Address</label>
                                <input type="email" name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="registerEmail" value="<?= old('email') ?>" placeholder="Enter email address">
                                <?php if (isset($errors['email'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="courseInterest">Course Interest</label>
                                <select name="course_interest" class="form-select <?= isset($errors['course_interest']) ? 'is-invalid' : '' ?>" id="courseInterest">
                                    <option value="">Select course</option>
                                    <option value="BCA & Computer Science" <?= old('course_interest') === 'BCA & Computer Science' ? 'selected' : '' ?>>BCA & Computer Science</option>
                                    <option value="B.Com & Management" <?= old('course_interest') === 'B.Com & Management' ? 'selected' : '' ?>>B.Com & Management</option>
                                    <option value="B.Sc Science" <?= old('course_interest') === 'B.Sc Science' ? 'selected' : '' ?>>B.Sc Science</option>
                                    <option value="BA Humanities" <?= old('course_interest') === 'BA Humanities' ? 'selected' : '' ?>>BA Humanities</option>
                                </select>
                                <?php if (isset($errors['course_interest'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['course_interest']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input type="password" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="registerPassword" placeholder="Create password">
                                <?php if (isset($errors['password'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['password']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <input type="password" name="password_confirm" class="form-control <?= isset($errors['password_confirm']) ? 'is-invalid' : '' ?>" id="confirmPassword" placeholder="Confirm password">
                                <?php if (isset($errors['password_confirm'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['password_confirm']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label" for="termsCheck">I agree to receive admission communication from Riverview College.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-brand w-100">Create Account</button>
                            </div>
                        </div>
                    </form>

                    <div class="auth-footer">
                        Already registered? <a href="<?= url_to('login') ?>">Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
