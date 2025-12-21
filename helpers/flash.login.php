


<?php 
function setflash($type , $message){
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

function getflash(){
    if(isset($_SESSION['flash'])){
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

?>