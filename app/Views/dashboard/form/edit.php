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
                            <!-- ID THIS RECOURD -->
                            <input type="hidden" name="id" value="<?= isset($data->id) ? $data->id : ''; ?>">
                            <!-- USER ID -->
                            <input type="hidden" name="user_id" value="<?= isset($data->user_id) ? $data->user_id : ''; ?>">
                            <!-- INPUTS -->
                            <div class="input-group col-12 px-0 mb-1" data-repeater-item="">
                                <?php include('timelines.php'); ?>
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