<?php if(isset($timelines)) { ?>
<section id="timeline" class="timeline-center timeline-wrapper border-primary">
    <div class="card">
        <div class="card-header bg-primary bg-darken-4">
            <h4 class="card-title text-white"><?= $timelineTitle ?></h4>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <div class="badge badge-glow badge-pill badge-danger"> <?= count((array) $timelines) ?> </div>
                </ul>
            </div>
        </div>
    </div>

    <?php foreach($timelines as $index => $timeline) : ?>
    <!-- Button Of Date Range -->
    <ul class="timeline">
        <li class="timeline-line"></li>
        <li class="timeline-group">
            <a href="#" class="btn btn-primary">
                <i class="la la-calendar-o"></i> 
                <?= date('Y', strtotime($timeline->start_date)) . ' - ' . date('Y', strtotime($timeline->end_date)) ?>
            </a>
        </li>
    </ul>
    <!-- The Body Of Timelines -->
    <ul class="timeline pr-0 pb-0">
        <li class="timeline-line" <?php $index == count((array) $timelines) ? 'style=height:0' : '' ?>></li>
        <li class="timeline-item block mt-0 pb-0 px-0">
            <div class="timeline-badge">
            </div>
            <div class="timeline-card card border-grey border-lighten-2 mb-0">
                <div class="card-header">
                    <div class="text-center">
                        <p><i class="la la-bar-chart font-medium-4"></i></p>
                        <h2> <?= ucwords($timeline->degree) ?> </h2>
                        <h4> <?= ucwords($timeline->place) ?> </h4>
                        <p class="timeline-date"> <?= date("F j, Y",strtotime($timeline->start_date));  ?> </p>
                        <p> <?= $timeline->description ?> </p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <?php endforeach; ?>
</section>
<?php } ?>
