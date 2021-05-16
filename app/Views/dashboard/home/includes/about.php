<div id="kick-start" class="card border-teal">
    <div class="card-header bg-teal bg-darken-3 text-white">
        <h4 class="card-title text-white">About</h4>
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
                    <p><?php echo htmlspecialchars_decode($data->general->about, ENT_NOQUOTES); ?></p>
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
