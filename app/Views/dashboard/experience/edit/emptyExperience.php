<?php foreach($data as $exp) { ?>
<!-- End Date & Place Name Inputs & Start Date & Degree Name Inputs -->
<div class="col-md-7">
    <!-- Start Date Input -->
    <div class="form-group mb-2">
        <label id="start_date"> Start Date</label>
        <input type="date" class="form-control" name="experience[0][start_date]"
                    id="start_date" required>
    </div>
    <!-- End Date Input -->
    <div class="form-group mb-2">
        <label id="end_date"> End Date</label>
        <input type="date" class="form-control"
                name="experience[0][end_date]" id="end_date" required>
    </div>
    <!-- Degree Name Input -->
    <div class="form-group mb-2">
        <label id="degree">Your Degree</label>
        <input type="text" class="form-control" name="experience[0][degree]"
                id="degree" placeholder="Degree Name" minlength="5" required>
    </div>
    <!-- University Name Input -->
    <div class="form-group mb-2">
        <label id="place"> University Name</label>
        <input type="text" class="form-control" name="experience[0][place]"
                id="place" minlength="5" placeholder="University Name" required>
    </div>
</div>
<!-- TextArea Input -->
<div class="col-md-5">
    <div class="form-group mb-2">
        <label id="description"> Description :</label>
        <div id="basic">
            <textarea name="experience[0][description]" placeholder="Write Some Words About This experience" class="form-control form-group-sm" cols="30"
                rows="15" minlength="10" required></textarea>
        </div>
    </div>
</div>
<?php } ?>
