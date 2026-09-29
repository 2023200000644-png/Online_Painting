<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard - Online Painting Management System</title><link rel="stylesheet" href="style.css"></head><body>
<header class="site-header"><div class="container">
  <h1>Painting Management Dashboard</h1>
  <p>Explore, manage and organize beautiful paintings.</p>
  <nav class="nav"><a href="dashboard.php" class="active">Dashboard</a><a href="paintings.php">Paintings</a><a href="add_painting.php">Add Painting</a><a href="logout.php">Logout</a></nav>
</div></header>
<main><div class="container">
  <!-- PHP: replace the numbers with COUNT(*) results from MySQL -->
  <section class="grid">
    <div class="card stat"><strong>0</strong>Total Paintings</div>
    <div class="card stat"><strong>0</strong>Available Paintings</div>
    <div class="card stat"><strong>0</strong>Sold Paintings</div>
  </section>
  <section class="card" style="margin-top:24px">
    <h2>Welcome to the Painting Management System</h2>
    <p>Manage your painting collection easily from this dashboard.</p>
    <div class="actions"><a class="btn" href="paintings.php">View Paintings</a><a class="btn btn-outline" href="add_painting.php">Add Painting</a></div>
  </section>
</div></main>
<footer class="site-footer">Online Painting Management System</footer>
</body></html>
