<?php foreach ($data as $hobby) : ?>
    <input hidden name="user_id" value="<?php
                                        if (isset($hobby->user_id))
                                            echo $hobby->user_id;
                                        else
                                            echo auth()->id ?>">
    <input type="hidden" name="hobbies[0][id]" value="<?= $hobby->id ?>">
    <div class="col-7">
        <label id="hobby"> Hobby Name :</label>
        <input type="text" placeholder="Web Developer" class="form-control" name="hobbies[0][hobby]" minlength="3" maxlength="40" id="hobby" value="<?= $hobby->hobby ?>" required>
    </div>
    <div class="col-3">
        <label id="hobby"> Hobby Icon :</label>
        <input type="text" placeholder="fa-football" class="form-control"
                    name="hobbies[0][icon]" id="icon" value="<?= $hobby->icon ?>" required>
    </div>
<?php endforeach; ?>