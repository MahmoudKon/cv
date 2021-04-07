<?php foreach ($hobbies as $hobby) : ?>
    <div class="input-group col-12 px-0 mb-1" data-repeater-item="">
        <input type="hidden" name="id" required value="<?= $hobby->id ?>">

        <div class="col-7">
            <label> Hobby Name :</label>
            <input type="text" placeholder="Football" class="form-control"
                    name="hobby" minlength="3" maxlength="40"
                    required value="<?= $hobby->hobby ?>">
        </div>

        <div class="col-4">
            <label> Icon :</label>
            <input type="text" placeholder="fa-football"
                    class="form-control" name="icon" required
                    value="<?= $hobby->icon ?>">
        </div>

        <div class="col-1">
            <label> Del :</label>
            <span class="input-group-append" id="button-addon2">
                <button class="btn btn-danger" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
            </span>
        </div>
    </div>
<?php endforeach; ?>