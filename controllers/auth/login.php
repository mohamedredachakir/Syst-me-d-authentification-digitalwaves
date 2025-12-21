<?php


if (isset($_SESSION['user_id'])) {
    header("Location: /");
    exit();
}

?>

<?php 
require './../views/auth/login.views.php';
?>
