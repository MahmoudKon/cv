<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <?php
                    $header = 'Edit Hobby';
                    include(VIEWS . 'dashboard/form/header_form.php');
                ?>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="<?= URL('dashboard/' . segment()[1] . '/update') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <input hidden name="user_id"
                                    value=<?= $data[0]->user_id ?>>
                                <?php
                                    if(auth()->permission == 'admin') {
                                        include('edit/admin.php');
                                    } else {
                                        if(isset($data))
                                            include('edit/hobbies.php');
                                        else
                                            include('edit/emptyHobbies.php');
                                    }
                                ?>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->