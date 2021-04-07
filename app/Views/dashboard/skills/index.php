<!-- THE TABLE HEADER -->
<div class="card">
    <div class="card-header bg-primary bg-darken-2 text-white">
        <h4 class="card-title text-white">SKILLS</h4>
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
                <th>Skill Name</th>
                <th>Level</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $index => $row) :?>
                <tr>
                    <td class="px-1 text-center" width='60px'> <?= $index + 1 ?> </td>
                    <td> <?= $row->skill ?> </td>
                    <td> 
                        <?php for($i = 0; $i < $row->level; $i++) : ?>
                            <i class="la-star"></i>
                        <?php endfor; ?>
                    </td>
                    <td> <?= date("F j, Y",strtotime($row->created_at));  ?> </td>
                    <td width="105px" class="p-1">                        
                        <a href="<?= URL('dashboard/' . segment()[1] . '/edit/' . $row->user_id) ?>" class="btn btn-sm btn-primary box-shadow-2"><i class="ft-edit"></i></a>
                        <form class="d-inline" method="post" action="<?= URL('dashboard/' . segment()[1] . '/delete') ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">
                        <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-sm btn-danger box-shadow-2"><i class="ft-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
        <p class="alert alert-danger text-center"> no data to desplay it </p>
    <?php endif; ?>
</div>




