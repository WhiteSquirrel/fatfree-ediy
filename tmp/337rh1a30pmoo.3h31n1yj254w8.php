<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo $ENCODING; ?>"/>
    <title>ediY</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=" @meta-descrition "/>
    <meta name="keywords" content=" @meta-content "/>
    <!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.jcarousel-core.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/skel-layers.min.js"></script>
    <script src="/js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="/css/skel.css"/>
        <link rel="stylesheet" href="/css/style.css"/>
        <link rel="stylesheet" href="/css/style-desktop.css"/>
        <link rel="stylesheet" href="/css/style-wide.css"/>
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css"/><![endif]-->
</head>
<body class="left-sidebar">

    <?php echo $this->render('toolbar.htm',$this->mime,array('data'=>$toolbar)+get_defined_vars()); ?>

    <div id="wrapper">
        <div id="content">
            <?php echo $this->render($content['template'],$this->mime,get_defined_vars()); ?>
        </div>
        <?php echo $this->render('sidebar.htm',$this->mime,array('data'=>$sidebar)+get_defined_vars()); ?>
    </div>

</body>
</html>