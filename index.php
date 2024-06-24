<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        button {
        border-radius: 13px;
        }
        h1 {
        font-family: "palatino linotype", palatino, serif;
        color: azure;
      }
      label{
        color: azure;
      }
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(100deg, #000915, #003465);
        }
        .top_pannel{
            display: flex;
            flex-direction: row;
        }
        .btns{
            margin: 10px;
            padding: 5px;           
            margin-top: -50px;
            font-family: "palatino linotype";
            border:none;
            margin-left: -40px;
        }
        .btn-login{
            margin-right: 20px;
        }
        .logo{
            width: 75px;
            height: 75px;
        }
        .card{
            height: 250px;
            width: 250px;
        }
    </style>
    <title>Document</title>
</head>
<body class="body">
    <!--|nav Bar|-->
    <div class="column">
        <div class="row">
            <a href="#"><img src="src/Logo.png" class="logo"></a>
        </div>
        <div class="row">
            <div class="d-flex justify-content-end btns">
                <a href="signIn.php"><button class="btn-login">LogIn</button></a>
                <a href="signUp.php"><button >SignUp</button></a>             
            </div>
        </div>
    </div>
        <!--|Movie List|-->
    <div class="container">
        <h1>Movies</h1>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="src/img1.png" alt="Film 1">
                    <div class="card-body">
                        <h4 class="card-title">Film-1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
