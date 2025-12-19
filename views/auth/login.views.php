
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Digital Waves</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN for fast styling -->
    <script src="https://cdn.tailwindcss.com"></script>
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

    .login-card {
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
        color: #6b7280; /* gray-500 */
        margin-bottom: 1.5rem;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px 16px;
        margin-bottom: 1rem;
        border: 1px solid #d1d5db; /* gray-300 */
        border-radius: 10px;
        outline: none;
        font-size: 1rem;
        box-sizing: border-box;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #3b82f6; /* blue-500 */
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
    }

    .btn-primary {
        width: 100%;
        background-color: #3b82f6; /* blue-500 */
        color: white;
        font-weight: 600;
        padding: 12px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-primary:hover {
        background-color: #2563eb; /* blue-600 */
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
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 0.875rem;
        color: #6b7280;
    }

    .form-footer input[type="checkbox"] {
        margin-right: 5px;
    }
</style>

</head>
<body class="bg-digital min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Digital Waves</h2>
        <p class="text-center text-gray-500 mb-6">Login to your account</p>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="/auth/login_process.php" method="POST" class="space-y-5">
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="input-style" placeholder="you@example.com" required>
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" class="input-style" placeholder="********" required>
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2 text-gray-600">
                    <input type="checkbox" name="remember" class="h-4 w-4">
                    <span>Remember Me</span>
                </label>
                <a href="/auth/forgot.php" class="text-blue-600 hover:underline text-sm">Forgot Password?</a>
            </div>

            <button type="submit" class="btn-primary mt-4">Login</button>
        </form>

        <p class="text-center text-gray-500 mt-6">
            Don't have an account? 
            <a href="/auth/register.php" class="text-blue-600 hover:underline">Sign Up</a>
        </p>
    </div>

</body>
</html>
