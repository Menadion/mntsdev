<!DOCTYPE html>
<html lang="en">
    <?php include "../head.php" ?>
    <body class="m-0 vh-100 overflow-hidden hp-body">
        <div class="d-flex h-100">
            <?php
                $currentPage = "homePage.php"; 
                include "../fragments/sidebar.php"  
                ?>
            <div class="flex-grow-1 d-flex flex-column">
                <?php
                    $icon = 1;
                    $pageHeader = 'HOME';
                    include "../fragments/header.php" 
                ?>

                <div class="page-strip px-4 py-3 text-white fw-semibold">
                    WELCOME, ADMIN
                </div>

                <div>
                    <?php include "../fragments/pageSummary.php" ?>
                </div>

                <div class="flex-grow-1 overflow-auto p-4">
                    <?php include "../fragments/table.php" ?>
                </div>
            </div>
        </div>
    </body>
</html>