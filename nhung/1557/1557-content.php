<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1557 mt-4">
    <div class="container container-custom p-30">
        <div class="row">
            <div class="col-md-6">

                <div class="d-flex mb-3">
                    <div class="image-wrap">
                        <a href="#"><img class="img" src="images/1557-self.png" alt=""></a>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Instroduce:<span class="name font-weight-normal">Tiffany
                                Rose</span></h3>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <button type="button" class="btn btn-take">Take course <i class="fa fa-external-link-square"
                        aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Duration:<span class="name font-weight-normal"> 5 weeks
                                long</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Time commitment: <span class="name font-weight-normal"> 4-8
                                hours per week</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Subject: <span class="name font-weight-normal">
                                Business</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-3">
                    <div class="icon">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Language: <span class="name font-weight-normal">
                                English</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-1">
                <div class="d-flex mb-3">
                    <div class="icon">
                        <i class="fa fa-file-video-o" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Video transcript: <span class="name font-weight-normal">
                                English</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                        <i class="fa fa-signal" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Difficulty: <span class="name font-weight-normal">
                                Intermediate</span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <h3 class="Ins font-weight-normal ">Platform: <span class="name font-weight-normal">
                                EdX</span></h3>

                    </div>
                </div>
            </div>

            
        </div>
        <div class="title mt-4">
                <h3>What you'll learn</h3>
            </div>
            <div class="row">
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Introduction to ipsum lorem</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Suspendisse potenti dolor nulla from ipsum placerat dolor ipsum</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Why nulla potenti dolor from amet glavrida ipsum dolor amet. How to amet nulla dolor.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-3">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Nunc from ipsum placerat</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-1">
                <div class="d-flex mb-3">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                        <p>Why nulla potenti glavrida ipsum dolor amet.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Why lorem ipsm to glavrida to ipsum lorem lorem ipsm to glavrida. Nulla glavrida dolor!</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>ISuspendisse potenti dolor nulla</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="d-flex mb-1">
                    <div class="icon">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="ml-3 mt-2 support">
                    <p>Final glavrida amet. Lorem from ipsum placerat dolor ipsum.</p>

                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>