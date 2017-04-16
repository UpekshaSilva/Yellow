<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yellow Enterprices! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="loginF.php" class="form-horizontal" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button id="send" type="submit" class="btn btn-success">Login</button>
                <!--<a class="btn btn-default submit" href="loginF.php">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>-->
              </div>
            </form>

            <form>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Change Password </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Yellow Enterprices!</h1>
                  <p>©2016 All Rights Reserved. Yellow Enterprices! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Change Password</h1>
              <div>
                <input type="text" class="form-control" placeholder="New Password" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Re-Enter New Password" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Current Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">No changes?
                  <a href="loginF" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Excel Cinema!</h1>
                  <p>©2016 All Rights Reserved. Excel Cinema! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
