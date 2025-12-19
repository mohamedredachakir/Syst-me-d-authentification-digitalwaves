

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Digital Waves</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1f2937, #3b82f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .signup-card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        h2 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        p {
            text-align: center;
            color: #6b7280;
            margin-bottom: 1.5rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }

        .btn-primary {
            width: 100%;
            background-color: #3b82f6;
            color: white;
            font-weight: 600;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background-color: #2563eb;
        }

        .text-center {
            text-align: center;
        }

        .text-link {
            color: #3b82f6;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .error-message {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .form-footer {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 1rem;
            color: #6b7280;
        }
    </style>
</head>
<body>

<div class="signup-card">
    <h2>Digital Waves</h2>
    <p>Create your account</p>

    <?php if(isset($_SESSION['error'])): ?>
        <div class="error-message">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

 <form action="/auth/register_process.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="text" name="user_name" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>

    <button type="submit" class="btn-primary">Sign Up</button>
</form>


    <div class="form-footer">
        Already have an account? <a href="/auth/login.php" class="text-link">Login</a>
    </div>
</div>

</body>
</html>
