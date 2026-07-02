<?php
session_start();
require 'db_config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $stmt = $conn->prepare("SELECT id, password_hash FROM admins WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password_hash'])) {
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_username'] = $username;
                header("Location: admin_dashboard.php");
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
        $stmt->close();
    } else {
        $error = "Please enter both username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login - Rukoko Smart Solutions</title>
<style>
  body { font-family: Arial, sans-serif; background: #f4f6f5; display: flex; height: 100vh; align-items: center; justify-content: center; margin: 0; }
  .login-box { background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 320px; }
  h2 { margin-top: 0; color: #1e3d2f; }
  input { width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
  button { width: 100%; padding: 10px; background: #1e3d2f; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
  button:hover { background: #16302a; }
  .error { color: #c0392b; margin-bottom: 10px; }
</style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <?php if ($error): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="POST">
      <label>Username</label>
      <input type="text" name="username" required>
      <label>Password</label>
      <input type="password" name="password" required>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>
