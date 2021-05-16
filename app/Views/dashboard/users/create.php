<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php include(VIEWS . 'dashboard/form/header_form.php'); ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/users/store') ?>" id="wizard" method="POST" enctype="multipart/form-data" class="icons-tab-steps wizard-circle">
                            <!-- Step 1 [USER NAME, EMAIL, PASSWORD, CONFIRM, IMAGE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 1</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step1.php'); ?>
                            </fieldset>

                            <!-- Step 2  [FULL NAME, JOB, ADDRESS, PHONE, BIRTHDAY, GENDER] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 2</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step2.php'); ?>
                            </fieldset>

                            <!-- Step 3 [ABOUT] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 3</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step3.php'); ?>
                            </fieldset>

                            <!-- Step 4 [AWARD] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 4</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step4.php'); ?>
                            </fieldset>

                            <!-- Step 5 [SKILLS & HOBBIES] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 5</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step5.php'); ?>
                            </fieldset>

                            <!-- Step 6 [EDUCATION & EXPERIENCE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 6</h6>
                            <fieldset>
                                <?php include(VIEWS . 'dashboard/form/step6.php'); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->