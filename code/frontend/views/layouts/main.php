<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widgets\Topbar;
use frontend\widgets\HeaderSection;
use frontend\widgets\HeaderSticky;
use frontend\widgets\MobileHeader;
use frontend\widgets\OffCanvas;
use frontend\widgets\Footer;
use frontend\widgets\Modal;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <!-- Topbar Section Start -->
    <!--  <?= Topbar::widget(); ?>-->
    <!-- Topbar Section End -->
    
    <!-- Header Section Start -->
    <?= HeaderSection::widget();?>
    <!-- Header Section End -->
    
    <!-- Header Sticky Section Start -->
    <?= HeaderSticky::widget();?>
    <!-- Header Sticky Section End -->
    
    <!-- Mobile Header Section Start -->
    <?= MobileHeader::widget();?>
    <!-- Mobile Header Section End -->
    <?= OffCanvas::widget(); ?>
    <!-- OffCanvas Search Start -->
    <input type="button" value="" disabled="disabled" />
    <!-- OffCanvas Search End -->
    <div class="offcanvas-overlay"></div>

    <?= $content; ?>

    <!-- Footer start-->
    <?= Footer::widget();?>
    <!-- Footer end-->
    <!-- Modal -->
    <?= Modal::widget(); ?>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/mo.min.js"></script>
<script src="assets/js/plugins/jquery.instagramFeed.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
<script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="assets/js/plugins/photoswipe.min.js"></script>
<script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/ResizeSensor.js"></script>
<script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
<script src="assets/js/plugins/product360.js"></script>
<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
<script src="assets/js/plugins/scrollax.min.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
