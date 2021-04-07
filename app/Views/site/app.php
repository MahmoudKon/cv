<?php
    // IF THE SESSION OF ERROR MESSAGES NOT SET WILL SET IT
    // if(!isset($_SESSION['user'])){ return header('location:' . URL('dashboard/login')); }

    if(isset($data)) { extract($data); }
?>

<?php include ('includes/header.php') ?>   <!-- Include The HEADER File -->
<!-- Start Container -->
<div class="container" id="container">
    <?php include(VIEWS . $view . '.php'); ?>     <!-- Incluude The Blade -->
</div>
<!-- End Container -->
<?php include ('includes/footer.php') ?>   <!-- Include The FOOTER File -->
