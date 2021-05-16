<?php if(isset( $data->hobbies)) { ?>
<div class="card border-primary">
    <div class="card-header bg-cyan bg-darken-4 bg-darken-4">
        <h4 class="card-title text-white">Hobbies</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <div class="badge badge-glow badge-pill badge-danger">
                    <?= count((array) $data->hobbies) ?>
                </div>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Hobbies</th>
                        <th scope="col">Icon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->hobbies as $hobby)  :?>
                    <tr>
                        <td> <?= $hobby->hobby ?> </td>
                        <td> <i class="la la-star"></i> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php } ?>
