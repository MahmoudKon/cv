<!-- Form wizard with icon tabs section start -->
<?php extract((array) $data); ?>
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php include('edit/header_form.php'); ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/profile/update') ?>"
                                id="wizard"  enctype="multipart/form-data"
                                method="POST" class="icons-tab-steps wizard-circle">
                            <!-- Step 1 [USER NAME, EMAIL, PASSWORD, CONFIRM, IMAGE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 1</h6>
                            <fieldset>
                                <?php include('edit/step1.php'); ?>
                            </fieldset>

                            <!-- Step 2  [FULL NAME, JOB, ADDRESS, PHONE, BIRTHDAY, GENDER] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 2</h6>
                            <fieldset>
                                <?php include('edit/step2.php'); ?>
                            </fieldset>

                            <!-- Step 3 [ABOUT] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 3</h6>
                            <fieldset>
                                <?php include('edit/step3.php'); ?>
                            </fieldset>

                            <!-- Step 4 [AWARD] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 4</h6>
                            <fieldset>
                                <?php include('edit/step4.php'); ?>
                            </fieldset>

                            <!-- Step 5 [SKILLS & HOBBIES] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 5</h6>
                            <fieldset>
                                <?php include('edit/step5.php'); ?>
                            </fieldset>

                            <!-- Step 6 [EDUCATION & EXPERIENCE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 6</h6>
                            <fieldset>
                                <?php include('edit/step6.php'); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->