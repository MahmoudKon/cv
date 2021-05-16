<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php
                    $header = 'Edit';
                    include(VIEWS . 'dashboard/form/header_form.php');
                ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/' . segment()[1] . '/update') ?>" id="wizard" method="POST" enctype="multipart/form-data" class="icons-tab-steps wizard-circle">

                            <!-- ID THIS RECOURD -->
                            <input type="hidden" name = "id" value="<?= isset($data->id) ? $data->id : ''; ?>">

                            <!-- Step 1  [FULL NAME, JOB, ADDRESS, PHONE, BIRTHDAY, GENDER] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 1</h6>
                            <fieldset>
                            <?php include(VIEWS . 'dashboard/form/step2.php'); ?>
                            </fieldset>

                            <!-- Step 2 [ABOUT] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 2</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step3.php'); ?>
                            </fieldset>

                            <!-- Step 2 [AWARD] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 3</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step4.php'); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->