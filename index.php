<?php include('core.php'); ?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Marcus Grimes - Home</title>
    <?php include('include/head.php'); ?>
</head>
<body>

<?php include('include/top-header.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/banner.php'); ?>
<?php include('include/slogan.php'); ?>
<?php include('include/column-blog.php'); ?>
<?php include('include/feature.php'); ?>
<?php include('include/footer.php'); ?>

<?php include('include/request-modal.php'); ?>



<?php include('include/footer_resources.php'); ?>
<script type="text/javascript">
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: false,
            slideshow : true,
            animationLoop: true,
            slideshowSpeed: 5000
        });
    });
</script>
</body>
</html>