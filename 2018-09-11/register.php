<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        if(!isset($_SESSION['user_id'])||!isset($_SESSION['user_name'])){
    ?>
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a>
            <a class="btn btn-danger btn-lg" href="register.php" role="button">Register</a>
            </br>
            </br>
            
            <form action="register_ok.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" name="user_id" class="form-control" aria-describedby="emailHelp" required placeholder="Enter ID">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="user_pw" class="form-control" required placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="user_name" class="form-control" required placeholder="Name">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    <?php
        }else{
            // alert 이미 회원가입되어 있습니다. => index.php 로 이동
            echo "<script>alert('$_SESSION[user_name] 님은 이미 로그인 되어있습니다.');</script>";
            echo "<script>location.replace('index.php');</script>";
        }
    ?>
</body>
</html>