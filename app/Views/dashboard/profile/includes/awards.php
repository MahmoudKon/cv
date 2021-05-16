<?php if(isset($data->general->awards)) { ?>
<div class="card border-amber">
    <div class="card-header bg-amber bg-darken-4">
        <h4 class="card-title text-white">Awerds</h4>
    </div>
    <div class="card-body">
        <p> <?= htmlspecialchars_decode($data->general->awards) ?> </p>
    </div>
</div>
<?php } ?>
