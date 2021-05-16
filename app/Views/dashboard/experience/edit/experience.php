<div class="form-group col-12 contact-repeater">
    <div data-repeater-list="experience">
        <?php foreach ($data as $index => $exp) { ?>
        <div class="card body mb-2 input-group" data-repeater-item="" style="border-bottom: 1px solid #aaa;">
            <div class="row">
                <input type="hidden" name="id" value="<?= $exp->id ?>">
                <!-- End Date & Place Name Inputs & Start Date & Degree Name Inputs -->
                <div class="col-md-7">
                    <!-- Start Date Input -->
                    <div class="form-group mb-2">
                        <label id="start_date"> Start Date</label>
                        <input type="date" value="<?= $exp->start_date ?>" class="form-control" name="start_date" id="start_date" required>
                    </div>
                    <!-- End Date Input -->
                    <div class="form-group mb-2">
                        <label id="end_date"> End Date</label>
                        <input type="date" value="<?= $exp->end_date ?>" class="form-control" name="end_date" id="end_date" required>
                    </div>
                    <!-- Degree Name Input -->
                    <div class="form-group mb-2">
                        <label id="degree">Your Degree</label>
                        <input type="text" value="<?= $exp->degree ?>" class="form-control" name="degree" id="degree" placeholder="Degree Name" minlength="5" required>
                    </div>
                    <!-- University Name Input -->
                    <div class="form-group mb-2">
                        <label id="place"> University Name</label>
                        <input type="text" value="<?= $exp->place ?>" class="form-control" name="place" id="place" minlength="5" placeholder="University Name" required>
                    </div>
                </div>
                <!-- TextArea Input -->
                <div class="col-md-5">
                    <div class="form-group mb-2">
                        <label id="description"> Description :</label>
                        <div id="basic">
                            <textarea name="description" placeholder="Write Some Words About This experience" class="form-control form-group-sm" cols="30" rows="12" minlength="10" required><?= $exp->description ?></textarea>
                        </div>
                    </div>
                    <div>
                        <span class="input-group-append d-block" id="button-24">
                            <button class="btn btn-danger btn-delete d-block w-100" type="button">
                                <i class="ft-x"></i> Delete
                            </button>
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
    <button type="button" data-repeater-create="" class="btn btn-primary">
        <i class="ft-plus"></i> Add New Skills
    </button>
</div>

