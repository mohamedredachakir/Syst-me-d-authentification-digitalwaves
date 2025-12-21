
<?php

session_start();
include_once __DIR__ . '/../config/database.php';

require_once './../helpers/flash.login.php';

$flash = getflash();
if($flash){
    echo "<div class='{$flash['type']}' style='padding:10px; margin:10px 0; border-radius:5px;'>";
    echo $flash['message'];
    echo "</div>";
}
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$uri = trim($uri,'/');




$routes = [
    ''          => 'home.php',
    'home'      => 'home.php',
    'about'     => 'about.php',
    'services'  => 'services.php',
    'contact'   => 'contact.php',
    'login'     => 'auth/login.php',
    'signup'    => 'auth/signup.php',
    'logout'    => 'auth/logout.php',
    'profile'   => 'auth/profil.php',
];

if(array_key_exists($uri,$routes)){
    require __DIR__ . '/../controllers/' . $routes[$uri];
}else{
    require __DIR__ . '/../views/404.php';


};
?>
