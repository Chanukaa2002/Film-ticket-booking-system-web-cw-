<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link Style.css-->
    <link rel="stylesheet" href="style.css">
    
    <!--Boostrap CDN-->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" > </script>


    <title>Sign Up</title>
</head>
<body class="body">
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-8 col-lg-7 col-xl-6">
        <img id="genarateImg"
          class="img-fluid " src="src/register.png" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <h1 class="text-center">Sign Up</h1>
          <!-- email input -->
          <div data-mdb-input-init class="form-outline mb-4 email">
            <img src="src/email.png" alt="user" class="emailImg">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"/>
          </div>
          
          <!-- name input -->
          <div data-mdb-input-init class="form-outline mb-4 name">
            <img src="src/id-card.png" alt="user" class="nameImg">
            <input type="text" name="name" class="form-control form-control-lg" placeholder="Name"/>
          </div>

          <!-- userName input -->
          <div data-mdb-input-init class="form-outline mb-4 userName">
            <img src="src/user.png" alt="user" class="userImg">
            <input type="text" name="userName" class="form-control form-control-lg" placeholder="UserName"/>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4 password">
          <img src="src/padlock.png" alt="pw" class="pwImg">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <div class="forget-create">
                <div class="col " id="other">
                    <div class="row"> <label>Have Account?<a href="signIn.php" class="create"> Sign In</a></label> </div>
                </div>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block btn-signIn-signUp">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>