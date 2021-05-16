<div class="row">
    <div class="col-md-6">
        <!-- User Name Input -->
        <div class="form-group">
            <label for="username">User Name :</label>
            <input type="text" value="<?= isset($data->username) ? $data->username : ''; ?>" 
                                class="form-control" id="username" name="username"
                                placeholder="Mahmoud050" required>
        </div>
        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" value="<?= isset($data->email) ? $data->email : ''; ?>"       
                                class="form-control" id="email" name="email"
                                placeholder="example_example@yahoo.com" required>
        </div>
        <!-- Password Input -->
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" value="" name="password"
                        placeholder="M@hM0ud050" <?= isset($data) ? '' : 'required'; ?>>
        </div>
        <!-- Confirm Password Input -->
        <div class="form-group">
            <label for="confirm_password">Confirm Password :</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="M@hM0ud050"  <?= isset($data) ? '' : 'required'; ?>>
        </div>

        <!-- LEVEL Input -->
        <?php if(isset($data->permission) && auth()->permission == 'admin') : ?>
        <div class="form-group">
            <label for="permission">User Permission :</label>
            <select name="permission" id="permission" class="form-control" required>
                <option value="admin" <?= $data->permission == 'admin' ? 'selected' : ''; ?>>Admin</option>
                <option value="user" <?= $data->permission == 'user' ? 'selected' : ''; ?>>User</option>
            </select>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <!-- User Image Input -->
        <div class="form-group">
            <label for="image">User Image :</label>
            <input type="file" class="form-control" accept="image/*" id="image" name="image">
        </div>
        <div id="show_image" style="height: 245px; border: 1px solid #000">
            <img src="<?= isset($data->image) ? assets('uploads/' . $data->image) : ''; ?>" id="preview" style="width: 100%; height: 100%;">
        </div>
    </div>
</div>
