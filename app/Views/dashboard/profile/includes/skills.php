<?php if(isset($data->skills)) { ?>
<div class="card border-purple">
    <div class="card-header bg-purple bg-darken-4">
        <h4 class="card-title text-white">Skills</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <div class="badge badge-glow badge-pill badge-danger">
                    <?= count((array) $data->skills) ?>
                </div>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Skill Name</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->skills as $skill)  :?>
                    <tr>
                        <td> <?= $skill->skill ?> </td>
                        <td>
                            <?php for($i = 0; $i < $skill->level; $i++) : ?>
                                <i class="la la-star"></i>
                            <?php endfor; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php } ?>