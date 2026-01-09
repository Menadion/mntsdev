<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['Email'];
    $password = $_POST['Password'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "../head.php" ?>
    <body class="m-0 min-vh-100">
        <div class="d-flex min-vh-100">
            <?php include "../fragments/sidebar.php"  ?>

            <div class="flex-grow-1 d-flex flex-column">
                <?php include "../fragments/header.php" ?>
                <?php include "../fragments/table.php" ?>
            </div>
        </div>
    </body>
</html>