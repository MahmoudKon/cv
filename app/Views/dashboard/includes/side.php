<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <!-- DASHBOARD PAGE -->
            <li class="nav-item <?= activeUrl('dashboard'); ?>">
                <a href="<?= URL('dashboard'); ?>">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>

            <!-- USERS PAGE -->
            <li class="nav-item <?php echo activeUrl('users'); ?>">
                <a href="<?= URL('dashboard/users'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">User</span>
                </a>
            </li>

            <!-- GENERAL PAGE -->
            <li class="nav-item <?php echo activeUrl('general'); ?>">
                <a href="<?= URL('dashboard/general'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">General</span>
                </a>
            </li>

            <!-- SKILLS PAGE -->
            <li class="nav-item <?php echo activeUrl('skills'); ?>">
                <a href="<?= URL('dashboard/skills'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">Skills</span>
                </a>
            </li>

            <!-- HOBBIES PAGE -->
            <li class="nav-item <?php echo activeUrl('hobbies'); ?>">
                <a href="<?= URL('dashboard/hobbies'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">Hobbies</span>
                </a>
            </li>

            <!-- EDUCATION PAGE -->
            <li class="nav-item <?php echo activeUrl('education'); ?>">
                <a href="<?= URL('dashboard/education'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">Education</span>
                </a>
            </li>

            <!-- EXPERIENCE PAGE -->
            <li class="nav-item <?php echo activeUrl('experience'); ?>">
                <a href="<?= URL('dashboard/experience'); ?>">
                    <i class="la la-user"></i>
                    <span class="menu-title">Experience</span>
                </a>
            </li>

        </ul>
    </div>
</div>