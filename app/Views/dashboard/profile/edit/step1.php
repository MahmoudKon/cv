<div class="row">
    <div class="col-md-6">
        <!-- User ID Input -->
        <input type="hidden" value="<?= isset($user->id) ? $user->id : ''; ?>"
                        name="users[id]" required>

        <!-- User Name Input -->
        <div class="form-group">
            <label for="username">User Name :</label>
            <input type="text" value="<?= isset($user->username) ? $user->username : ''; ?>" 
                                class="form-control" id="username" name="users[username]"
                                placeholder="Mahmoud050" required>
        </div>

        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" value="<?= isset($user->email) ? $user->email : ''; ?>"       
                                class="form-control" id="email" name="users[email]"
                                placeholder="example_example@yahoo.com" required>
        </div>

        <!-- Password Input -->
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" value=""
                name="users[password]" placeholder="M@hM0ud050">
        </div>

        <!-- Confirm Password Input -->
        <div class="form-group">
            <label for="confirm_password">Confirm Password :</label>
            <input type="password" class="form-control" id="confirm_password"
                    name="users[confirm_password]" placeholder="M@hM0ud050">
        </div>

        <!-- LEVEL Input -->
        <?php if(isset($user->permission) && auth()->permission == 'admin') : ?>
        <div class="form-group">
            <label for="permission">User Permission :</label>
            <select name="users[permission]" id="permission" class="form-control" required>
                <option value="admin" <?= $user->permission == 'admin' ? 'selected' : ''; ?>>Admin</option>
                <option value="user" <?= $user->permission == 'user' ? 'selected' : ''; ?>>User</option>
            </select>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <!-- User Image Input -->
        <div class="form-group">
            <label for="image">User Image :</label>
            <input type="file" class="form-control" accept="image/*" id="image" name="users[image]">
        </div>

        <div id="show_image" style="height: 245px; border: 1px solid #000">
            <img src="<?= isset($user->image) ? assets('uploads/' . $user->image) : ''; ?>" id="preview" style="width: 100%; height: 100%;">
        </div>
    </div>
</div>
