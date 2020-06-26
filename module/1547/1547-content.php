<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);   
?>
<div class="type-1547">
<div class="container">
    <div class="row">
        <div class=" col-lg-6 col-12 text-left">

            <div class="wrap">
                <h4>Get access to high quality learning!</h4>
                <h3>Join Seven online courses today - master new modern skills quickly & easily.</h3>
                <p>Etiam velit purus, vehicula quis imperdiet dignissim, convallis vitae nisl. Nullam facilisi.
                    Pellentesque non pulvinar justo. Nullam eget neque ut tellus ornare ullamcorper ulla ambco mattis
                    for nulla glavrida egesed!</p>
            </div>
            <div class="icon">
                <i class="fa fa-info-circle" aria-hidden="true"></i><span>Learn more about our project</span>
            </div>

        </div>
        <!-- <div class="col-6 col-4 col-3 col-md-6 image-rage">

            <img class="image-three" src="images/Hinh3.jpg" alt="">
            <img class="image-one" src="images/hinh.jpg" alt="">
            <img class="image-two" src="images/hinh2.jpg" alt="">
        </div> -->

        <div class="col-lg-6 col-12 image-wrap text-center">
            <img class="image-main" src="images/Hinh3.jpg" alt="">
            <img class="image-one" src="images/hinh.jpg" alt="">
            <img class="image-two" src="images/hinh2.jpg" alt="">
        </div>

    </div>
</div>
</div>
