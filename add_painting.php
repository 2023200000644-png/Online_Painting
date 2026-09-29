<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Painting - Online Painting Management System</title><link rel="stylesheet" href="style.css"></head><body>
<header class="site-header"><div class="container">
  <h1>Online Painting Management System</h1>
  <p>Explore, manage and organize beautiful paintings.</p>
  <nav class="nav"><a href="dashboard.php">Dashboard</a><a href="paintings.php">Paintings</a><a href="add_painting.php" class="active">Add Painting</a><a href="logout.php">Logout</a></nav>
</div></header>
<main><div class="container">
  <div class="card form-card form-wide">
    <div class="page-title"><h2>Add New Painting</h2><p>Add a new painting to the collection.</p></div>
    <form action="add_painting.php" method="POST" enctype="multipart/form-data">
      <label for="title">Painting Title</label>
      <input type="text" id="title" name="title" required>
      <label for="artist">Artist</label>
      <input type="text" id="artist" name="artist" required>
      <label for="contact_info">Contact Info</label>
      <input type="text" id="contact_info" name="contact_info" placeholder="Email or phone number" required>
      <label for="category">Category</label>
      <select id="category" name="category"><option>Landscape</option><option>Portrait</option><option>Abstract</option><option>Nature</option><option>Modern Art</option><option>Traditional Art</option></select>
      <label for="price">Price</label>
      <input type="number" id="price" name="price" min="0" step="0.01" required>
      <label for="image">Painting Image</label>
      <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png,image/jpeg,image/png">
      <label for="status">Status</label>
      <select id="status" name="status"><option>Available</option><option>Sold</option></select>
      <button type="submit" class="btn btn-block">Add Painting</button>
    </form>
  </div>
</div></main>
<footer class="site-footer">Online Painting Management System</footer>
</body></html>
