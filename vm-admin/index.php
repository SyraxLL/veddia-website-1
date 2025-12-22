<?php
require_once 'includes/auth.php';

if (isLoggedIn()) {
    header('Location: /vm-admin/dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (login($username, $password)) {
        header('Location: /vm-admin/dashboard.php');
        exit;
    } else {
        $error = 'Geçersiz kullanıcı adı veya şifre!';
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi - Veddia Media</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, #0a0f1c 0%, #1a1f35 50%, #0d1424 100%);
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
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .floating-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
            animation: float 20s infinite ease-in-out;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            top: -200px;
            right: -200px;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, #06b6d4, #0891b2);
            bottom: -150px;
            left: -150px;
            animation-delay: -7s;
        }

        .orb-3 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #14b8a6, #10b981);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: -14s;
            opacity: 0.3;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(30px, -30px) scale(1.05);
            }

            50% {
                transform: translate(-20px, 20px) scale(0.95);
            }

            75% {
                transform: translate(-30px, -20px) scale(1.02);
            }
        }

        /* Grid Pattern */
        .grid-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(99, 102, 241, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(99, 102, 241, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            z-index: 1;
        }

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }

        /* Login Box - Glassmorphism */
        .login-box {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 48px 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 255, 255, 0.05),
                inset 0 1px 0 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animated border glow */
        .login-box::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #6366f1, #8b5cf6, #06b6d4, #14b8a6, #6366f1);
            background-size: 400% 400%;
            border-radius: 26px;
            z-index: -1;
            opacity: 0;
            animation: borderGlow 8s ease infinite;
            transition: opacity 0.3s ease;
        }

        .login-box:hover::before {
            opacity: 1;
        }

        @keyframes borderGlow {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        /* Login Header */
        .login-header {
            text-align: center;
            margin-bottom: 36px;
        }

        .login-logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            box-shadow:
                0 10px 40px rgba(99, 102, 241, 0.4),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            position: relative;
            animation: pulse 3s infinite ease-in-out;
        }

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 10px 40px rgba(99, 102, 241, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.1);
            }

            50% {
                box-shadow: 0 15px 60px rgba(99, 102, 241, 0.6), 0 0 0 1px rgba(255, 255, 255, 0.2);
            }
        }

        .login-logo i {
            font-size: 2rem;
            color: white;
        }

        .login-header h1 {
            font-size: 1.75rem;
            font-weight: 800;
            background: linear-gradient(135deg, #e2e8f0 0%, #94a3b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
            letter-spacing: -0.02em;
        }

        .login-header p {
            color: #64748b;
            font-size: 0.95rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-group label {
            display: block;
            color: #94a3b8;
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 0.875rem;
            letter-spacing: 0.02em;
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
            padding: 16px 16px 16px 48px;
            background: rgba(15, 23, 42, 0.6);
            border: 2px solid rgba(100, 116, 139, 0.2);
            border-radius: 12px;
            color: #e2e8f0;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-control::placeholder {
            color: #475569;
        }

        .form-control:focus {
            outline: none;
            border-color: #6366f1;
            background: rgba(15, 23, 42, 0.8);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
        }

        .form-control:focus+i,
        .form-control:focus~i {
            color: #6366f1;
        }

        .input-wrapper:focus-within i {
            color: #6366f1;
        }

        /* Button Styles */
        .btn {
            width: 100%;
            padding: 16px 24px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            font-weight: 700;
            font-family: inherit;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            letter-spacing: 0.02em;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow:
                0 15px 35px rgba(99, 102, 241, 0.4),
                0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:active {
            transform: translateY(-1px);
        }

        .btn i {
            font-size: 1.1rem;
        }

        /* Alert Styles */
        .alert {
            padding: 16px 20px;
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 12px;
            color: #f87171;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: shake 0.5s ease;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20% {
                transform: translateX(-8px);
            }

            40% {
                transform: translateX(8px);
            }

            60% {
                transform: translateX(-4px);
            }

            80% {
                transform: translateX(4px);
            }
        }

        .alert i {
            font-size: 1.2rem;
        }

        /* Decorative Elements */
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: 50%;
            animation: floatShape 15s infinite ease-in-out;
        }

        .shape-1 {
            width: 120px;
            height: 120px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 80px;
            height: 80px;
            top: 70%;
            right: 15%;
            animation-delay: -5s;
        }

        .shape-3 {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes floatShape {

            0%,
            100% {
                transform: rotate(0deg) translate(0, 0);
                opacity: 0.5;
            }

            50% {
                transform: rotate(180deg) translate(20px, 20px);
                opacity: 0.8;
            }
        }

        /* Remember Me Checkbox */
        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #94a3b8;
            cursor: pointer;
            font-size: 0.875rem;
        }

        .remember-label input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #6366f1;
            cursor: pointer;
        }

        .forgot-link {
            color: #6366f1;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #8b5cf6;
        }

        /* Footer Text */
        .login-footer {
            text-align: center;
            margin-top: 28px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .login-footer p {
            color: #475569;
            font-size: 0.8rem;
        }

        .login-footer a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-box {
                padding: 36px 28px;
                border-radius: 20px;
            }

            .login-logo {
                width: 70px;
                height: 70px;
            }

            .login-header h1 {
                font-size: 1.5rem;
            }

            .form-control {
                padding: 14px 14px 14px 44px;
            }

            .btn {
                padding: 14px 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
    </div>
    <div class="grid-pattern"></div>

    <!-- Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h1>Veddia Admin</h1>
                <p>Yönetim paneline giriş yapın</p>
            </div>

            <?php if ($error): ?>
                <div class="alert">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <div class="input-wrapper">
                        <input type="text" name="username" class="form-control" placeholder="Kullanıcı adınızı girin"
                            required>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" class="form-control" placeholder="Şifrenizi girin"
                            required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="remember-row">
                    <label class="remember-label">
                        <input type="checkbox" name="remember">
                        Beni hatırla
                    </label>
                </div>

                <button type="submit" class="btn">
                    <i class="fas fa-arrow-right-to-bracket"></i>
                    Giriş Yap
                </button>
            </form>

            <div class="login-footer">
                <p>© 2024 <a href="#">Veddia Media</a>. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</body>

</html>