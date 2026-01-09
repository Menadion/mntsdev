<?php 
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/mntsdev/');
    define('ROOT_URL', '/mntsdev/');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?= ROOT_URL ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= ROOT_URL ?>javascript/login.js"></script>

    <link rel="stylesheet" href="<?= ROOT_URL ?>bootstrap/css/bootstrap.min.css" />
    <link rel="icon" class="Icon" href="<?= ROOT_URL ?>assets\icon1.png" type="image/png">

    <?php
        $cssFiles = [
            'css/base.css',
            'css/sidebarAnimation.css',
            'css/loginAnimation.css'
        ];

        foreach ($cssFiles as $file) {
            $serverPath = ROOT_PATH . $file;
            $version = file_exists($serverPath) ? filemtime($serverPath) : time();
            echo '<link rel="stylesheet" href="' . ROOT_URL . $file . '?v=' . $version . '">' . PHP_EOL;
        };
    ?>
</head>