<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="javascript/login.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="icon" class="Icon" href="assets\icon1.png" type="image/png">

    <?php
        $cssFiles = [
            'css/base.css',
            'css/sidebarAnimation.css',
            'css/loginAnimation.css'
        ];

        foreach ($cssFiles as $file) {
            $version = filemtime($file);
            echo '<link rel="stylesheet" href="' .$file. '?v=' .$version. '">' . PHP_EOL;
        };
    ?>
</head>