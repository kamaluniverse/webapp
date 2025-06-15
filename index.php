<?php
    if(isset($_POST['email']) and isset($_POST['pass'])){
        if($_POST['email'] == "shadow@shadow.com" and $_POST['pass'] == "shadow"){
                    $flage = 1;
        }else{
                    $flage = 0;
        }
    }else{
        $flage = -1;
    }


?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sign-in page">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
    }
    </style>
</head>

<body class="text-center">
    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form action="index.php" method="post">
                <?php 
                if($flage == 1){
                    ?>
                <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>
                <?php } elseif($flage  != -1){ ?>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>
                <?php } ?>




                <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg"
                    alt="Bootstrap Logo" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please Log in</h1>

                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input name='pass' type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">log in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
            </form>
        </main>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>