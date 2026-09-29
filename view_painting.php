<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Painting Details - Online Painting Management System</title><link rel="stylesheet" href="style.css"></head><body>
<header class="site-header"><div class="container">
  <h1>Online Painting Management System</h1>
  <p>Explore, manage and organize beautiful paintings.</p>
  <nav class="nav"><a href="dashboard.php">Dashboard</a><a href="paintings.php" class="active">Paintings</a><a href="add_painting.php">Add Painting</a><a href="logout.php">Logout</a></nav>
</div></header>
<main><div class="container">
  <div class="card details">
    <!-- PHP: <img src="uploads/<?php echo $row['image']; ?>" alt="Painting"> -->
    <div class="no-image" style="min-height:260px">No image available</div>
    <div>
      <h2>Sunset Valley</h2>
      <p><strong>Title:</strong> Sunset Valley</p>
      <p><strong>Artist:</strong> Ayesha Rahman</p>
      <p><strong>Contact Info:</strong> ayesha@example.com</p>
      <p><strong>Category:</strong> Landscape</p>
      <p><strong>Price:</strong> $250.00</p>
      <p><strong>Status:</strong> <span class="badge available">Available</span></p>
      <div class="actions">
        <a class="btn" href="edit_painting.php?id=1">Edit</a>
        <a class="btn btn-danger" href="delete_painting.php?id=1" onclick="return confirm('Delete this painting?')">Delete</a>
        <a class="btn btn-outline" href="paintings.php">Back to Paintings</a>
      </div>
    </div>
  </div>
</div></main>
<footer class="site-footer">Online Painting Management System</footer>
</body></html>
