<?php
section('loader', function() {
    ob_start();
    ?>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
    <?php
    return ob_get_clean();
});