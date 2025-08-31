<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/General.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    }
    .password-wrapper {
      position: relative;
    }
    .password-wrapper i {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: gray;
    }
  </style>
</head>
<body>
  <div id="header"></div>

  <!-- Login/Register Form -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4">
          <ul class="nav nav-tabs" id="authTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab">Register</a>
            </li>
          </ul>

          <div class="tab-content mt-3">
            <!-- Login Tab -->
            <div class="tab-pane fade show active" id="login" role="tabpanel">
              <form action="login.php" method="POST">
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3 password-wrapper">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="loginPassword" required>
                  <i class="fa fa-eye" id="toggleLoginPassword"></i>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
              </form>
            </div>

            <!-- Register Tab -->
            <div class="tab-pane fade" id="register" role="tabpanel">
              <form action="register.php" method="POST">
                <div class="mb-3">
                  <label>Full Name</label>
                  <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3 password-wrapper">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="registerPassword" required>
                  <i class="fa fa-eye" id="toggleRegisterPassword"></i>
                </div>
                <div class="mb-3 password-wrapper">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" id="registerConfirmPassword" required>
                  <i class="fa fa-eye" id="toggleRegisterConfirmPassword"></i>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <div id="footer"></div>
  <script src="./JS/Include.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function togglePassword(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      icon.addEventListener('click', () => {
        if (input.type === "password") {
          input.type = "text";
          icon.classList.remove("fa-eye");
          icon.classList.add("fa-eye-slash");
        } else {
          input.type = "password";
          icon.classList.remove("fa-eye-slash");
          icon.classList.add("fa-eye");
        }
      });
    }
    togglePassword("loginPassword", "toggleLoginPassword");
    togglePassword("registerPassword", "toggleRegisterPassword");
    togglePassword("registerConfirmPassword", "toggleRegisterConfirmPassword");
  </script>
</body>
</html>
