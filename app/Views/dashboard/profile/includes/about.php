<?php if(isset($data->general)) { ?>
<div class="card border-cyan">
    <div class="card-header bg-cyan bg-accent-4">
        <h4 class="card-title text-white">About</h4>
    </div>
    <div class="card-body">
        <p> <?= htmlspecialchars_decode($data->general->about) ?> </p>
    </div>
</div>
<?php } ?>