<?php foreach ($skills as $skill) : ?>
    <div class="input-group col-12 px-0 mb-1" data-repeater-item="">
        <input type="hidden" name="id" required value="<?= $skill->id ?>">

        <div class="col-7">
            <label id="skill"> Skill Name :</label>
            <input type="text" placeholder="Web Developer" class="form-control" name="skill" minlength="3" maxlength="40" id="skill" required value="<?= $skill->skill ?>">
        </div>

        <div class="col-4">
            <label id="skill"> Skill Level :</label>
            <input type="number" placeholder="Set Your Level From 1 To 5" class="form-control" pattern="[1-5]{1}" name="level" id="level" required value="<?= $skill->level ?>">
        </div>

        <div class="col-1">
            <label id="skill"> Del :</label>
            <span class="input-group-append" id="button-addon2">
                <button class="btn btn-danger" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
            </span>
        </div>
    </div>
<?php endforeach; ?>