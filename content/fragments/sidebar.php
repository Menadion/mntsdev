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
                <img src="<?= ROOT_URL ?>/assets/darkHome.svg" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">Home</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/POSPage.php" class="sidebar-link <?= $currentPage == 'POSPage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <div class="sb-icon-cont">
                <img src="<?= ROOT_URL ?>/assets/whitePOS.svg" class="sb-icon sb-white">
                <img src="<?= ROOT_URL ?>/assets/darkPOS.svg" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">POS</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/inventoryPage.php" class="sidebar-link <?= $currentPage == 'inventoryPage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <div class="sb-icon-cont">
                <img src="<?= ROOT_URL ?>/assets/whiteInv.svg" class="sb-icon sb-white">
                <img src="<?= ROOT_URL ?>/assets/darkInv.svg" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">Inventory</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/transactionPage.php" class="sidebar-link <?= $currentPage == 'transactionPage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <div class="sb-icon-cont">
                <img src="<?= ROOT_URL ?>/assets/whiteTrans.svg" class="sb-icon sb-white">
                <img src="<?= ROOT_URL ?>/assets/darkTrans.svg" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">Transactions</div>
    </a>

    <a href="<?= ROOT_URL ?>content/pages/employeePage.php" class="sidebar-link <?= $currentPage == 'employeePage.php' ? 'active' : '' ?> text-decoration-none mb-1 text-center">
        <div class="sb-btn">
            <div class="sb-icon-cont">
                <img src="<?= ROOT_URL ?>/assets/whiteEmp.svg" class="sb-icon sb-white">
                <img src="<?= ROOT_URL ?>/assets/darkEmp.svg" class="sb-icon sb-dark">
            </div>
        </div>
        <div class="sidebar-label text-light mt-1">Employee</div>
    </a>
</div>