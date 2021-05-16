<div id="kick-start" class="card border-primary">
    <div class="card-header bg-primary bg-darken-3 text-white">
        <h4 class="card-title text-white">More Information</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li>
                    <a href="javascript:void(0)" data-action="collapse">
                        <i class="ft-minus"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-action="close">
                        <i class="ft-x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= URL('dashboard/profile/edit/' . auth()->id) ?>">
                        <i class="ft-edit"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <div class="card-text">
                <?php if(isset($data->general->about)) : ?>

                    <div class="row">
                        <!-- INFORMATION -->
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <!-- FULL NAME -->
                                        <tr>
                                            <th scope="row" class="border-top-0">Full Name</th>
                                            <td class="border-top-0"><?= $data->general->full_name ?></td>
                                        </tr>

                                        <!-- JOB -->
                                        <tr>
                                            <th scope="row" class="border-top-0">YOUR JOB</th>
                                            <td class="border-top-0"><?= $data->general->job ?></td>
                                        </tr>

                                        <!-- ADDRESS -->
                                        <tr>
                                            <th scope="row" class="border-top-0">Address</th>
                                            <td class="border-top-0"><?= $data->general->address ?></td>
                                        </tr>

                                        <!-- PHONE -->
                                        <tr>
                                            <th scope="row" class="border-top-0">Phone</th>
                                            <td class="border-top-0"><?= $data->general->phone ?></td>
                                        </tr>

                                        <!-- PHONE -->
                                        <tr>
                                            <th scope="row" class="border-top-0">Birthday</th>
                                            <td class="border-top-0"><?= $data->general->birthday ?></td>
                                        </tr>

                                        <!-- GENDER -->
                                        <tr>
                                            <th scope="row" class="border-top-0">Gender</th>
                                            <td class="border-top-0"><?= $data->general->gender ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- IMAGE -->
                        <div class="col-md-5">
                            <img src="<?= assets('uploads/' . auth()->image);?>" class="img-thumbnail">
                        </div>
                    </div>

                <?php else : ?>
                    <p class="bg-danger text-white p-2 alert-dismissible">
                        You do not have data on the topic <strong> about </strong>. You must complete your information 
                        <a href="<?= URL('dashboard/profile/edit/' . auth()->id) ?>" class="btn text-white">
                            <strong> here </strong>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
