<div class="admin-sidebar-backdrop"></div>

<aside class="admin-sidebar" id="adminSidebar">
    <button class="admin-sidebar-close" type="button" aria-label="Close admin menu">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <a class="admin-brand" href="<?= url_to('admin.dashboard') ?>">
        <span class="brand-mark"><i class="fa-solid fa-graduation-cap"></i></span>
        <span>
            <strong>Riverview</strong>
            <small>Admin Panel</small>
        </span>
    </a>

    <nav class="admin-menu">
        <a class="<?= $active === 'dashboard' ? 'active' : '' ?>" href="<?= url_to('admin.dashboard') ?>">
            <i class="fa-solid fa-gauge-high"></i>
            <span>Dashboard</span>
        </a>
        <a href="#">
            <i class="fa-solid fa-user-graduate"></i>
            <span>Students</span>
        </a>
        <a href="#">
            <i class="fa-solid fa-book-open"></i>
            <span>Courses</span>
        </a>
        <a href="#">
            <i class="fa-solid fa-bullhorn"></i>
            <span>Notices</span>
        </a>
        <a href="#">
            <i class="fa-solid fa-image"></i>
            <span>Gallery</span>
        </a>
        <a href="#">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>
        <form action="<?= url_to('logout') ?>" method="post" class="admin-logout-form">
            <button type="submit">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </form>
    </nav>
</aside>
