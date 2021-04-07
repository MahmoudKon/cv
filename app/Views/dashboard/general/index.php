<!-- THE TABLE HEADER -->
<div class="card">
    <div class="card-header bg-primary bg-darken-2 text-white">
        <h4 class="card-title text-white">GENERALS</h4>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <div class="badge badge-glow badge-pill badge-danger"> <?= count($data) ?> </div>
            </ul>
        </div>
    </div>
</div>

<!-- THE TABLE BODY -->
<div class="table-responsive">
    <?php if(count($data) > 0) : ?>
    <table class="table table-bordered table-striped mb-0">
        <thead class="thead-dark">
            <tr>
                <th class="px-1 text-center">#</th>
                <th>User Name</th>
                <th>Job</th>
                <th>Address</th>
                <th>Website</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $index => $row) :?>
                <tr>
                    <td class="px-1 text-center" width='60px'> <?= $index + 1 ?> </td>
                    <td> <?= $row->full_name ?> </td>
                    <td> <?= $row->job ?> </td>
                    <td> <?= $row->address ?> </td>
                    <td> <?= $row->website ?> </td>
                    <td> <?= floor((time() - strtotime($row->birthday))/31556926) . ' Years' ?> </td>
                    <td width="105px" class="p-1">                        
                        <?php include(VIEWS . 'dashboard/form/btn.php'); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
        <p class="alert alert-danger text-center"> no data to desplay it </p>
    <?php endif; ?>
</div>




