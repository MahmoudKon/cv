<div class="main-info">
    <img src="<?= isset($user->image) ? assets('uploads/' . $user->image) : assets('uploads/avatar.jpg'); ?>" alt="User Image" class="wow rollIn">
    <h2 class="name wow bounceIn" data-wow-delay="1s">
        <?= isset($general->full_name) ? $general->full_name : 'NO NAME YET'; ?>
    </h2>
    <h4 class="job wow bounceIn" data-wow-delay="1.3s">
        <?= isset($general->job) ? $general->job : 'NO JOB YET'; ?>
    </h4>
</div>
