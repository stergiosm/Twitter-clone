<?php 
$pageTitle = "Welcome to Mwitter - Login or Sign up";


include './views/inc/header.php'; 

?>
<div class="container-fluid">
<div class="row top-buffer">
  <?php if ($_SESSION['status'] == 'logged_in') { ?>

      <div class="col-sm-4 col-sm-push-2">
        <h2>Welcome to Mwitter.</h2></br>
        <p>Connect with your friends — and other fascinating people.
         Get in-the-moment updates on the things that interest you.
          And watch events unfold, in real time, from every angle.</p>
      </div>
         <?php }  else { ?>
    <div class="col-sm-4 col-sm-push-2">
        <h2>Welcome to Mwitter.</h2></br>
        <p>Connect with your friends — and other fascinating people.
         Get in-the-moment updates on the things that interest you.
          And watch events unfold, in real time, from every angle.</p>
      </div>
    <div class="col-sm-3 col-sm-push-3">

            <div id="forms">
                <div id="login-form">
                    <form action="/PHP_course/Mwitter/user/login" method="post" class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-sm-1">
                          <button type="submit" class="btn btn-primary" id="submit_login" name="login">Sign in</button>
                        </div>
                      </div>
                    </form>
                </div>

                <div id="register">
                  <span class="new_to">New to Μwitter? </span><span class="white">Sign Up</span>
                  <form action="./user/register" method="post" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                      </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-9 col-sm-push-4">
                          <button type="submit" class="btn btn-warning" id="submit_register" name="register">Sign Up for Mwitter</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
        </div>

    </div>
    <?php } ?>
</div>
</div>

   
<?php 
include './views/inc/footer.php'; 
?>