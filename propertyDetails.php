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

<div class="result-details">
    <div class="container">
            <div class="result-details-content">
                <div class="col-md-4 noPadding">
                    <div class="side-bar">
                        <div class="col-md-12 normal-padding">
                            <div class="details-content-section">
                                <h3 class="color-green">The House</h3>

                                <p>South Road, Haywards Heath, West Sussex, RH16 1SE</p>

                                <h3 class="price">£1,500,000</h3>
                            </div>
                            <div class="details-content-section">
                                <p>A grade II listed early 18th Century
                                    Stone built old property in Haywards
                                    Heath with over 2,500 square foot of
                                    floor space and a magnificent garden.
                                </p>
                            </div>
                            <div class="details-content-section">
                                <ul class="icon-absolute">
                                    <li class="popover-bath" data-toggle="popover" data-content="Lorem Ipsum"><img class="" src="img/bath.png" alt=""/> <span>x 3</span></li>
                                    <li class="popover-bed" data-toggle="popover" data-content="Lorem Ipsum"><img class="" src="img/bed.png" alt=""/> <span>x 5</span></li>
                                    <li class="popover-living" data-toggle="popover" data-content="Lorem Ipsum"><img class="" src="img/living.png" alt=""/> <span>x 3</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 noPadding">
                            <div class="result-contact">
                                <h4 class="contact-number text-center">Haywards Heath Office: 01444 451818</h4>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-default btn-lg btn-block modal-trigger-margin" data-toggle="modal" data-target="#my-floor"><i
                                    class="glyphicon glyphicon-th-large pull-left"></i> View floor plan</a>
                            <a class="btn btn-default btn-lg btn-block modal-trigger-margin"  data-toggle="modal" data-target="#my-rating"><i
                                    class="glyphicon glyphicon-align-left pull-left"></i> View EPC Document</a>
                            <a class="btn btn-default btn-lg btn-block modal-trigger-margin" data-toggle="modal" data-target="#my-map"><i
                                    class="glyphicon glyphicon-map-marker pull-left"></i> View on map</a>
                            <a class="btn btn-default btn-lg btn-block modal-trigger-margin" href="#"><i
                                    class="glyphicon glyphicon-home pull-left"></i> View schools and area info</a>
                            <a class="btn btn-default btn-lg btn-block modal-trigger-margin" href="#"><i
                                    class="glyphicon glyphicon-print pull-left"></i> Print</a>
                            <a class="btn btn-normal btn-lg modal-trigger-margin" data-toggle="modal" data-target="#my-request-view">Request Viewing</a><br/>
                            <a class="btn btn-normal btn-lg modal-trigger-margin">Add to favourites</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12 noPadding">
                        <div class="slide-show">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                    <li>
                                        <img src="img/property.jpg"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 noPadding">
                        <div class="column-blog-content">
                            <h2>Property Details</h2>

                            <p>
                                Manor Farm comprises a farm house extending to in excess of 4,150 sq. ft. and a complex
                                of barns with
                                consent for conversion into four dwellings totalling almost 11,000 sq. ft. There is a
                                paddock extending to
                                approximately 4.2 acres.
                            </p>

                            <ul>
                                <li>Four barns for conversion</li>
                                <li>Planning consent granted</li>
                                <li>Farm house</li>
                                <li>Five bedrooms</li>
                                <li>Paddocks</li>
                                <li>Available as a whole or in lots</li>
                                <li>Edge of village position</li>
                            </ul>
                        </div>
                        <div class="column-blog-content">
                            <h2>Description</h2>
                            <p>
                                The House consists of a stone under slate five bedroom farm house with a range of
                                similar
                                stone under
                                slate single and two storey barns. There are also 20th century portal frame agricultural
                                buildings which
                                have consent for demolition as part of the proposed scheme.
                            </p>
                            <p>There is a 4.2 acre paddock to the south of the farm house and main complex of barns.</p>
                        </div>
                        <div class="column-blog-content">
                            <h2>Planning</h2>
                            <p>Planning consent was granted on 13th December 2013 under application number 123456</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php include('include/footer.php'); ?>



<?php include('include/request-modal.php'); ?>


<div class="modal fade" id="my-floor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="close modal-dismis" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body text-center">
                <img class="imgAuto" src="img/map.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="my-rating" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="close modal-dismis" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body text-center">
                <img class="imgAuto" src="img/rating.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="my-map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close modal-dismis" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body text-center">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1769117936906!2d-74.00518579574023!3d40.71412181919358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x660aeef42acf9b9b!2sNew+York+City+Supreme+Court!5e0!3m2!1sen!2s!4v1411850450279" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php include('include/footer_resources.php'); ?>
<script type="text/javascript">
    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
</script>
</html>