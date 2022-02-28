<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>SIM PKL</title>
  </head>
  <body>

  <!-- Form login -->

  <div class="d-flex">
    <form class=" w-50 d-flex flex-column justify-content-center align-items-center" action="{{ URL::to('/login') }}" method="POST">
        @csrf

        <div class="mb-13">
        <h2>Welcome Back</h2>
        </div>

        <div class="mb-13">
        <label for="InputUsername" class="form-label"></label>
        <input type="text" name="username" class="form-control w-100" id="InputUsername"  placeholder="Username..." required>
        </div>


        <div class="mb-3">
        <label for="InputPassword" class="form-label"></label>
        <input type="text" name="password" class="form-control w-100" id="InputPassword1" placeholder="Your password..." required>
        </div>

        <div>
        <button type="submit" class="btn btn-primary w-100" style="background-color: #34365B;">Login</button>
        </div>
    </form>
    <div class="w-50">
        <img style="width:960px; height:656px;" src="img/back.png">
        <div class="d-flex justify-content-end align-items-end flex-column text-white" style="margin-top:-10%; margin-right: 3%">
            <h3>SIM PKL</h3>
            <h6>Dapatkan informasi serta</h6>
            <h6>keperluan magangmu disini !</h6>
        </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
