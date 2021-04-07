<?php include(VIEWS . 'dashboard/includes/login/header.php') ?>
<div class="card border-grey border-lighten-3 m-0">
    <div class="card-header border-0 pb-0">
        <div class="card-title text-center">
            <img src="<?= assets('backend/app-assets/images/logo/logo-dark.png') ?>" alt="branding logo">
        </div>
        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
            <span>Create Account</span>
        </h6>
        <?php if (msg() != false) : ?>
            <div id="alert" class="alert <?= 'bg-' . msg()['type']; ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong> <?= msg()['message']; ?> </strong>
            </div>
            <?php unset($_SESSION['msg']); ?>
        <?php endif; ?>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form-horizontal form-simple" action="<?php URL('dashboard/register') ?>" method="POST" enctype="multipart/form-data">
                <!-- USER NAME INPUT -->
                <fieldset class="form-group position-relative has-icon-left mb-1">
                    <input type="text" class="form-control form-control-lg input-lg"
                            name="username" placeholder="User Name"
                            value="<?= isset($data->username) ? $data->username : ''; ?>" required>
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                </fieldset>

                <!-- EMAIL INPUT -->
                <fieldset class="form-group position-relative has-icon-left mb-1">
                    <input type="email" class="form-control form-control-lg input-lg"
                                name="email" id="email" placeholder="Your Email Address"
                                value="<?= isset($data->email) ? $data->email : ''; ?>" required>
                    <div class="form-control-position">
                        <i class="ft-mail"></i>
                    </div>
                </fieldset>

                <!-- PASSWORD INPUT -->
                <fieldset class="form-group position-relative has-icon-left mb-0">
                    <input type="password" class="form-control form-control-lg input-lg" name="password"
                                placeholder="Enter Password" required aria-invalid="false">
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                </fieldset>

                <!-- CONFIRM PASSWORD INPUT -->
                <fieldset class="form-group position-relative has-icon-left mb-0">
                    <input type="password" class="form-control form-control-lg input-lg" name="confirm_password" placeholder="Confirm Password" required>
                    <div class="form-control-position">
                        <i class="ft-key"></i>
                    </div>
                </fieldset>

                <!-- CONFIRM PASSWORD INPUT -->
                <fieldset class="form-group position-relative has-icon-left">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
            </form>
        </div>
        <p class="text-center">Already have an account ? <a href="<?= URL('dashboard/login'); ?>" class="card-link">Login</a></p>
    </div>
</div>
<?php include(VIEWS . 'dashboard/includes/login/footer.php') ?>
