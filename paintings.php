<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Paintings - Online Painting Management System</title><link rel="stylesheet" href="style.css"></head><body>
<header class="site-header"><div class="container">
  <h1>Online Painting Management System</h1>
  <p>Explore, manage and organize beautiful paintings.</p>
  <nav class="nav"><a href="dashboard.php">Dashboard</a><a href="paintings.php" class="active">Paintings</a><a href="add_painting.php">Add Painting</a><a href="logout.php">Logout</a></nav>
</div></header>
<main><div class="container">
  <div class="page-title"><h2>Painting Collection</h2></div>
  <form class="search-bar" action="paintings.php" method="GET">
    <input type="text" name="search" placeholder="Search title, artist or category">
    <button type="submit" class="btn">Search</button>
    <a class="btn btn-outline" href="paintings.php">Show All</a>
  </form>

  <!-- PHP: put a while/foreach loop around one .painting card. Sample data below. -->
  <section class="grid">
    <article class="card painting">
      <!-- PHP: if image exists: <img src="uploads/<?php echo $row['image']; ?>" alt="Painting"> else show the .no-image div -->
      <div class="no-image">No image available</div>
      <h3>Sunset Valley</h3>
      <p><strong>Artist:</strong> Ayesha Rahman</p>
      <p><strong>Contact:</strong> ayesha@example.com</p>
      <p><strong>Category:</strong> Landscape</p>
      <p><strong>Price:</strong> $250.00</p>
      <p><strong>Status:</strong> <span class="badge available">Available</span></p>
      <div class="actions">
        <a class="btn btn-outline" href="view_painting.php?id=1">View</a>
        <a class="btn" href="edit_painting.php?id=1">Edit</a>
        <a class="btn btn-danger" href="delete_painting.php?id=1" onclick="return confirm('Delete this painting?')">Delete</a>
      </div>
    </article>
    <article class="card painting">
      <div class="no-image">No image available</div>
      <h3>Quiet Portrait</h3>
      <p><strong>Artist:</strong> Rafi Ahmed</p>
      <p><strong>Contact:</strong> 01700-000000</p>
      <p><strong>Category:</strong> Portrait</p>
      <p><strong>Price:</strong> $400.00</p>
      <p><strong>Status:</strong> <span class="badge sold">Sold</span></p>
      <div class="actions">
        <a class="btn btn-outline" href="view_painting.php?id=2">View</a>
        <a class="btn" href="edit_painting.php?id=2">Edit</a>
        <a class="btn btn-danger" href="delete_painting.php?id=2" onclick="return confirm('Delete this painting?')">Delete</a>
      </div>
    </article>
  </section>

  <!-- Optional table version for management -->
  <div class="table-wrap card">
    <table>
      <tr><th>Title</th><th>Artist</th><th>Contact Info</th><th>Category</th><th>Price</th><th>Status</th><th>Actions</th></tr>
      <tr><td>Sunset Valley</td><td>Ayesha Rahman</td><td>ayesha@example.com</td><td>Landscape</td><td>$250.00</td><td><span class="badge available">Available</span></td>
        <td><a href="edit_painting.php?id=1">Edit</a> | <a href="delete_painting.php?id=1" onclick="return confirm('Delete this painting?')">Delete</a></td></tr>
      <tr><td>Quiet Portrait</td><td>Rafi Ahmed</td><td>01700-000000</td><td>Portrait</td><td>$400.00</td><td><span class="badge sold">Sold</span></td>
        <td><a href="edit_painting.php?id=2">Edit</a> | <a href="delete_painting.php?id=2" onclick="return confirm('Delete this painting?')">Delete</a></td></tr>
    </table>
  </div>
</div></main>
<footer class="site-footer">Online Painting Management System</footer>
</body></html>
