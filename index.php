<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>
            <form action="Loginproces.php" method="post">
    <div class="form-outline mb-4">
        <input  id="typeEmailX-2" name="correo" class="form-control form-control-lg" required />
        <label class="form-label" for="typeEmailX-2">User</label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" id="typePasswordX-2" name="contrasena" class="form-control form-control-lg" required />
        <label class="form-label" for="typePasswordX-2">Password</label>
    </div>

    <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar</button>
</form>
            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
