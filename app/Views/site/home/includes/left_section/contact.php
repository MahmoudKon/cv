<div class="contact">
    <h3 class="header wow fadeIn" data-wow-delay="1s">contact</h3>
    <ul class="contact-list font-style">
        <?php if(isset($general) && !isset($general->scalar)) : ?>
            <li class="wow rollIn" data-wow-delay=".5s">
                <i class="fas fa-phone icon wow"></i> <?= $general->phone; ?>
            </li>
            <li class="wow rollIn" data-wow-delay=".8s">
                <i class="fas fa-home icon wow"></i> <?= $general->address; ?>
            </li>
            <li class="wow rollIn" data-wow-delay="1.1s">
                <i class="fas fa-globe icon wow"></i>
                <a href="<?= $general->website; ?>"><?= $general->website; ?></a>
            </li>
            <li class="wow rollIn" data-wow-delay="1.3s">
                <i class="fas fa-envelope icon wow"></i>
                <a href="<?= $user->email; ?>"><?= $user->email; ?></a>
            </li>
        <?php else : ?>
            <li class="wow rollIn" data-wow-delay="1.3s">
                NO CONTACT INFORMATIONS YET
            </li>
        <?php endif; ?>
    </ul>
</div>