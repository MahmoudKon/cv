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
                        <?php 
                            if(isset($education))
                                include('notEmpty/education.php');
                            else
                                include('empty/education.php');
                        ?>
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
                        <?php 
                            if(isset($experience))
                                include('notEmpty/experience.php');
                            else
                                include('empty/experience.php');
                        ?>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Timeline
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
