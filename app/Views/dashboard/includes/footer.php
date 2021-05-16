<footer class="footer footer-static footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="javascript:void(0)" target="_blank">PIXINVENT </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="<?= assets('backend/app-assets/vendors/js/vendors.min.js'); ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="<?= assets('backend/app-assets/js/core/app-menu.js'); ?>" type="text/javascript"></script>
<script src="<?= assets('backend/app-assets/js/core/app.js'); ?>" type="text/javascript"></script>
<script src="<?= assets('backend/app-assets/js/scripts/customizer.js'); ?>" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script  type="text/javascript" src="<?= assets('backend/app-assets/vendors/js/editors/ckeditor/ckeditor.js') ?>"></script>
<script  type="text/javascript" src="<?= assets('backend/app-assets/vendors/js/extensions/jquery.steps.min.js'); ?>"></script>
<script  type="text/javascript" src="<?= assets('backend/app-assets/js/scripts/forms/wizard-steps.js') ?>"></script>
<script  type="text/javascript" src="<?= assets('backend/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') ?>"></script>
<script  type="text/javascript" src="<?= assets('backend/app-assets/js/scripts/forms/form-repeater.js') ?>"></script>
<script  type="text/javascript" src="<?= assets('backend/app-assets/js/scripts/editors/editor-ckeditor.js') ?>"></script>

<!-- END PAGE LEVEL JS-->
<script  type="text/javascript" src="<?= assets('backend/app-assets/js/script.js') ?>"></script>


<script>
    // DELETE BY AJAX
    $(document).on('click', '.btn-delete', function(){
        var ele = $(this);
        var parent = ele.closest('.body');
        var id = parent.find('input[type=hidden]').val();
        var table = parent.parent().data('repeater-list');


        if(confirm('You sure want to remove this?')) {
            if(id == '') {
                parent.slideUp(400, function() {
                    $(this).remove();
                });
            }else{
                $.ajax({
                    type: 'POST',
                    url: table + '/delete',
                    data: 'id='+id, // data type expected from server
                    success: function (data) {
                        location.reload(true);
                    },
                });
            }
        }
    });
</script>

</body>

</html>