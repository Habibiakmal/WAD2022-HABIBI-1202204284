<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-center">
      <ul class="navbar-nav">
        <li class=" nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <br>
    <h4 align="center">WELCOME TO EAD RENT</h4>
    <br>
    <p align="center">Find your best deal, here!</p>
    <br>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="innova.png" alt="">
          <div class="card-body">
            <h5 class="card-title">Toyota Innova</h5>
            <p class="card-text">Rp. 230.000 / Day</p>
            <ul class="list-group list-group-flush" style="text-align :center;">
              <li class="list-group-item text-primary">8 Kursi</li>
              <li class="list-group-item text-primary">1500 CC</li>
              <li class="list-group-item text-primary">Manual</li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <form action="booking.php" method="post">
              <button class="btn btn-primary" name="img" type="submit" value="rush.png">Booking Now</button>
          </form>
        </div>
      </div>
    </div>
      

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="brio.webp" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Honda Brio</h5>
              <p class="card-text">Rp. 150.000 / Day</p>
             <ul class="list-group list-group-flush" style="text-align :center;">
              <li class="list-group-item text-primary">5 Kursi</li>
              <li class="list-group-item text-primary">1200 CC</li>
              <li class="list-group-item text-primary">Manual</li>
            </ul>
            </div>
            <div class="card-footer d-flex justify-content-center">
              <form action="booking.php" method="post">
                <button class="btn btn-primary" name="img" type="submit" value="ayla.png">Booking Now</button>
              </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="jazz.webp" class="card-img-top" alt="" style="width: 215px;">
        <div class="card-body">
          <h5 class="card-title">Honda Jazz</h5>
          <p class="card-text">Rp. 180.000 / day</p>
          <ul class="list-group list-group-flush" style="text-align :center;">
            <li class="list-group-item text-primary">5 Kursi</li>
            <li class="list-group-item text-primary">1500 CC</li>
            <li class="list-group-item text-primary">Automatic</li>
          </ul>
        </div>
  
          <div class="card-footer d-flex justify-content-center">
            <form action="booking.php" method="post">
              <button class="btn btn-primary"name="img"value="brio.jpeg">Booking Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>

  </div>
  <footer align="center" class="bg-light p-2">
    <p>Muhammad Habibi Akmal_1202204284</p>
  </footer>
</body>

</html>