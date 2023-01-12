<!doctype html>
<html lang="en">
<head>
    <?php include ("header.php")?>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<?php
    include ("humberger.php");
    include ("headerSection.php");
    include ("HeroSection.php");?>
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<?php include ("shoppingCardSection.php");
    include ("footer.php");
    include ("scrip.php")
?>

</body>
</html>
