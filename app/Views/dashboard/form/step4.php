<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="awards">Awards You :</label>
            <!-- Basic CKEditor start -->
            <div id="basic">
                <textarea name="awards" class="ckeditor" cols="30" rows="6" 
                minlength="10" required><?= isset($data->awards) ? $data->awards : ''; ?></textarea>
            </div>
            <!-- Basic CKEditor end -->
        </div>
    </div>
</div>