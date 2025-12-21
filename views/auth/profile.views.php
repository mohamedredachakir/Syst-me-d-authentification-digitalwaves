<?php  require './../services/auth.profile.php';?>

<body>

<h1>profile</h1>

<p><strong>name:</strong>
   <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?>
</p>

<p><strong>email :</strong>
   <?= htmlspecialchars($user['email']) ?>
</p>

<p><strong>date creation:</strong>
   <?= htmlspecialchars($user['created_at']) ?>
</p>

</body>
</html>
