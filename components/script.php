<?php
section('script', function() {
    ob_start();
    ?>
    <!-- Plugins -->
    <script src="<?= KLASSY_ASSETS_WP ?>js/owl-carousel.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/accordions.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/datepicker.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/scrollreveal.min.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/waypoints.min.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/jquery.counterup.min.js"></script>
    <script src="<?= KLASSY_ASSETS_WP ?>js/imgfix.min.js"></script> 
    <script src="<?= KLASSY_ASSETS_WP ?>js/slick.js"></script> 
    <script src="<?= KLASSY_ASSETS_WP ?>js/lightbox.js"></script> 
    <script src="<?= KLASSY_ASSETS_WP ?>js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="<?= KLASSY_ASSETS_WP ?>js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <?php
    return ob_get_clean();
});