<div class="card border-blue">
    <div class="card-header bg-blue">
        <h4 class="card-title text-white" id="repeat-form">Skills</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="skills">
                        <?php
                            if(isset($skills))
                                include('notEmpty/skills.php');
                            else
                                include('empty/skills.php');
                        ?>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Skills
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card border-cyan">
    <div class="card-header bg-cyan">
        <h4 class="card-title text-white" id="repeat-form">Hobbies</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="hobbies">
                        <?php
                            if(isset($hobbies))
                                include('notEmpty/hobbies.php');
                            else
                                include('empty/hobbies.php');
                        ?>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Hobbies
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
