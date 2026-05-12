<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container-fluid">
  <div class="row">
    
    <!-- SIDEBAR -->
    <?php include 'sidebar.php'; ?>

    <!-- CONTENT -->
    <div class="col-md-9 p-4">

      <h3>Contact Me</h3>

      <div class="card p-4">
        <form>
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control">
          </div>

          <div class="mb-3">
            <label>Pesan</label>
            <textarea class="form-control"></textarea>
          </div>

          <button class="btn btn-primary">Kirim</button>
        </form>
      </div>

    </div>
  </div>
</div>
</body>
</html>