<?= view('partials/header', ['title' => $title, 'active' => $active]) ?>

<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1600&q=80');">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span>Contact Us</span>
            <h1>Connect with admission, academics, and student support.</h1>
            <p>Send your enquiry or visit campus during office hours. Our team will guide you with the next steps.</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="section-title mb-4">
                    <div class="eyebrow">Reach Us</div>
                    <h2>Campus contact details</h2>
                    <p>Use the information below for admission enquiries, examination support, or campus visits.</p>
                </div>
                <div class="contact-list">
                    <div><i class="fa-solid fa-location-dot"></i><span>Riverview College Road, Knowledge City, Patna, Bihar 800001</span></div>
                    <div><i class="fa-solid fa-phone"></i><span>+91 98765 43210</span></div>
                    <div><i class="fa-solid fa-envelope"></i><span>info@riverviewcollege.edu</span></div>
                    <div><i class="fa-solid fa-clock"></i><span>Monday - Saturday, 9:00 AM - 5:00 PM</span></div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <form class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="course">Course Interest</label>
                            <select class="form-select" id="course">
                                <option selected>Select course</option>
                                <option>BCA & Computer Science</option>
                                <option>B.Com & Management</option>
                                <option>B.Sc Science</option>
                                <option>BA Humanities</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Write your message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-brand"><i class="fa-solid fa-paper-plane me-2"></i>Send Enquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <iframe title="Riverview College map" src="https://maps.google.com/maps?q=Patna%20Bihar&t=&z=12&ie=UTF8&iwloc=&output=embed"></iframe>
</section>

<?= view('partials/footer') ?>
