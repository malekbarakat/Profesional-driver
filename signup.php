<?php 
include("signup_action.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Create account</title>
    <style>
    .error {
      color: red;
    }
  </style>
    <link rel="stylesheet" href="styleP.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    
    <script>
    function showError(message) {
      alert(message);
    }
    </script>
    
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>إنشاء حساب جديد</h2>

        </div>
        <div class="row clearfix">
          <div class="">
            <form aciton="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="input_field">
                <!-- <span><i aria-hidden="true" class="fa fa-envelope"></i></span> -->
                <input type="email" name="email"value="<?php echo $email;?>" placeholder="البريد الالكتروني" required />
                <span class="error"><i aria-hidden="true" class="fa fa-envelope"></i><?php if (!empty($emailErr)) {
                  echo '<script>showError("' . $emailErr . '");</script>';
                  }?></span>
              </div>
              <div class="input_field">
                <!-- <span><i aria-hidden="true" class="fa fa-lock"></i></span> -->
                <span class="error"><i aria-hidden="true" class="fa fa-lock"></i><?php if (!empty($passwordErr)) {
                  echo '<script>showError("' . $passwordErr . '");</script>';
                  }?></span>

                <input
                  type="password"
                  name="password"
                  placeholder="كلمة المرور"
                  required
                  minlength="8"
                  maxlength="32"
                />
              </div>
              <!-- <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input
                  type="password"
                  name="password"
                  placeholder="Re-type Password"
                  required
                  minlength="8"
                  maxlength="32"
                />
              </div> -->
              <div class="row clearfix">
                <div class="col_half">
                  <div class="input_field">
                    <!-- <span><i aria-hidden="true" class="fa fa-user"></i></span> -->
                    <span class="error"><i aria-hidden="true" class="fa fa-user"></i><?php if (!empty($firstNameErr)) {
                  echo '<script>showError("' . $firstNameErr . '");</script>';
                  }?></span>

                    <input
                      type="text"
                      name="firstname"
                      placeholder="الاسم الاول"
                      value="<?php echo $firstName;?>"
                      required
                    />
                  </div>
                </div>
                <div class="col_half">
                  <div class="input_field">
                    <!-- <span><i aria-hidden="true" class="fa fa-user"></i></span> -->
                    <span class="error"><i aria-hidden="true" class="fa fa-user"></i><?php if (!empty($lastNameErr)) {
                  echo '<script>showError("' . $lastNameErr . '");</script>';
                  }?></span>

                    <input
                      type="text"
                      name="lastname"
                      placeholder="الاسم الاخير"
                      value="<?php echo $lastName;?>"
                      required
                    />
                  </div>
                </div>
              </div>
              <input class="button" type="submit" value="تسجيل" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://use.fontawesome.com/4ecc3dbb0b.js"></script>
  </body>
</html>
