<div class="card-body">
    <div class="row">
        <div class="form-group col-12 mb-2 contact-repeater">
            <div data-repeater-list="skills">
                <div class="input-group body col-12 px-0 mb-1" data-repeater-item="">
                    <input hidden name="user_id"
                            value="<?php
                                        if(isset($skill->user_id))
                                            echo $skill->user_id;
                                        else
                                            echo auth()->id?>"
                    >
                    <div class="col-8">
                        <label id="skill"> Skill Name :</label>
                        <input type="text" placeholder="Web Developer" class="form-control" name="skill" minlength="3" maxlength="40" id="skill" required>
                    </div>
                    <div class="col-3">
                        <label id="skill"> Skill Level :</label>
                        <input type="number" placeholder="Set Your Level From 1 To 5" class="form-control" pattern="[1-5]{1}" name="level" id="level" required>
                    </div>
                    <div class="col-1">
                        <label id="skill"> Del :</label>
                        <span class="input-group-append" id="button-<?= $skill->id ?>">
                            <button class="btn btn-danger btn-delete" type="button" 
                                    data-repeater-delete="">
                            <i class="ft-x"></i></button>
                        </span>
                    </div>
                </div>
            </div>
                <button type="button" data-repeater-create=""
                            class="btn btn-primary">
                    <i class="ft-plus"></i> Add New Skills
                </button>
        </div>
    </div>
</div>



