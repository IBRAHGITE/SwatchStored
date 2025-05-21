<?php
    if (!empty($_GET) && $_GET['var'] == 'index') {
        include(dirname(__FILE__) . '/../views/pages/home/index.php');
    }elseif (!empty($_GET) && $_GET['var'] == 'show') {
        include(dirname(__FILE__) . '/../views/pages/home/show.php');
    }