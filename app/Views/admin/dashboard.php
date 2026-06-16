<?= view('admin/header', ['title' => $title, 'active' => $active]) ?>
<?= view('admin/sidebar', ['active' => $active]) ?>

<main class="admin-main">
    <header class="admin-topbar">
        <button class="admin-sidebar-toggle" type="button" aria-label="Open admin menu" aria-controls="adminSidebar">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div>
            <h1>Dashboard</h1>
            <p>College website activity and quick management overview.</p>
        </div>
        <div class="admin-user">
            <span><i class="fa-solid fa-user-shield"></i></span>
            <div>
                <strong><?= esc(session('user_name') ?? 'Admin') ?></strong>
                <small><?= esc(session('user_role') ?? 'User') ?></small>
            </div>
        </div>
    </header>

    <section class="admin-stats">
        <div class="admin-stat-card">
            <i class="fa-solid fa-user-graduate"></i>
            <span>Total Students</span>
            <strong>5,240</strong>
        </div>
        <div class="admin-stat-card">
            <i class="fa-solid fa-book"></i>
            <span>Courses</span>
            <strong>32</strong>
        </div>
        <div class="admin-stat-card">
            <i class="fa-solid fa-bullhorn"></i>
            <span>Active Notices</span>
            <strong>12</strong>
        </div>
        <div class="admin-stat-card">
            <i class="fa-solid fa-envelope-open-text"></i>
            <span>Enquiries</span>
            <strong>86</strong>
        </div>
    </section>

    <section class="row g-4">
        <div class="col-lg-8">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <h2>Recent Enquiries</h2>
                    <a href="#">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table admin-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Phone</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rahul Kumar</td>
                                <td>BCA</td>
                                <td>98765 43210</td>
                                <td><span class="admin-badge success">New</span></td>
                            </tr>
                            <tr>
                                <td>Anjali Singh</td>
                                <td>B.Com</td>
                                <td>91234 56780</td>
                                <td><span class="admin-badge warning">Follow Up</span></td>
                            </tr>
                            <tr>
                                <td>Amit Verma</td>
                                <td>B.Sc</td>
                                <td>99887 76655</td>
                                <td><span class="admin-badge success">New</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <h2>Quick Actions</h2>
                </div>
                <div class="admin-actions">
                    <a href="#"><i class="fa-solid fa-plus"></i><span>Add Notice</span></a>
                    <a href="#"><i class="fa-solid fa-upload"></i><span>Upload Gallery</span></a>
                    <a href="#"><i class="fa-solid fa-file-lines"></i><span>Update Syllabus</span></a>
                    <a href="<?= url_to('home') ?>" target="_blank"><i class="fa-solid fa-globe"></i><span>View Website</span></a>
                </div>
            </div>
        </div>
    </section>

<?= view('admin/footer') ?>
