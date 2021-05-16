<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0)"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                <a class="navbar-brand" href="<?= '/' . PROJECTNAME ?>">
                    <img class="brand-logo" alt="modern admin logo" src="<?= assets('backend/app-assets/images/logo/logo.png'); ?>">
                    <h3 class="brand-text">Modern Admin</h3>
                </a>
                </li>
                <li class="nav-item d-md-none">
                <a href="javascript:void(0)" class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0)"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="javascript:void(0)"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0)" data-toggle="dropdown">
                        <span class="mr-1">Hello,
                            <span class="user-name text-bold-700"><?= auth()->username; ?></span>
                        </span>
                        <span class="avatar avatar-online">
                            <img src="<?= avatarPath(auth()->image); ?>" alt="avatar"><i></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= URL('dashboard/profile') ?>">
                            <i class="ft-user"></i> Profile
                        </a>

                        <a class="dropdown-item" href="<?= URL(' '); ?>">
                            <i class="ft-user"></i> CV
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= URL('dashboard/logout');?>">
                            <i class="ft-power"></i> Logout
                        </a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


