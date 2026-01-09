<?php 
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/mntsdev/');
    define('ROOT_URL', '/mntsdev/');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link rel="icon" class="Icon" href="<?= ROOT_URL ?>assets\icon1.png" type="image/png">

    <!-- Absolute file path inside array -->
    <?php
        $libs = [
            'libs/bootstrap/js/bootstrap.bundle.min.js',
            'libs/jquery/jquery-3.7.1.min.js'
        ];

        $styles = [
            'css/base.css',
            'css/sidebarAnimation.css',
            'css/loginAnimation.css',
            'libs/bootstrap/css/bootstrap.min.css'
        ];

        function loadFiles(array $files, string $type) {
            foreach ($files as $file) {
                $serverPath = ROOT_PATH . $file;
                $version = file_exists($serverPath) ? filemtime($serverPath) : time();

                if ($type == 'css') {
                    echo '<link rel="stylesheet" href="' . ROOT_URL . $file . '?v=' . $version . '">';
                }

                if ($type == 'lib') {
                    echo '<script src="' . ROOT_URL . $file . '"></script>';
                }
            }
        }

        loadFiles($libs, 'lib');
        loadFiles($styles, 'css');
    ?>
</head>