
<?php
session_start();
require_once '../config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['user'] = 'admin';
        header("Location: /index.php");
        exit();
    } else {
        $error = 'שם משתמש או סיסמה שגויים';
    }
}
?>

<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>התחברות</title>
</head>
<body>
    <form method="post">
        <h2>התחברות</h2>
        <?php if ($error): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>
        <label>שם משתמש:</label>
        <input type="text" name="username" required><br>
        <label>סיסמה:</label>
        <input type="password" name="password" required><br>
        <button type="submit">התחבר</button>
    </form>
</body>
</html>
