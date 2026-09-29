<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - Online Painting Management System</title><link rel="stylesheet" href="style.css"></head><body>
<header class="site-header"><div class="container">
  <h1>Online Painting Management System</h1>
  <p>Explore, manage and organize beautiful paintings.</p>
  <nav class="nav"><a href="index.php">Home</a><a href="register.php">Register</a><a href="login.php" class="active">Login</a></nav>
</div></header>
<main><div class="container">
  <div class="card form-card">
    <h2>Login to Your Account</h2>
    <form action="login.php" method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" class="btn btn-block">Login</button>
    </form>
    <p class="form-note">Don't have an account? <a href="register.php">Register</a></p>
  </div>
</div></main>
<footer class="site-footer">Online Painting Management System</footer>
</body></html>
