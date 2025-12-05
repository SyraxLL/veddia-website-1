<?php
require_once 'includes/config.php';
$pageTitle = 'İletişim';

$success = '';
$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Lütfen tüm zorunlu alanları doldurun.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir e-posta adresi girin.';
    } else {
        // Form successfully validated
        $success = 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.';
        // Clear form
        $name = $email = $subject = $message = '';
    }
}

include 'includes/header.php';
?>

<main>
    <section class="hero" style="min-height: 400px;">
        <div class="container">
            <div class="hero-content">
                <h1>İletişim</h1>
                <p>Bizimle iletişime geçin</p>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="form-container">
                <h2 class="section-title">Bize Yazın</h2>

                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="POST" action="contact.php" id="contactForm">
                    <div class="form-group">
                        <label for="name">Adınız *</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-posta *</label>
                        <input type="email" id="email" name="email"
                            value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Konu</label>
                        <input type="text" id="subject" name="subject"
                            value="<?php echo htmlspecialchars($subject ?? ''); ?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Mesajınız *</label>
                        <textarea id="message" name="message"
                            required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Gönder</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>