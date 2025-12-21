<?php


if (isset($_SESSION['user_id'])) {
    header("Location: /");
    exit();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    require './../services/auth.login.php';
}

require  './../views/layouts/header.php';
require './../views/auth/login.views.php';
require './../views/layouts/footer.php';
?>
