<div class="row">
    <!-- Website Input -->
    <div class="col-md-12">
        <!-- Website Input -->
        <div class="form-group">
            <label for="website">Website :</label>
            <input type="text" value="<?= isset($data->website) ? $data->website : '' ?>" class="form-control" id="website" name="website" minlength="10" minlength="5" placeholder="www.google.com" require>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Full Name Input -->
        <div class="form-group">
            <label for="full_name">Full Name :</label>
            <input type="text" class="form-control" value="<?= isset($data->full_name) ? $data->full_name : '' ?>" id="full_name" name="full_name" maxlength="30" minlength="5" placeholder="Mahmoud Mohammed" required>
        </div>
        <!-- Address Input -->
        <div class="form-group">
            <label for="address">Address :</label>
            <input type="text" class="form-control" value="<?= isset($data->address) ? $data->address : '' ?>" id="address" name="address" minlength="5" placeholder="Egypt, Cairo" required>
        </div>
        <!-- Birthday Input -->
        <div class="form-group">
            <label for="birthday">Birthday :</label>
            <input type="date" value="<?= isset($data->birthday) ? $data->birthday : '' ?>" class="form-control" id="birthday" name="birthday" required>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Job Input -->
        <div class="form-group">
            <label for="job">Job :</label>
            <input type="text" value="<?= isset($data->job) ? $data->job : '' ?>" class="form-control" id="job" name="job" maxlength="30" minlength="3" placeholder="Web Developer" required>
        </div>
        <!-- Phone Input -->
        <div class="form-group">
            <label for="phone">Phone :</label>
            <input type="tel" value="<?= isset($data->phone) ? $data->phone : '' ?>" class="form-control" id="phone" name="phone" maxlength="13" minlength="10" placeholder="01156455369" required>
        </div>
        <!-- Gender Input -->
        <div class="form-group">
            <label for="gender">Gender :</label>
            <select class="custom-select" id="gender" name="gender" required>
                <option value="male" <?php if (isset($data->gender) && $data->gender == 'male') {
                                            echo 'selected';
                                        } ?>>Male</option>
                <option value="female" <?php if (isset($data->gender) && $data->gender == 'female') {
                                            echo 'selected';
                                        } ?>>Female</option>
            </select>
        </div>
    </div>
</div>