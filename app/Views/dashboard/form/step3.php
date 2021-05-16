<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="about">About You :</label>
            <!-- Basic CKEditor start -->
            <div id="basic">
                <textarea name="about" cols="30" rows="6" class="ckeditor" 
                minlength="10" required><?= isset($data->about) ? $data->about : ''; ?></textarea>
            </div>
            <!-- Basic CKEditor end -->
        </div>
    </div>
</div>