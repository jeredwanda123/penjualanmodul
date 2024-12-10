<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .registration-container {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
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

        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            height: 100px;
            box-sizing: border-box;
        }

        button {
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

        button:hover {
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

    <div class="registration-container">
        <h1>Registrasi</h1>

        <!-- Display Error or Success Flash Messages -->
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="error-message"><?= session()->getFlashdata('error'); ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="success-message"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <!-- Registration Form -->
        <form action="<?= base_url('auth/storeRegister'); ?>" method="post">
            <?= csrf_field(); ?>

            <input type="text" name="npm" class="input-field" placeholder="NPM" required value="<?= old('npm'); ?>">

            <input type="number" name="semester" class="input-field" placeholder="Semester" required value="<?= old('semester'); ?>">

            <input type="text" name="nama" class="input-field" placeholder="Nama" required value="<?= old('nama'); ?>">

            <textarea name="alamat" class="input-field" placeholder="Alamat" required><?= old('alamat'); ?></textarea>

            <input type="text" name="telepon" class="input-field" placeholder="Telepon" required value="<?= old('telepon'); ?>">

            <select name="id_prodi" class="input-field" required>
                <option value="1" <?= old('id_prodi') == 1 ? 'selected' : ''; ?>>Teknik Informatika</option>
                <option value="2" <?= old('id_prodi') == 2 ? 'selected' : ''; ?>>Sistem Informasi</option>
            </select>

            <button type="submit">Daftar</button>
        </form>

        <div class="footer-text">
            <p>Already have an account? <a href="<?= base_url('auth/login'); ?>">Login here</a></p>
        </div>
    </div>

</body>

</html>