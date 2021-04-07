<!-- EDUCATION SECTION -->
<div class="card border-blue">
    <div class="card-header bg-blue">
        <h4 class="card-title text-white" id="repeat-form">Education</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="education">
                        <div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
                            <?php include('timelines.php'); ?>
                            <div class="col-4">
                                <span class="input-group-append d-block" id="button-addon2">
                                    <button class="btn btn-danger d-block w-100" type="button" data-repeater-delete=""><i class="ft-x"></i> Delete</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Timeline
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EXPERIENCE SECTION -->
<div class="card border-cyan">
    <div class="card-header bg-cyan">
        <h4 class="card-title text-white" id="repeat-form">Experience</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="experience">
                        <div class="input-group col-12 p-2 mb-1 border-info" data-repeater-item="">
                            <?php include('timelines.php'); ?>
                            <div class="col-4">
                                <span class="input-group-append d-block" id="button-addon2">
                                    <button class="btn btn-danger d-block w-100" type="button" data-repeater-delete=""><i class="ft-x"></i> Delete</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Timeline
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
