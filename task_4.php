<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">

                            <?php
                            
                                $progressBar = [
                                    ['classTitle'=>'d-flex mt-2', 'title'=>'My Tasks', 'progressTitle'=>'130 / 500', 'classesProgress'=>'progress-bar bg-fusion-400','style'=>'65' ],
                                    ['classTitle'=>'d-flex', 'title'=>'Transfered','progressTitle'=>'440 TB','classesProgress'=>'progress-bar bg-success-500','style'=>'34'],
                                    ['classTitle'=>'d-flex', 'title'=>'Bugs Squashed','progressTitle'=>'77%','classesProgress'=>'progress-bar bg-info-400','style'=>'77'],
                                    ['classTitle'=>'d-flex', 'title'=>'User Testing','progressTitle'=>'7 days','classesProgress'=>'progress-bar bg-primary-300','style'=>'84'],
                                ];
                                $result = [];

                                foreach($progressBar as $item) {
                                    $result = my_progressBar($item);
                                };

                                function my_progressBar($item) {
                                    $key_1 = $item['classTitle'];
                                    $key_2 = $item['title'];
                                    $key_3 = $item['progressTitle'];
                                    $key_4 = $item['classesProgress'];
                                    $key_5 = $item['style'];

                                    echo '<div class="';
                                    echo $key_1;
                                    echo '">';
                                    echo $key_2;
                                    echo '<span class="d-inline-block ml-auto">';
                                    echo $key_3;
                                    echo '</span></div>';
                                    echo '<div class="progress progress-sm mb-3">';
                                    echo '<div class="';
                                    echo  $key_4;
                                    echo '"role="progressbar" style="width: ';
                                    echo $key_5;
                                    echo '%;" aria-valuenow="';
                                    echo $key_5;
                                    echo '" aria-valuemin="0" aria-valuemax="100"></div>';
                                    echo '</div>';
                                }

                            ?>

                            <!-- <div class="d-flex mt-2">
                                My Tasks
                                <span class="d-inline-block ml-auto">130 / 500</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-fusion-400" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Transfered
                                <span class="d-inline-block ml-auto">440 TB</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Bugs Squashed
                                <span class="d-inline-block ml-auto">77%</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                User Testing
                                <span class="d-inline-block ml-auto">7 days</span>
                            </div>
                            <div class="progress progress-sm mb-g">
                                <div class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
