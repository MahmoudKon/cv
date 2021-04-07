<div class="experience">
    <h1 class="sempl-header wow  fadeIn" data-wow-delay="2.5s"> <i class="fas fa-briefcase"></i> experience</h1>
    <div class="padding">
        <?php if (isset($experience) && count((array) $experience) > 0) : ?>
            <!-- Time Line Item -->
            <?php foreach ($experience as $item) : ?>
                <!-- Time Line Item -->
                <div class="time-line">
                    <div class="time wow fadeIn" data-wow-delay="1s">
                    <?= date('Y', strtotime($item->start_date)) . ' - ' . date('Y', strtotime($item->end_date)); ?>
                    </div>
                    <div class="body">
                        <p class="degree font-style wow fadeIn" data-wow-delay="1.2s">
                            <?= $item->degree; ?>
                        </p>
                        <p class="university font-style wow fadeIn" data-wow-delay="1.5s">
                            <?= $item->place; ?>
                        </p>
                        <p class="text wow fadeIn" data-wow-delay="1.8s">
                            <?= html_entity_decode($item->description); ?>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text wow fadeIn" data-wow-delay="1.5s"> NO INFORMATIONS YET </p>
        <?php endif; ?>
    </div>
</div>