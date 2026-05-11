<?php
// login.php
include 'config.php'; // config.php starts session and provides $pdo

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $error = "Please enter email and password.";
    } else {
        $stmt = $pdo->prepare("SELECT id, username, email, password FROM users WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            header("Location: welcome.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="max-width:420px; margin-top:40px;">
  <h4>Login</h4>

  <?php if ($error): ?>
    <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
  <?php endif; ?>

  <form method="post" action="login.php" autocomplete="off">
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required value="<?php echo isset($email)?htmlspecialchars($email):''; ?>">
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button class="btn btn-primary w-100" type="submit">Login</button>
    <div class="mt-2 text-center">
      <a href="register.php">Create an account</a>
    </div>
  </form>
</div>
</body>
</html>