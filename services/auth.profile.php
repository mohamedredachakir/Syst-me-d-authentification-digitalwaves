


<?php 

$userid = $_SESSION['user_id'];

$sql = "SELECT first_name,last_name,user_name,email,created_at FROM users WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i" , $userid);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>