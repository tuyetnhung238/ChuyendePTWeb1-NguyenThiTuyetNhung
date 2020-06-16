<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1519 mt-4">
    <div class="container container-custom p-30">
        <div class="row">
            <div class="col-md-3">
                <a href="#"><img class="logo" src="images/1519-logo.png"></a>
                <div class="text">
                    <p>Get tomorrow’s skills today​!</p>
                    <p>Quickly, easily & 100% free.</p>
                </div>
                <div class="icon-logo">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-md-3">
                <a href="#" class="d-block mb-3">- About</a>
                <a href="#" class="d-block mb-3">– Donate</a>
                <a href="#" class="d-block mb-3">– Become an instructor</a>
                <a href="#" class="d-block mb-3">– Contact</a>
                <a href="#" class="d-block mb-3">– Blog</a>
                <a href="#" class="d-block mb-3">– Users support</a>
            </div>
            <div class="col-md-3 text-">
                <div class="d-flex mb-3">
                    <div class="mt-2">
                        <i class="fa fa-life-ring icon" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 support">
                        <h3 class="mb-0 font-weight-normal">+001 987 65 43</h3>
                        <p class="mb-0 font-weight-normal">24/7 Users Support</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="mt-2">
                        <i class="fa fa-handshake-o icon" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 support">
                        <h3 class="mb-0 font-weight-normal">+001 234 56 78</h3>
                        <p class="mb-0 font-weight-normal">Business & Partnership</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="mt-2">
                        <i class="fa fa-envelope icon" aria-hidden="true"></i>
                    </div>

                    <div class="ml-4 gmail">
                        <h3 class="mb-0 font-weight-normal">hello@dream-theme.com</h3>
                        <p class="mb-0 font-weight-normal">Questions? Drop us a line!</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="mt-2 mr-2">
                        <i class="fa fa-map-marker icon-2" aria-hidden="true"></i>
                    </div>

                    <div class="ml-4 address">
                        <h3 class="mb-0 font-weight-normal">121 Rock Sreet, 21 Avenue, New York, NY 92103-9000</h3>
                        <p class="mb-0 font-weight-normal">Our Location</p>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="course">

                    <a href="#"> How to imperdiet dignissim convallis vitae nisl </a>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>

                <div class="course">

                    <a href="#"> Why lorem amet ipsum glavrida </a>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
                <div class="course">

                    <a href="#"> Ullamcorper sed a metus non pulvinar justo </a>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>

            </div>

        </div>
    </div>
</div>