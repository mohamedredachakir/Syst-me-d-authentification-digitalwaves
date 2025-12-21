<?php

if (isset($_SESSION['user_id'])) {
    header("Location: /");
    exit();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    require './../services/auth.signup.php';
}

require  './../views/layouts/header.php';
require './../views/auth/signup.views.php';

require  './../views/layouts/footer.php';
?>