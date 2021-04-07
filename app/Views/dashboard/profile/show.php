<div class="card includes-with-cover mb-0">
    <div class="media profil-cover-details w-100 py-1">
        <!-- User Image -->
        <div class="media-left pl-2 pt-0">
            <img src="<?= assets('uploads/' . auth()->image) ?>" class="rounded-circle img-border height-100" alt="Card image">
        </div>
        <!-- User Name, Tabs -->
        <div class="media-body px-2 pt-2">
            <div class="row">
                <!-- User Name , Job -->
                <div class="col-10">
                    <h2 class="card-title"><?= isset($data->general->full_name) ? $data->general->full_name : 'Ghoust' ?></h2>
                    <h4 class="card-title"><?= isset($data->general->job) ? $data->general->job : '.......' ?></h4>
                </div>
                <!-- Option Button -->
                <div class="col-2 text-right">
                    <span class="dropdown pull-right">
                        <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                        <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(62px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <!-- EDIT BUTTON -->
                            <a href="<?= URL('dashboard/users/edit/'. $data->user->id) ?>" class="dropdown-item">
                                <i class="ft-edit-2 info"></i> Edit
                            </a>
                            <!-- DELETE BUTTON -->
                            <form class="d-inline" method="post" action="<?= URL('dashboard/users/delete') ?>">
                                <input type="hidden" name="id" value="<?= $data->user->id ?>">
                                <button onclick="return confirm('Are you sure you want to delete this user?');" class="dropdown-item btn">
                                    <i class="ft-trash danger"></i> Delete
                                </button>
                            </form>
                        </span>
                    </span>
                </div>
                <!-- Tabs -->
                <ul class="nav nav-tabs nav-iconfall nav-justified">
                    <!-- About Tab -->
                    <?php if(isset($data->general)) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" id="about-tab1" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="true">
                            <i class="ft-heart"></i> About
                        </a>
                    </li>
                    <!-- Awards Tab -->
                    <li class="nav-item">
                        <a class="nav-link" id="awards-tab1" data-toggle="tab" href="#awards" aria-controls="awards" aria-expanded="true">
                            <i class="ft-heart"></i> Awards
                        </a>
                    </li>
                    <?php endif; ?>

                    <!-- Skills Tab -->
                    <?php if(isset($data->skills)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="skills-tab1" data-toggle="tab" href="#skills" aria-controls="awards" aria-expanded="true">
                            <i class="ft-heart"></i> Skills
                        </a>
                    </li>
                    <?php endif; ?>

                    <!-- Hobbies Tab -->
                    <?php if(isset($data->hobbies)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="hobbies-tab1" data-toggle="tab" href="#hobbies" aria-controls="hobbies" aria-expanded="true">
                            <i class="ft-heart"></i> Hobbies
                        </a>
                    </li>
                    <?php endif; ?>

                    <!-- Education Tab -->
                    <?php if( isset($data->education)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="education-tab1" data-toggle="tab" href="#education" aria-controls="education" aria-expanded="true">
                            <i class="ft-heart"></i> Education
                        </a>
                    </li>
                    <?php endif; ?>

                    <!-- Experience Tab -->
                    <?php if(isset($data->experience)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="experience-tab1" data-toggle="tab" href="#experience" aria-controls="experience" aria-expanded="true">
                            <i class="ft-heart"></i> Experience
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Tabs Body -->
<div class="card-body">
    <div class="tab-content px-5 pt-1">
        <!-- About Tab Body -->
        <div role="tabpanel" class="tab-pane active" id="about" aria-labelledby="about-tab1" aria-expanded="true">
            <?php include('includes/about.php') ?>
        </div>
        <!-- Awards Tab Body -->
        <div role="tabpanel" class="tab-pane" id="awards" aria-labelledby="awards-tab1" aria-expanded="true">
            <?php include('includes/awards.php') ?>
        </div>
        <!-- Skills Tab Body -->
        <div role="tabpanel" class="tab-pane" id="skills" aria-labelledby="skills-tab1" aria-expanded="true">
            <?php include('includes/skills.php') ?>
        </div>
        <!-- Hobbies Tab Body -->
        <div role="tabpanel" class="tab-pane" id="hobbies" aria-labelledby="hobbies-tab1" aria-expanded="true">
            <?php include('includes/hobbies.php') ?>
        </div>
        <!-- Education Tab Body -->
        <div role="tabpanel" class="tab-pane" id="education" aria-labelledby="education-tab1" aria-expanded="true">
            <?php
                $timelineTitle = 'Education';
                $timelines = $data->education;
                include('includes/timelines.php');
            ?>
        </div>
        <!-- Experience Tab Body -->
        <div role="tabpanel" class="tab-pane" id="experience" aria-labelledby="experience-tab1" aria-expanded="true">
            <?php
            $timelineTitle = 'Experience';
            $timelines = $data->experience;
            include('includes/timelines.php');
            ?>
        </div>
    </div>
</div>