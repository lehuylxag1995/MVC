<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/css/font-awesome.min.css" rel="stylesheet">
    <link href="./public/css/prettyPhoto.css" rel="stylesheet">
    <link href="./public/css/price-range.css" rel="stylesheet">
    <link href="./public/css/animate.css" rel="stylesheet">
    <link href="./public/css/main.css" rel="stylesheet">
    <link href="./public/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./public/js/html5shiv.js"></script>
    <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="./public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./public/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    <?php
    require_once "./mvc/views/blocks/header.php";
    require_once "./mvc/views/blocks/slider.php";
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                        require_once "./mvc/views/blocks/left-sidebar.php";
                    ?>
                </div>

                <div class="col-sm-9 padding-right">
                    <?php
                        if( !empty($data['page']) )
                        {
                            require_once "./mvc/views/pages/".$data['page'].".php";
                        }
                        else
                        {
                            require_once "./mvc/views/blocks/right-content.php";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once "./mvc/views/blocks/footer.php";
    ?>

    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.scrollUp.min.js"></script>
    <script src="./public/js/price-range.js"></script>
    <script src="./public/js/jquery.prettyPhoto.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>