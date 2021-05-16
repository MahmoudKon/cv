<?php foreach($experience as $exp) : ?>
<div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
    <input type="hidden" value="<?= $exp->id ?>" name="id" required>
    <!-- End Date & Place Name Inputs & Start Date & Degree Name Inputs -->
    <div class="col-md-7">
        <!-- Start Date Input -->
        <div class="form-group mb-2">
            <label id="start_date"> Start Date</label>
            <input type="date" value="<?= $exp->start_date ?>" class="form-control" 
                    name="start_date" id="start_date" required>
        </div>

        <!-- End Date Input -->
        <div class="form-group mb-2">
            <label id="end_date"> End Date</label>
            <input type="date"  value="<?= $exp->end_date ?>" class="form-control"
                    name="end_date" id="end_date" required>
        </div>

        <!-- Degree Name Input -->
        <div class="form-group mb-2">
            <label id="degree">Your Degree</label>
            <input type="text"  value="<?= $exp->degree ?>" class="form-control"
                    name="degree" id="degree"  placeholder="Degree Name"
                    minlength="5" required>
        </div>

        <!-- University Name Input -->
        <div class="form-group mb-2">
            <label id="place"> University Name</label>
            <input type="text"  value="<?= $exp->place ?>" class="form-control"
                        name="place" id="place" minlength="5"
                        placeholder="University Name" required>
        </div>
    </div>
    <!-- TextArea Input -->
    <div class="col-md-5">
        <div class="form-group mb-2">
            <label id="description"> Description :</label>
            <div id="basic">
                <textarea name="description" placeholder="Write Some Words About This experience"
                class="form-control form-group-sm" cols="30" rows="15" minlength="10"
                required><?= $exp->description ?></textarea>
            </div>
        </div>
    </div>

    <div class="col-4">
        <span class="input-group-append d-block" id="button-addon2">
            <button class="btn btn-danger d-block w-100" type="button" data-repeater-delete=""><i class="ft-x"></i> Delete</button>
        </span>
    </div>
</div>
<?php endforeach; ?>
