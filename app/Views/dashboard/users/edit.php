<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php
                    $header = 'Edit Users';
                    include(VIEWS . 'dashboard/form/header_form.php');
                ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/users/update') ?>" method="POST" enctype="multipart/form-data">
                            <!-- USER ID -->
                            <input type="hidden" name="id" value="<?= isset($data->id) ? $data->id : ''; ?>" >
                            <!-- Step 1 [USER NAME, EMAIL, PASSWORD, CONFIRM, IMAGE] -->
                            <?php include(VIEWS . 'dashboard/form/step1.php'); ?>

                            <button type="submit" class="btn btn-primary"><i class="ft-save"></i> UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->