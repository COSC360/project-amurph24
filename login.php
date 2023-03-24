<!DOCTYPE html>
<html>
  <head>
    <!-- bootstrap 5.2 styles -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
      <header>
            <div class="container-fluid bg-blue">
              <div class="row d-flex">
              
                  <div class="col-2">
                    <img src="images/logo.png" class="rounded float-start img-fluid" alt="logo">
                  </div>

                  <div class="col-6 d-flex align-items-center justify-content-center offset-1">
                    <h1 class="display-4"><a class="nav-link" href="home.php">Surf - Forum</a></h1>
                  </div>

                  <div class="col-2 d-flex align-items-end justify-content-end">
                    <nav class="nav">
                      <a class="nav-link text-black" href="signup.php">Signup</a>
                      <a class="nav-link text-black" href="login.php">Login</a>
                      <a class="nav-link text-black" href="admin.php">Admin</a>
                    </nav>

                </div>
              </div>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                <div class="top-buffer col-12 rounded bg-beige1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                          <li class="breadcrumb-item active">Login</li>
                        </ol>
                      </nav>
                </div>
              </div>
          </div>
          <div class="container">
            <div class="row bg-beige3 rounded top-buffer d-flex">
                    <div class="col-6 offset-3 top-buffer bottom-buffer">
                        <form method="get" id="signupForm" action="account.php">
                            <div class="mb-3">
                              <label for="InputUser" class="form-label">Username</label>
                              <input type="text" name="user" class="form-control required" id="InputUser">
                            </div>
                            <div class="mb-5">
                              <label for="pass1" class="form-label">Password</label>
                              <input type="password" user="pass" class="form-control required" id="pass1">
                            </div>
                            <div class="mb-5 text-center d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn bg-blue">Submit</button>
                              <a href="https://en.wikipedia.org/wiki/Hippopotamus">I (grom) forgot my password</a>
                            </div>
                          </form>
                    </div>
            </div>
          </div>
            
        </main>

        <footer>
          <!-- empty so far -->
        </footer>
        <!-- bootstrap js stuff -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="scripts/login.js"></script>
    </body>
</html>