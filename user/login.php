<?php
include "navbar_login.php";
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
</head>

<body style="background: white;">
  <div class="d-flex flex-column justify-content-center" style="height: 90vh; background: white">
    <div class="row" style="background: white;">
      <div class="form-section mx-auto test">
        <form action="proses_login.php" class="rounded" style="box-shadow: 4px 4px 5px -4px;padding:10px;" method="post">
          <h3 align="center" class="pb-2">LOGIN pelanggan Toko Online</h3>
          email:
          <input type="text" name="email" value="" class="form-control">
          password:
          <input type="password" name="password" class="form-control"><br>
          <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
        </form>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<style lang="css">
  @media (min-width: 576px) {
    .test {
      width: 100%;
    }
  }

  @media (min-width:768px) {
    .test {
      width: 75%;
    }
  }

  @media (min-width: 992px) {
    .test {
      width: 50%;
    }
  }

  @media (min-width: 1200px) {
    .test {
      width: 35%;
    }
  }
</style>