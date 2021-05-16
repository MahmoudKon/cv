<?php include(VIEWS . 'dashboard/includes/login/header.php') ?>
<div class="card border-grey border-lighten-3 m-0">
    <div class="card-header border-0">
        <div class="card-title text-center">
            <div class="p-1">
                <img src="<?= assets('backend/app-assets/images/logo/logo-dark.png') ?>" alt="branding logo">
            </div>
        </div>
        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
            <span>Login with <?= SITENAME ?></span>
        </h6>
        <?php if (msg() !== '') : ?>
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
            <form class="form-horizontal form-simple" method="POST" action="<?php URL('dashboard/login') ?>" novalidate>
                <fieldset class="form-group position-relative has-icon-left mb-1">
                    <input type="text" name="username" placeholder="Your Username" required
                        value="<?= isset($data->username) ? $data->username : 'Mahmoud'; ?>"  class="form-control form-control-lg input-lg" >
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="password" name="password" value="123" required class="form-control form-control-lg input-lg" placeholder="Enter Password">
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
            </form>
        </div>
    </div>
    <div class="card-footer">
        <div class="">
            <p class="text-center m-0">New to Moden Admin? <a href="<?= URL('dashboard/register'); ?>" class="card-link">Sign Up</a></p>
        </div>
    </div>
</div>
<?php include(VIEWS . 'dashboard/includes/login/footer.php') ?>