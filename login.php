<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Bootstrap Login Form</title>
  </head>
  <body>

    <style>
      input[type="email"] {
        border-bottom-left-radius: 0px;;
        border-bottom-right-radius: 0px;;
      }
      input[type="password"] {
        border-top-left-radius: 0px;;
        border-top-right-radius: 0px;;
        border-top:0px;
      }
    </style>

    <div class="text-center mt-5">
        <form style="max-width:330px;margin:auto;">
            <img class="mt-4 mb-4" src="images/sp-logo.png" height="100" 
            alt="Bootstrap Logo">
            <h1 class="h3 mb-3 
            font-weight-normal">Please Sign In</h1>
            <input type="email" id="emailAddress"
            class="form-control" placeholder="Email Address" required autofocus>
            <input type="password" id="password"
            placeholder="Password" class="form-control">
            <div class="checkbox mt-3">
                <label>
                    <input type="checkbox"
                    value="remember-me">Remember me
                </label>
            </div>
            <div class="mt-3">
                <button class="btn btn-lg btn-primary
                btn-block">Sign In</button>
            </div>
        </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
