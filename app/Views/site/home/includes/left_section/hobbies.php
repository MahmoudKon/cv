<div class="hobbies">
    <h3 class="header wow fadeIn" data-wow-delay="1s">hobbies</h3>
    <ul class="hobby-list font-style">
        <?php if(isset($hobbies) && count((array) $hobbies) > 0) : ?>
            <?php foreach($hobbies as $index => $hope) : ?>
                <li class="wow fadeInDown" data-wow-delay="<?= rand(.5, 2); ?>s">
                    <i class='fas <?= $hope->icon; ?> icon'></i> <?= $hope->hobby; ?>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li class="wow fadeInDown" data-wow-delay="<?= rand(.5, 2); ?>s">
                NO HOBBIES YET
            </li>
        <?php endif; ?>
    </ul>
</div>