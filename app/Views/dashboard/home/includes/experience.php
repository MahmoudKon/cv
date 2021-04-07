<!-- Basic Horizontal Timeline -->
<div class="card bg-transparent border-primary">
    <!-- Start The Header Of Timeline Section -->
    <div class="card-header bg-facebook bg-darken-1 text-white">
        <h4 class="card-title text-white">Experience</h4>
        <a href="javascript:void(0)" class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li>
                    <div class="badge badge-glow badge-pill badge-danger">
                        <?= count((array) $data->experience) ?>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)" data-action="collapse"><i class="ft-minus"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-action="close"><i class="ft-x"></i></a>
                </li>
                <li>
                    <a href="<?= URL('dashboard/profile/edit/' . auth()->id) ?>">
                        <i class="ft-edit"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End The Header Of Timeline Section -->

    <!-- The Body Of Timeline Section -->
    <div class="card-content collapse show" style="max-height:320px; overflow:auto">
        <!-- Start Card Content [To Show and Hide The Card Body] -->
        <section id="timeline" class="timeline-left timeline-wrapper pl-2 pr-1 py-2">
            <?php if (count((array) $data->experience) > 0) : ?>
                <!-- Start Section -->
                <!-- Timeline Area -->
                <?php foreach ($data->experience as $row) : ?>
                    <ul class="timeline pb-0">
                        <!-- To Display The Timeline Date Range -->
                        <li class="timeline-group mb-1 mt-1">
                            <span class="btn btn-primary">
                                <i class="ft-calendar"></i>
                                <?= date('Y', strtotime($row->start_date)) . '-' . date('Y', strtotime($row->end_date)); ?>
                            </span>
                        </li>
                        <!-- To Display The Line -->
                        <li class="timeline-line"></li>
                        <!-- To Display The Timeline Body -->
                        <li class="timeline-item pb-1 mt-0">
                            <div class="timeline-badge">
                                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="" data-original-title="Portfolio project work"><i class="la la-plane"></i></span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2 mb-0">
                                <div class="card-header pb-1">
                                    <h4 class="font-medium-5 card-title"><a href="javascript:void(0)"><?= $row->degree; ?></a></h4>
                                    <p class="card-subtitle text-muted pt-1">
                                        <span class="font-medium-2"><?= $row->place; ?></span>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0 pb-2">
                                        <p class="card-text m-0"><?= $row->description; ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php endforeach; ?>
                <?php else : ?>
                <p class="bg-danger text-white p-2 alert-dismissible">
                    You do not have data on the topic <strong> EDUCATION </strong>. You must complete your information
                    <a href="<?= URL('dashboard/profile/edit/' . auth()->id) ?>" class="btn text-white">
                        <strong> HERE </strong>
                    </a>
                </p>
            <?php endif; ?>
        </section> <!-- End Section -->
    </div> <!-- End Card Content -->
    <!-- The Body Of Timeline Section -->
</div>
<!--/ Basic Horizontal Timeline -->