<?php include('core.php'); ?>
<!doctype html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Marcus Grimes - Home</title>
    <?php include('include/head.php'); ?>
</head>
<body>

<?php include('include/top-header.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/search-options.php'); ?>
<?php include('include/search-results.php'); ?>




<div class="results">
    <div class="container">
        <div class="container-fluid">
            <div class="result-content">
                <div class="col-sm-4">
                    <img class="imgAuto" src="<?php echo base_url; ?>img/result.jpg" alt=""/>
                </div>
                <div class="col-sm-8">
                    <div class="result-section">
                        <div class="col-sm-8 noPadding">
                            <h3>
                                The House <br>
                                <span>South Road, Haywards Heath, West Sussex, RH16 1SE</span>
                            </h3>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <h3 class="price">
                                £1,500,000
                            </h3>
                        </div>
                    </div>
                    <div class="result-section">

                        <div class="col-md-8 noPadding">
                            <div class="result-content-description">


                                <p>
                                    A grade II listed early 18th Century Stone built old property in
                                    Haywards Heath with over 2,500 square foot of floor space and a
                                    magnificent garden.
                                </p>

                                <table class="table-icon">
                                    <tr>
                                        <td class="td-img"><img class="" src="img/bath.png" alt=""/></td>
                                        <td class="td-text">x 3</td>
                                        <td class="td-img"><img class="" src="img/bed.png" alt=""/></td>
                                        <td class="td-text">x 5</td>
                                        <td class="td-img"><img class="" src="img/living.png" alt=""/></td>
                                        <td class="td-text">x 3</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4 noPadding">
                            <div class="link-buttons">
                                <a href="#" class="btn btn-green-light result-block">View Property</a>
                                <a href="#" class="btn btn-default result-block">Request Viewing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result-contact">
                <div class="col-sm-4"><h4 class="contact-number">Haywards Heath Office: 01444 451818</h4></div>
                <div class="col-sm-8"><h4 class="email">email: sales@haywardsheathmarcusgrimes</h4></div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('include/footer.php'); ?>


</body>
<?php include('include/footer_resources.php'); ?>
</html>