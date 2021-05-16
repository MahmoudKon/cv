<div class="card-body">
    <div class="row">
        <div class="form-group col-12 mb-2 contact-repeater">
            <div data-repeater-list="hobbies">
                <div class="input-group body col-12 px-0 mb-1" data-repeater-item="">
                    <input hidden name="user_id"
                            value="<?php
                                        if(isset($hobby->user_id))
                                            echo $hobby->user_id;
                                        else
                                            echo auth()->id?>"
                    >
                    <div class="col-8">
                        <label id="hobby"> Hobby Name :</label>
                        <input type="text" placeholder="Web Developer" class="form-control" name="hobby" minlength="3" maxlength="40" id="hobby" required>
                    </div>
                    <div class="col-3">
                        <label id="hobby"> Hobby Icon :</label>
                        <input type="text" placeholder="fa-football" class="form-control"
                                    name="icon" id="icon" required>
                    </div>
                    <div class="col-1">
                        <label id="hobby"> Del :</label>
                        <span class="input-group-append" id="button-<?= $hobby->id ?>">
                            <button class="btn btn-danger btn-delete" type="button" 
                                    data-repeater-delete="">
                            <i class="ft-x"></i></button>
                        </span>
                    </div>
                </div>
            </div>
                <button type="button" data-repeater-create=""
                            class="btn btn-primary">
                    <i class="ft-plus"></i> Add New hobbies
                </button>
        </div>
    </div>
</div>



