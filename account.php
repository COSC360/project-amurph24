<?php
include_once 'header.php';
?>

        <main>
          <div class="container-fluid">
            <div class="row top-buffer">
              <div class="col-9 rounded bg-beige1">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Account_username</li>
                      </ol>
                  </nav>
              </div>
              <div class="col-3">
                <div class="input-group">
                  <input type="search" class="form-control rounded-left" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <button type="button" class="btn bg-blue text-black">search</button>
                </div>
              </div>
            </div>
          </div>

        <div class="container-fluid top-buffer">
          <div class="row bg-beige3 p-4">
            <div class="col-2">
              <img src="images/profile.png" class="img-responsive img-thumbnail">
            </div>
            <div class="col-10">
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-beige3"><b>Username: </b> Account_Username</li>
                <li class="list-group-item bg-beige3"><b>Favourite surfing style: </b> Account_sStyle</li>
                <li class="list-group-item bg-beige3"><b>Favourite surf spot: </b> Account_sSpot</li>
                <li class="list-group-item bg-beige3"><b>Best break in the world:</b> Account_Break</li>
                <li class="list-group-item bg-beige3"><b>Account status:</b> Enabled</li>
              </ul>
            </div>
            <!-- user start -->
            <div class="col-2">
              <div class="d-grid col-12">
                <button type="submit" class="btn bg-blue" data-bs-toggle="modal" data-bs-target="#changePPic">change profile pic</button>
              </div>
            </div>


          </div>
          <div class="row bg-beige3 p-4">
            <div class="d-grid col">
              <form action="https://en.wikipedia.org/wiki/Hippopotamus" class="text-center d-grid col-12">
                <button type="submit" class="btn bg-blue">reset password</button>
              </form>
            </div>
            <div class="d-grid col">
              <button class="btn bg-blue" data-bs-toggle="modal" data-bs-target="#changeProfile">edit profile</button>
            </div>
            <div class="d-grid col">
              <button class="btn bg-blue">delete user</button>
            </div>
          </div>
          <!-- user end -->
          <!-- admin start -->
          <div class="row bg-beige3 p-4">
            <div class="d-grid col">
              <button class="btn bg-blue">disable account</button>
            </div>
          </div>
          <!-- admin end -->
        </div>

        <!-- change ppic -->
        <div class="modal fade" id="changePPic" tabindex="-1" aria-labelledby="profilepic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="changePPicHeading">Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Upload picture here
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- edit profile info -->
        <div class="modal fade" id="changeProfile" tabindex="-1" aria-labelledby="profile" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="get" action="http://www.randyconnolly.com/tests/process.php">
              <div class="modal-header">
                <h5 class="modal-title" id="changeProfileHeading">Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Favourite surfing style: </b>
                    <input type="text" name="sStyle" class="form-control required" id="InputSStyle" value="Account_sStyle">
                  </li>
                  <li class="list-group-item"><b>Favourite surf spot: </b>
                    <input type="text" name="sSpot" class="form-control required" id="InputSSpot" value="Account_sSpot">
                  </li>
                  <li class="list-group-item"><b>Best break in the world:</b>
                    <input type="text" name="Break" class="form-control required" id="InputBreak" value="Account_Break">
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </form>
          </div>
        </div>

        </main>

        <?php
include_once 'footer.php';
?>