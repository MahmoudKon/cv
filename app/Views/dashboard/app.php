<?php 
    // IF THE SESSION OF ERROR MESSAGES NOT SET WILL SET IT
    if(!isset($_SESSION['user'])){ return header('location:' . URL('dashboard/login')); }
    // IF THE SESSION OF ERROR MESSAGES NOT SET WILL SET IT
    if(!isset($_SESSION['msg'])){ $_SESSION['msg'] = ''; }
    // ALL TABLES PAGES IN ARRAY

    include('includes/header.php');     //   Include The Header Section
    include('includes/nav.php');        //   Include The Navbar Section
    include('includes/side.php');       //   Include The Sidebar Section
?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-md-6">
                        <?php 
                            $url = segment();
                            if(is_numeric($url[count($url) -1 ]))
                                array_pop($url);
                        ?>
                        <ol class="breadcrumb">
                            <?php for($i = 0; $i < count($url); $i++) : ?>
                            <?php if(is_numeric($url[$i])) { continue; }?>
                                <?php if($i < (count($url) - 1 && $url[$i] != 'profile') ): ?>
                                    <li class="breadcrumb-item"> <a href="<?= URL($i > 0 ? 'dashboard/' . $url[$i] : $url[$i]); ?>"> <?= ucfirst($url[$i]);?> </a> </li>
                                <?php else : ?>
                                    <li class="breadcrumb-item active"> <?= ucfirst($url[$i]);?> </li>
                            <?php endif; ?>
                            <?php endfor;?>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- FOR DESPLAY THE MESSAGE [ SUCSSESS , ERROR ] -->
            <div class="content-header-right col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-md-12">
                        <!-- THIS IS MESSAGE [ERROR OR SUCCESS] -->
                        <?php if(msg() !== ''): ?>
                            <div id="alert" class="alert <?= 'bg-' . msg()['type']; ?> alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong> <?= msg()['message']; ?> </strong>
                            </div>
                            <?php unset($_SESSION['msg']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- c3 line charts section start -->
            <section id="c3-line-charts">
                <!-- Line Chart -->
                <?php include(VIEWS . $view . '.php'); ?>
            </section>
            <!-- // c3 line charts section end -->
        </div>
    </div>
</div>

<?php include('includes/footer.php');   //   Include The Footer Section ?>