<?php
section('meta', function() {
    extract(View::getGlobalVariable());

    $request_uri = urlencode(strip_tags(urldecode($_SERVER['REQUEST_URI'])));
    ob_start();
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0"/>
    <meta http-equiv="Expires" content="Sat, 26 Jul 1997 05:00:00 GMT"/>
    <?php echo $metadata;?>
    <title><?= $page_title??'?' ?></title>

    <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
        <meta name="description" content="<?php echo substr($notes, 0, 152) . '...'; ?>">
        <meta name="keywords" content="<?php echo $subject; ?>">
    <?php else: ?>
        <meta name="description" content="<?php echo $page_title; ?>">
        <meta name="keywords" content="<?php echo $sysconf['library_subname']; ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="generator" content="<?php echo SENAYAN_VERSION ?>">
    <meta name="theme-color" content="#000">

    <meta property="og:locale" content="<?php echo str_replace('-', '_', $sysconf['default_lang']); ?>"/>
    <meta property="og:type" content="book"/>
    <meta property="og:title" content="<?php echo $page_title; ?>"/>
    <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
        <meta property="og:description" content="<?php echo substr($notes, 0, 152) . '...'; ?>"/>
    <?php else: ?>
        <meta property="og:description" content="<?php echo $sysconf['library_subname']; ?>"/>
    <?php endif; ?>
    <meta property="og:url" content="//<?php echo $_SERVER["SERVER_NAME"] . $request_uri; ?>"/>
    <meta property="og:site_name" content="<?php echo $sysconf['library_name']; ?>"/>
    <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
        <meta property="og:image" content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $image_src ?>"/>
    <?php else: ?>
        <meta property="og:image"
              content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $sysconf['template']['dir']; ?>/default/img/logo.png"/>
    <?php endif; ?>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="//<?php echo $_SERVER["SERVER_NAME"] . $request_uri; ?>"/>
    <meta name="twitter:title" content="<?php echo $page_title; ?>"/>
    <?php if (isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
        <meta property="twitter:image" content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $image_src ?>"/>
    <?php else: ?>
        <meta property="twitter:image"
              content="//<?php echo $_SERVER["SERVER_NAME"] . SWB . $sysconf['template']['dir']; ?>/default/img/logo.png"/>
    <?php endif; ?>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- // load bootstrap style -->
    <link rel="stylesheet" href="<?php echo ('/template/default/assets/css/bootstrap.min.css'); ?>">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?php echo ('/template/default/assets/css/tailwind.min.css'); ?>">
    <!-- // font awesome -->
    <link rel="stylesheet" href="<?php echo ('/template/default/assets/plugin/font-awesome/css/fontawesome-all.min.css'); ?>">
    <!-- CKEditor5 CSS -->
    <link rel="stylesheet" href="<?= JWB; ?>ckeditor5/ckeditor5.css">
    <!-- SLiMS CSS -->
    <link rel="stylesheet" href="<?= JWB; ?>colorbox/colorbox.css">
    <link rel="stylesheet" href="<?= JWB; ?>ion.rangeSlider/css/ion.rangeSlider.min.css">
    <!-- // Flag css -->
    <link rel="stylesheet" href="<?php echo ('/template/default/assets/css/flag-icon.min.css'); ?>">
    <!-- // my custom style -->
    <link rel="stylesheet" href="<?php echo ('/template/default/assets/css/style.css?v=' . date('Ymd-his')); ?>">
    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?= KLASSY_ASSETS_WP ?>css/font-awesome.css">

    <link rel="stylesheet" href="<?= KLASSY_ASSETS_WP ?>css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="<?= KLASSY_ASSETS_WP ?>css/owl-carousel.css">

    <link rel="stylesheet" href="<?= KLASSY_ASSETS_WP ?>css/lightbox.css">

    <?php
    $icon = SWB . 'webicon.ico';
    if (isset($sysconf['webicon']) && !empty($sysconf['webicon']) && $imagesDisk->isExists($path = 'default/' . $sysconf['webicon']))
    {
        $icon = SWB . 'lib/minigalnano/createthumb.php?filename=images/' . $path . '&width=130';
    }
    ?>
    <link rel="shortcut icon" href="<?= $icon ?>" type="image/x-icon"/>

    <!-- // load vue js -->
    <script src="<?php echo ('/template/default/assets/js/vue.min.js'); ?>"></script>
    <!-- // load jquery library -->
    <script src="<?php echo ('/template/default/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo ('/template/default/assets/js/masonry.pkgd.min.js'); ?>"></script>
    <!-- // load bootstrap javascript -->
    <script src="<?= KLASSY_ASSETS_WP ?>js/popper.js"></script>
    <script src="<?php echo ('/template/default/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- // load vegas javascript -->
    <script src="<?php echo JWB; ?>toastr/toastr.min.js"></script>
    <!-- // load SLiMS javascript -->
    <script src="<?php echo JWB; ?>colorbox/jquery.colorbox-min.js"></script>
    <script src="<?php echo JWB . v('gui.js'); ?>"></script>
    <script src="<?php echo JWB; ?>fancywebsocket.js"></script>
    <script src="<?php echo JWB; ?>ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= KLASSY_ASSETS_WP . 'css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo JWB; ?>toastr/toastr.min.css?<?php echo date('this') ?>" rel="stylesheet" type="text/css"/>

    <!-- Favicons -->
    <meta name="theme-color" content="#563d7c">


    <!-- Custom JS -->

    <!-- Bootstrap -->

    <!-- Custom styles for this template -->
    <?php
    if (isset($js)):
        echo $js;
    endif;
    ?>
<?php
return ob_get_clean();
});
