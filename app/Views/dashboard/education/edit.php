<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php
                $header = 'Edit ' . strtoupper(segment()[1]);
                include(VIEWS . 'dashboard/form/header_form.php');
                ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/' . segment()[1] . '/update') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($edu->user_id))
                                            echo $edu->user_id;
                                        else
                                            echo auth()->id ?>">
                            <div class="row">
                                <!-- USER ID -->
                                <!-- INPUTS -->
                                <?php
                                    if(auth()->permission == 'admin') {
                                        include('edit/admin.php');
                                    } else {
                                        if(isset($data))
                                            include('edit/education.php');
                                        else
                                            include('edit/emptyEducation.php');
                                    }
                                ?>
                            </div>
                            <!-- BUTTON SUBMIT -->
                            <button type="submit" class="btn btn-primary">
                                <i class="ft-save"></i> UPDATE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->
