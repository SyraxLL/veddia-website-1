<?php
/**
 * Admin Panel - Giriş Sayfası
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'includes/auth.php';

// Zaten giriş yapılmışsa dashboard'a yönlendir
if (isLoggedIn()) {
    header('Location: /vm-admin/dashboard.php');
    exit;
}

$error = '';

// Form gönderildi mi kontrol et
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Kullanıcı adı ve şifre gereklidir.';
    } else {
        if (login($username, $password)) {
            header('Location: /vm-admin/dashboard.php');
            exit;
        } else {
            $error = 'Geçersiz kullanıcı adı veya şifre.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi - Veddia Media</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0f172a;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .bg-gradient {
            position: absolute;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(ellipse at 20% 80%, rgba(20, 184, 166, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 20%, rgba(14, 165, 233, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(99, 102, 241, 0.1) 0%, transparent 60%);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.1), rgba(14, 165, 233, 0.1));
            animation: float 20s infinite ease-in-out;
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 50%;
            right: -50px;
            animation-delay: 5s;
        }

        .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: -50px;
            left: 30%;
            animation-delay: 10s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 60%;
            animation-delay: 15s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(180deg);
            }
        }

        /* Grid Pattern */
        .grid-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        /* Login Card */
        .login-card {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 45px 40px;
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 255, 255, 0.05);
        }

        /* Logo */
        .login-logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-logo img {
            height: 50px;
            margin-bottom: 20px;
            filter: brightness(1.1);
        }

        .login-logo h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .login-logo h1 span {
            background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-logo p {
            color: #64748b;
            font-size: 0.9rem;
            margin-top: 8px;
        }

        /* Alert */
        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #f87171;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        .alert-error i {
            font-size: 1.1rem;
        }

        /* Form */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #94a3b8;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 48px;
            background: rgba(15, 23, 42, 0.6);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #e2e8f0;
            font-size: 0.95rem;
            font-family: inherit;
            transition: all 0.3s ease;
            caret-color: #14b8a6;
        }

        .form-control::placeholder {
            color: #475569;
        }

        .form-control:focus {
            outline: none;
            border-color: #14b8a6;
            background: rgba(20, 30, 50, 0.9);
            box-shadow: 0 0 0 4px rgba(20, 184, 166, 0.15), 0 0 20px rgba(20, 184, 166, 0.1);
            color: white;
        }

        .form-control:focus+i,
        .input-wrapper:focus-within i {
            color: #14b8a6;
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #64748b;
            cursor: pointer;
            padding: 5px;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #94a3b8;
        }

        /* Button */
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
            background-size: 200% auto;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-position: right center;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(20, 184, 166, 0.3);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .divider span {
            padding: 0 15px;
            color: #64748b;
            font-size: 0.85rem;
        }

        /* Back Link */
        .back-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #14b8a6;
        }

        /* Footer Text */
        .login-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .login-footer p {
            color: #475569;
            font-size: 0.8rem;
        }

        .login-footer a {
            color: #14b8a6;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-card {
                padding: 35px 25px;
            }

            .login-logo h1 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="bg-gradient"></div>
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="grid-pattern"></div>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo -->
            <div class="login-logo">
                <h1>Admin <span>Panel</span></h1>
                <p>Yönetim paneline hoş geldiniz</p>
            </div>

            <!-- Error Alert -->
            <?php if ($error): ?>
                <div class="alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı</label>
                    <div class="input-wrapper">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Kullanıcı adınızı girin"
                            value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" required>
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Şifre</label>
                    <div class="input-wrapper">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Şifrenizi girin" required>
                        <i class="fas fa-lock"></i>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i>
                    Giriş Yap
                </button>
            </form>

            <div class="divider">
                <span>veya</span>
            </div>

            <a href="../index.php" class="back-link">
                <i class="fas fa-arrow-left"></i>
                Web sitesine dön
            </a>

            <div class="login-footer">
                <p>© <?php echo date('Y'); ?> <a href="../index.php">Veddia Media</a></p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('toggleIcon');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>