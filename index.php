<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WhatsApp Version Information</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="56">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top"
                style="color: #6a6a6a;">whatsapp-desktop-version</a><button data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" class="navbar-toggler float-end" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="https://www.whatsapp.com/download">Download</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://github.com/gvoze32/whatsapp-desktop-version">Github</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead"
        style="background: linear-gradient(to left, #2a6c5c 0%, rgb(34,34,34) 54%, #222222 83%, #222222 100%);">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5">WhatsApp Desktop&nbsp;</h1><strong>Latest Version :&nbsp;

                            <?php
                    $content = file_get_contents('https://web.whatsapp.com/desktop/mac/releases?platform=darwin&arch=x64');
                    $t = preg_match('/name":"(.*?)\",/s', $content, $version);
                    print_r($version[1]);
                    ?>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device"
                                style="background-image:url('assets/img/iphone_6_plus_white_port.png');">
                                <div class="screen"><img class="img-fluid"
                                        src="assets/img/a7c37ad5-8693-4633-a651-7720759fec11.jpg"></div>
                                <div class="button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="iphone-mockup"></div>
                </div>
            </div>
        </div>
    </header>
    <footer style="background: rgb(34, 34, 34);">
        <div class="container">
            <p style="color: rgba(255, 255, 255, 0.3);">© whatsapp-desktop-version 2021. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#">Made with&nbsp;<strong>♥&nbsp;</strong>by gvoze32</a></li>
                <li class="list-inline-item"></li>
            </ul>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>