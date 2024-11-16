<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<style>
    .testimonial-bg {
        border: 8px solid #9F8FEF;
        padding: 80px 70px;
        text-align: center;
        position: relative;
    }

    .testimonial-bg:before {
        content: "\f10d";
        font-family: "fontawesome";
        width: 75px;
        height: 75px;
        line-height: 75px;
        background: #fff;
        text-align: center;
        font-size: 50px;
        color: #3c414c;
        position: absolute;
        top: -40px;
        left: 2%;
    }

    .testimonial {
        padding: 0 15px;
    }

    .testimonial .description {
        font-weight: 400;
        font-style: italic;
        line-height: 30px;
        padding-bottom: 25px;
        margin-bottom: 15px;
        position: relative;
    }

    .testimonial .description:before {
        content: "";
        width: 75%;
        border-top: 1px solid #9F8FEF;
        margin: 0 auto;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .testimonial .description:after {
        content: "";
        width: 20px;
        height: 20px;
        background: #9F8FEF;
        position: absolute;
        bottom: -10px;
        left: 50%;
        border-bottom: 1px solid #9F8FEF;
        border-right: 1px solid #9F8FEF;
        transform: translateX(-50%) rotate(45deg);
    }

    .testimonial .pic {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 25px auto;
        overflow: hidden;
        
    }

    .testimonial .pic img {
        width: 100%;
        height: auto;
        background-color: #1D2125;
        mix-blend-mode: difference;
    }

    .testimonial .title {
        display: inline-block;
        font-size: 23px;
        font-weight: 700;
        text-transform: capitalize;
        margin: 0;
    }

    .testimonial .post {
        display: inline-block;
        font-size: 20px;
    }

    .owl-theme .owl-controls {
        background: #fff;
        margin-top: 10px;
        position: absolute;
        bottom: -34%;
        right: 0;
    }

    .owl-theme .owl-controls .owl-buttons div {
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        background: #34363b;
        opacity: 1;
        padding: 0;
    }

    .owl-prev:before,
    .owl-next:before {
        content: "\f104";
        font-family: "fontawesome";
        font-size: 23px;
        font-weight: 700;
        color: #fff;
    }

    .owl-next:before {
        content: "\f105";
    }

    @media only screen and (max-width:767px) {
        .testimonial-bg {
            padding: 50px 40px;
        }

        .owl-theme .owl-controls {
            bottom: -22%;
        }
    }

    @media only screen and (max-width:480px) {
        .testimonial-bg:before {
            width: 55px;
            height: 55px;
            line-height: 55px;
            font-size: 40px;
        }

        .testimonial-bg {
            padding: 30px 10px;
        }

        .owl-theme .owl-controls {
            bottom: -15%;
        }
    }

    @media only screen and (max-width:360px) {

        .testimonial .title,
        .testimonial .post {
            font-size: 16px;
        }

        .owl-theme .owl-controls {
            bottom: -12%;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 margin-start margin-end">
            <div class="testimonial-bg">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                        We’ve been working with Thipaks LLC, and their products and IT support have made a big difference for our business. Their software solutions helped us improve operations, and their team is always ready to fix any technical issues fast. We’re really happy with their service and look forward to working with them more.
                        </p>
                        <div class="pic">
                            <img src="image/facet_light.png" alt="" style="mix-blend-mode: difference;">
                        </div>
                        <h3 class="title">Facet Technology,</h3>
                        <span class="post">Nepal</span>
                    </div>

                    <div class="testimonial">
                        <p class="description">
                        Thipaks LLC has been a great partner for our IT needs. Their products solved many of our business challenges, and their support keeps everything running smoothly. The Thipaks team always provides reliable solutions, and we trust them to help our business succeed.
                        </p>
                        <div class="pic">
                            <img src="image/KYR_light.png" alt="">
                        </div>
                        <h3 class="title">Kirti Yoga Retrat,</h3>
                        <span class="post">USA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 
<script>
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>

<?php include 'footer.php'; ?>