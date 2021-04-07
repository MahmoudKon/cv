<div class="card border-blue">
    <div class="card-header bg-blue">
        <h4 class="card-title text-white" id="repeat-form">Skills</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="skills">
                        <div class="input-group col-12 px-0 mb-1" data-repeater-item="">
                            <div class="col-7">
                                <label id="skill"> Skill Name :</label>
                                <input type="text" placeholder="Web Developer" class="form-control" name="skill" minlength="3" maxlength="40" id="skill" required>
                            </div>
                            <div class="col-4">
                                <label id="skill"> Skill Level :</label>
                                <input type="number" placeholder="Set Your Level From 1 To 5"  class="form-control" pattern="[1-5]{1}" name="level" id="level" required>
                            </div>
                            <div class="col-1">
                                <label id="skill"> Del :</label>
                                <span class="input-group-append" id="button-addon2">
                                    <button class="btn btn-danger" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
                                </span>
                            </div>
                        </div>
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
                        <div class="input-group col-12 px-0 mb-1" data-repeater-item="">
                            <div class="col-7">
                                <label> Hobby Name :</label>
                                <input type="text" placeholder="Football" class="form-control" name="hobby" minlength="3" maxlength="40" require>
                            </div>
                            <div class="col-4">
                                <label> Icon :</label>
                                <input type="text" placeholder="fa-football" class="form-control" name="icon" require>
                            </div>
                            <div class="col-1">
                                <label> Del :</label>
                                <span class="input-group-append" id="button-addon2">
                                    <button class="btn btn-danger" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Hobbies
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
