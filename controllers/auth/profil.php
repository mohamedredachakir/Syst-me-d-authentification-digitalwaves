


<?php 
$title = 'profile';

if (!isset($_SESSION['user_id'])) {
    header("Location: /");
    exit();
}
else {
    require './../views/layouts/header.php';
    require './../views/auth/profile.views.php';
    require './../views/layouts/footer.php';
}

?>