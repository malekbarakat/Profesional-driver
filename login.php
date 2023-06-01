
<?php include("login_action.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <!-- this for remember me check-->

    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Sign In</title>

    <script>
    function showError(message) {
      alert(message);
    }
    </script>

  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="images/undraw_remotely_2j6y.jpg"
              alt="Image"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 contents all">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3 class="si">تسجيل الدخول</h3>
                  <p class="mb-4">
                  ادخل بريدك الإلكتروني وكلمة المرور أو أنشئ حسابًا جديدًا
                  </p>
                </div>
                <form action="login.php" method="POST">
                  <div class="form-group first">
                    <input
                      type="text"
                      name="email"
                      class="form-control"
                      id="email"
                      placeholder="البريد الإلكتروني"
                      required
                    />
                  </div>
                  <div class="form-group last mb-4">
                    <input
                      type="password"
                      name="password"

                      class="form-control"
                      id="password"
                      placeholder="كلمة المرور"
                      minlength="8"
                      maxlength="32"
                      required
                    />
                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"
                      ><span class="caption">تذكرني</span>
                      <input type="checkbox" checked="checked" />
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"
                      ><a href="#" class="forgot-pass">نسيت كلمة المرور</a></span
                    >
                  </div>
                  <span >
                  <?php 
                  if (!empty($logerr)) {
                  echo '<script>showError("' . $logerr . '");</script>';
                  }
                  ?>
                  </span>

                  <input
                    type="submit"
                    value="تسجيل الدخول"
                    class="btn btn-block btn-primary"
                  />

                  <span class="d-block text-left my-4 text-muted" style="font-weight: bold"
                    >:تسجيل الدخول عبر
                    <a href="signup.php" class="sign_up" style="color: black">إنشاء حساب </a>
                  </span>

                  <div class="social-login">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span>
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span>
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span>
                    </a>
                  </div>
                </form>
                    <a href="admin/admin_index.php"class="sign_up" style="font-weight:500">Admin</a><br>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
