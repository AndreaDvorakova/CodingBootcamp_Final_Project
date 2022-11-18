<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Register</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
  
    <!-- Main css -->
    <link rel="stylesheet" href="register.css" />
    @vite('resources/css/register.css')
  </head>
  <body>
    <div class="main">

      
      <section class="signup">
        <!-- <img src="images/login-form-background.jpg" alt=""> -->
        <div class="container">
          <div class="signup-content">
            <form method="POST" id="login-form" class="login-form" action="{{ route('login') }}">
                @csrf
              <h2 class="form-title">Create account</h2>
              <div class="form-group">
              <div class="form-group">
                <input
                  type="email"
                  class="form-input"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  value="{{ old('email') }}"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="password"
                  id="password"
                  placeholder="Password"
                />
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye field-icon toggle-password"
                ></span>
              </div>
            <!-- Once clicked "Login", want to stay on the same page -->
                <input
                  onClick="location.href='{{url('home')}}'"
                  type="submit"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="Login"
                />
              </div>
              <p class="registerhere">
                Don't Have An Acount?
                <a href="/register" class="registerhere-link">Register Here</a>
              </p>
            </form>
          </div>
        </div>
      </section>
    </div>
  
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    @vite("resources/js/register.js")
  
  </body>
  
  </html>
