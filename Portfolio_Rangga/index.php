<?php
include 'config.php';

$projects = [];

$result = $conn->query("SELECT * FROM projects");

if ($result) {
  while($row = $result->fetch_assoc()) {
    $projects[] = $row;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head> <link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <div class="container-fluid">
  <div class="row">
    
    <!-- SIDEBAR -->
    <div class="col-md-3 bg-dark text-white vh-100 p-3">
      <h4>MyPortfolio</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">About Me</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
      </ul>
    </div>

    <!-- CONTENT -->
    <div class="col-md-9 p-4">

      <!-- HERO -->
      <div class="bg-primary text-white p-4 rounded mb-4">
        <h2>Selamat Datang di Portfolio Saya</h2>
        <p>Saya adalah Mahasiswa Sistem Informasi</p>
      </div>

      <!-- PROFILE CARD -->
      <div class="card p-3 mb-4">
        <div class="row">
          <div class="col-md-3 text-center">
            <img src="assets/img/profile.jpg." class="profile" alt="profile">
          </div>
          <div class="col-md-9">
            <h4>Rangga Ibnu Hafidz</h4>
            <p>Email: ibnuhafidzrangga@gmail.com
            <p>Phone: 087882517199
            <p>Instagram: @rangeronly_
            </p>
            <p>Mahasiswa Sistem Informasi</p>
          </div>
        </div>
      </div>

      <!-- PROJECTS -->
      <h3>Projects</h3>
      <div class="row">
        <?php foreach($projects as $p): ?>
          <div class="col-md-4">
            <div class="card p-3 mb-3">
              <h5><?= $p['title']; ?></h5>
              <p><?= $p['description']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>
</body>
</html>