<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
        }

        .input-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .success-message {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-text a {
            color: #007bff;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Login</h1>

        <!-- Display Error or Success Flash Messages -->
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="error-message"><?= session()->getFlashdata('error'); ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="success-message"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= base_url('auth/authenticate'); ?>" method="post">
            <?= csrf_field(); ?>

            <input type="text" name="username" class="input-field" placeholder="Username" value="<?= old('username'); ?>" required>

            <?php if (isset($validation) && $validation->getError('username')): ?>
                <div class="error-message"><?= $validation->getError('username'); ?></div>
            <?php endif; ?>

            <input type="password" name="password" class="input-field" placeholder="Password" required>

            <?php if (isset($validation) && $validation->getError('password')): ?>
                <div class="error-message"><?= $validation->getError('password'); ?></div>
            <?php endif; ?>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="footer-text">
            <p>Don't have an account? <a href="<?= base_url('auth/register'); ?>">Register here</a></p>
        </div>
    </div>

</body>

</html>