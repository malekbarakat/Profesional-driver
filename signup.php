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
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Create New Account</h2>

        </div>
        <div class="row clearfix">
          <div class="">
            <form aciton="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="input_field">
                <!-- <span><i aria-hidden="true" class="fa fa-envelope"></i></span> -->
                <input type="email" name="email"value="<?php echo $email;?>" placeholder="Email" required />
                <span class="error"><i aria-hidden="true" class="fa fa-envelope"></i><?php echo $emailErr;?></span>
              </div>
              <div class="input_field">
                <!-- <span><i aria-hidden="true" class="fa fa-lock"></i></span> -->
                <span class="error"><i aria-hidden="true" class="fa fa-lock"></i><?php echo $passwordErr;?></span>

                <input
                  type="password"
                  name="password"
                  placeholder="Password"
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
                    <span class="error"><i aria-hidden="true" class="fa fa-user"></i><?php echo $firstNameErr;?></span>

                    <input
                      type="text"
                      name="firstname"
                      placeholder="First Name"
                      value="<?php echo $firstName;?>"
                      required
                    />
                  </div>
                </div>
                <div class="col_half">
                  <div class="input_field">
                    <!-- <span><i aria-hidden="true" class="fa fa-user"></i></span> -->
                    <span class="error"><i aria-hidden="true" class="fa fa-user"></i><?php echo $lastNameErr;?></span>

                    <input
                      type="text"
                      name="lastname"
                      placeholder="Last Name"
                      value="<?php echo $lastName;?>"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="input_field checkbox_option">
                <input type="checkbox" id="cb1" />
                <label for="cb1">I agree with terms and conditions</label>
              </div>
              <input class="button" type="submit" value="Register" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://use.fontawesome.com/4ecc3dbb0b.js"></script>
  </body>
</html>
