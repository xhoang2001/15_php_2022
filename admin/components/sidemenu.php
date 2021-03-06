<?php
$actual_link = "$_SERVER[REQUEST_URI]";
if ($actual_link === "/15_php_2022/admin/" || $actual_link === "/15_php_2022/admin/index.php") {
    if (str_contains($actual_link, "product")) {
        $url_product = "../product/index.php";
        $url_add_product = "../product/add_product.php";
    } else {
        $url_product = "product/index.php";
        $url_add_product = "product/add_product.php";
    }

    if (str_contains($actual_link, "manufacturer")) {
        $url_manufacturer = "../manufacturer/index.php";
        $url_add_manufacturer = "../manufacturer/add_manufacturer.php";
    } else {
        $url_manufacturer = "manufacturer/index.php";
        $url_add_manufacturer = "manufacturer/add_manufacturer.php";
    }

    if (str_contains($actual_link, "employee")) {
        $url_employee = "../employee/index.php";
        $url_add_employee = "../employee/add_employee.php";
    } else {
        $url_employee = "employee/index.php";
        $url_add_employee = "employee/add_employee.php";
    }

    if (str_contains($actual_link, "customer")) {
        $url_customer = "../customer/index.php";
        $url_add_customer = "../customer/add_customer.php";
    } else {
        $url_customer = "customer/index.php";
        $url_add_customer = "customer/add_customer.php";
    }
    if (str_contains($actual_link, 'order')) {
        $url_order = "../order/index.php";
    } else {
        $url_order = "order/index.php";
    }

    $src_assets = "";
    $src_logout = "";
} else {
    if (str_contains($actual_link, "product")) {
        $url_product = "index.php";
        $url_add_product = "add_product.php";
    } else {
        $url_product = "../product/index.php";
        $url_add_product = "../product/add_product.php";
    }

    if (str_contains($actual_link, "manufacturer")) {
        $url_manufacturer = "index.php";
        $url_add_manufacturer = "add_manufacturer.php";
    } else {
        $url_manufacturer = "../manufacturer/index.php";
        $url_add_manufacturer = "../manufacturer/add_manufacturer.php";
    }

    if (str_contains($actual_link, "employee")) {
        $url_employee = "index.php";
        $url_add_employee = "add_employee.php";
    } else {
        $url_employee = "../employee/index.php";
        $url_add_employee = "../employee/add_employee.php";
    }

    if (str_contains($actual_link, "customer")) {
        $url_customer = "index.php";
        $url_add_customer = "add_customer.php";
    } else {
        $url_customer = "../customer/index.php";
        $url_add_customer = "../customer/add_customer.php";
    }
    if (str_contains($actual_link, "order")) {
        $url_order = "index.php";
    } else {
        $url_order = "../order/index.php";
    }


    $src_assets = "../";
    $src_logout = "../";
}
?>
<ul class="metismenu side-nav">
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span>Qu???n l?? s???n ph???m </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_product; ?>">T???t c??? s???n ph???m</a>
            </li>
            <li>
                <a href="<?php echo $url_add_product; ?>">Th??m s???n ph???m m???i</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Qu???n l?? nh?? s???n xu???t </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_manufacturer ?>">T???t c??? nh?? s???n xu???t</a>
            </li>
            <li>
                <a href="<?php echo $url_add_manufacturer ?>">Th??m nh?? s???n xu???t m???i</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Qu???n l?? nh??n vi??n </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_employee ?>">Danh s??ch nh??n vi??n</a>
            </li>
            <li>
                <a href="<?php echo $url_add_employee ?>">Th??m m???i nh??n vi??n</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Qu???n l?? kh??ch h??ng </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_customer ?>">Danh s??ch kh??ch h??ng</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Qu???n l?? ????n h??ng </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_order ?>">Danh s??ch ????n h??ng</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="<?php echo $src_logout ?>logout.php" class="side-nav-link">
            <span>????ng xu???t</span>
        </a>
    </li>
</ul>