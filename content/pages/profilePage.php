<!DOCTYPE html>
<html lang="en">
    <?php include "../head.php" ?>
    <body class="m-0 vh-100 overflow-hidden hp-body">
        <div class="d-flex h-100">
            <?php include "../fragments/sidebar.php"  ?>
            <div class="flex-grow-1 d-flex flex-column">
                <?php
                    $pageHeader = 'PROFILE';
                    include "../fragments/header.php" 
                ?>

                <div class="page-strip px-4 py-3 text-white fw-semibold">
                    WELCOME, ADMIN
                </div>
            </div>
        </div>
    </body>
</html>