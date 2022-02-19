<?php
global $fauzanredux;
?>
<footer>
<?php if($fauzanredux['footer-switch-button'] == 1): ?>
<style type="text/css">
    #copyright-area{
    background: <?php echo $fauzanredux['footer-background']; ?> none repeat scroll 0 0 ! important;
    color: <?php echo $fauzanredux['footer-font-color']; ?> ;
    }
</style>
<?php endif; ?>


<div id="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="poweredBy">
                    <h1>&copy; <?php echo $fauzanredux['copyright-text']; ?><span> <a href="<?php echo $fauzanredux['developer-url']; ?>"><?php echo $fauzanredux['developer-name'] ?></a></span></h1>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>

</body>
</html>