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

        <div style="margin-left:180px;">
        <h2>Welcome Back</h2>
        </div>

        <div style="margin-left:180px;">
        <label for="InputUsername" class="form-label"></label>
        <input type="text" name="username" class="form-control w-100" id="InputUsername"  placeholder="Username..." required>
        </div>


        <div style="margin-left:180px;">
        <label for="InputPassword" class="form-label"></label>
        <input type="text" name="password" class="form-control w-100" id="InputPassword1" placeholder="Your password..." required>
        </div>

        <div style="margin-top:30px; margin-left:180px; width:200px;">
        <button type="submit" class="btn btn-primary w-100" style="background-color: #34365B;">Login</button>
        </div>
</form>
        <div>
        <img style="width:960px; height:657px;" src="img/back.png">
        <div style="margin-top:-115px; color:white; text-align:right; margin-right:90px;">
            <h4>SIM PKL</h4>
            <p>Dapatkan <b> informasi </b> serta</p>
            <p style="margin-top:-14px;">keperluan <b> magangmu </b> disini !</p> 
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
