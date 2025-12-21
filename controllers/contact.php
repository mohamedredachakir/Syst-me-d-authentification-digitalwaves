

<?php 

$title = 'contact';

require  __DIR__ . '/../views/layouts/header.php';

$name = $email = $message = '';

$errors = [];
$success = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    if(empty($name)){
        $errors['name'] = 'enter votre nom';
    }
    if(empty($email)){
        $errors['email'] = 'enter votre email';
    }
    if(empty($message)){
        $errors['message'] = 'enter votre message';
    }
    if(empty($errors)){
        require './../services/auth.contact.php';
        $to = "chakirm082@gmail.com";
        $sub = "message contact";
        $body = "
        nom : $name
        email : $email
        message : $message;
        ";
        $headers = "from: $email\r\n";
        if(mail($to,$sub,$body,$headers)){
        $success = 'merci pour votre message';
        $name = $message = $email = '';
        }
        else{
            $errors['send']='erreurs d`envoi';
        }
    }
}

require __DIR__ .'/../views/contact.views.php';

require __DIR__ . '/../views/layouts/footer.php';

?>