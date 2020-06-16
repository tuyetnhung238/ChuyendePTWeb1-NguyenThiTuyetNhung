<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);   
?>
<div class="type-1552 mt-4">
    <div class="container container-custom p-30">
        <div class="title ">
            <h4>Recent posts</h4>
        </div>

        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8 text-left ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#">Ornare facilisi – non pulvinar justo dolor amet ipsum</a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8  ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#"> How to imperdiet dignissim convallis vitae nisl </a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8  ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#"> Why lorem amet ipsum glavrida </a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8 p-10 ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#"> Ullamcorper sed a metus non pulvinar justo </a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8 p-10 ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#"> Nulla facilisi non pulvinar justo dolor  </a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 image-wrap text-lg-right ">
                <img class="image-one" src="images/1.jpg" alt="">
            </div>


            <div class="col-md-8 p-1010 ">
                <div class="text">
                    <h3 class="mb-0 font-weight-normal">
                        <a href="#">Pellentesque lorem – amet nulla non pulvinar justo</a>
                    </h3>
                    <p class="date font-weight-normal"> 2nd April 2020 </p>
                </div>
            </div>
        </div>




    </div>
</div>