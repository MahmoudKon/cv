<div class="about">
    <h1 class="sempl-header wow fadeIn" data-wow-delay=".5s"> <i class="fas fa-user"></i> about</h1>
    <div class="padding">
        <p class="text wow flipInX" data-wow-delay=".8s">
            <?= isset($general->about) ? html_entity_decode($general->about) : 'NO INFORMETION YET'; ?>
        </p>
    </div>
</div>