<?php foreach ($data as $skill) : ?>
    <input hidden name="user_id" value="<?php
                                        if (isset($skill->user_id))
                                            echo $skill->user_id;
                                        else
                                            echo auth()->id ?>">
    <input type="hidden" name="skills[0][id]" value="<?= $skill->id ?>">
    <div class="col-7">
        <label id="skill"> Skill Name :</label>
        <input type="text" placeholder="Web Developer" class="form-control" name="skills[0][skill]" minlength="3" maxlength="40" id="skill" value="<?= $skill->skill ?>" required>
    </div>
    <div class="col-3">
        <label id="skill"> Skill Level :</label>
        <input type="number" placeholder="Set Your Level From 1 To 5" class="form-control" pattern="[1-5]{1}" name="skills[0][level]" id="level" value="<?= $skill->level ?>" required>
    </div>
<?php endforeach; ?>