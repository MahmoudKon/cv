<div class="card">
    <div class="card-header bg-primary bg-darken-2 text-white">
        <h4 class="card-title text-white">USERS</h4>
        <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
        </a>
        <div class="heading-elements">
            <ul class="list-inline mb-0" style="margin-top: -6px">
                <li>
                    <a href="<?= URL('dashboard/' . segment()[1] . '/create') ?>" class="pull-right btn btn-info">
                        <i class="ft-plus"></i> New User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="table-responsive">
    
    <?php if(count($data) > 0) : ?>
        <table class="table table-bordered table-striped mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table_body">
                <?php include('includes/table.php');?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="alert alert-danger text-center">Sorry No Users</p>
    <?php endif; ?>
</div>




