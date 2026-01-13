<div class="sidebar d-flex flex-column align-items-center pt-3">
    <a href="<?= ROOT_URL ?>content/pages/profilePage.php" class="sidebar-link <?= $currentPage == 'profilePage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <img src="<?= ROOT_URL ?>/assets/profilepic.png" class="sb-prof-icon" alt="profile">
        </div>
        <div class="sidebar-label text-light mt-1">Profile</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/homePage.php" class="sidebar-link <?= $currentPage == 'homePage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <div class="sb-icon-cont">
                <img src="<?= ROOT_URL ?>/assets/whiteHome.svg" class="sb-icon sb-white">
                <img src="<?= ROOT_URL ?>/assets/darkHome.png" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">Home</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/POSpage.php" class="sidebar-link text-decoration-none mb-1 text-center">
        <div class="sidebar-icon rounded-circle bg-secondary mx-auto"></div>
        <div class="sidebar-label text-light mt-1">POS</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/transactionPage.php" class="sidebar-link text-decoration-none mb-1 text-center">
        <div class="sidebar-icon rounded-circle bg-secondary mx-auto"></div>
        <div class="sidebar-label text-light mt-1">Transactions</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/inventoryPage.php" class="sidebar-link text-decoration-none mb-1 text-center">
        <div class="sidebar-icon rounded-circle bg-secondary mx-auto"></div>
        <div class="sidebar-label text-light mt-1">Inventory</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/employeePage.php" class="sidebar-link text-decoration-none mb-1 text-center">
        <div class="sidebar-icon rounded-circle bg-secondary mx-auto"></div>
        <div class="sidebar-label text-light mt-1">Employee</div>
    </a>
</div>