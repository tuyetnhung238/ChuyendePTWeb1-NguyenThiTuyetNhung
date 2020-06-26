<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-19 ">
    <div class="container pt-4">
        <div class="title text-center font-weight-bold">
            <div class="text-opacity">
                <h1 class="mb-0">Blog</h1>
                <p class="mb-0">It's interesting</p>
                <h2 class="font-weight-bold ml-2 mb-0">Recent blog post</h2>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="images/32-img1.png" alt="...">
                    <div class="card-body m-3">
                        <h5 class="card-title">China Tea</h5>
                        <h2 class="card-title-2 font-weight-bold">3 ways how to test nutaral indian tea</h2>
                        <p class="card-text">Mango and Peach White Iced Tea Interger maximus accumsan nunc,
                            sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id a...
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between support ">
                            <p class="date">February 21, 2018</p>

                            <div>
                                <span><i class="fa fa-commenting" aria-hidden="true"></i>4</span>
                                <span><i class="fa fa-eye m-1" aria-hidden="true"></i>813</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="images/32-img2.png" alt="...">
                    <div class="card-body m-3">
                        <h5 class="card-title">Ceremony / China Tea</h5>
                        <h2 class="card-title-2 font-weight-bold">Results of international tea conferencee'18</h2>
                        <p class="card-text">Mango and Peach White Iced Tea Interger maximus accumsan nunc,
                            sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id a...
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between support ">
                            <p class="date">February 21, 2018</p>

                            <div>
                                <span><i class="fa fa-commenting" aria-hidden="true"></i>4</span>
                                <span><i class="fa fa-eye m-1" aria-hidden="true"></i>813</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="images/32-img3.png" alt="...">
                    <div class="card-body m-3">
                        <h5 class="card-title">Black / Ceremony</h5>
                        <h2 class="card-title-2 font-weight-bold">The history of leaf tea in Indian</h2>
                        <p class="card-text">Mango and Peach White Iced Tea Interger maximus accumsan nunc,
                            sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id a...
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between support ">
                            <p class="date">February 21, 2018</p>

                            <div>
                                <span><i class="fa fa-commenting" aria-hidden="true"></i>4</span>
                                <span><i class="fa fa-eye m-1" aria-hidden="true"></i>813</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>