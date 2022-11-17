<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Register</title>

    {{ \Auth::id() ?? 'not signed in' }}
  
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
            <form method="POST" action='/register' id="signup-form" class="signup-form">
                @csrf
              <h2 class="form-title">Create account</h2>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="name"
                  id="name"
                  placeholder="Your Name"
                  value="{{ old('name') }}"
                />
              </div>
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
                  type="string"
                  class="form-input"
                  name="number"
                  id="number"
                  placeholder="Phone Number"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="password"
                  id="password"
                  placeholder="Password"
                  value=""
                />
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye field-icon toggle-password"
                ></span>
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="form-input"
                  name="password_confirmation"
                  id="password_confirmation"
                  placeholder="Repeat your password"
                  value=""
                />
              </div>
              <div class="form-group">
                <input
                  type="checkbox"
                  name="agree-term"
                  id="agree-term"
                  class="agree-term"
                />
                <label for="agree-term" class="label-agree-term"
                  ><span><span></span></span>I agree all statements in
                  <a href="#" class="term-service">Terms of service</a></label
                >
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="Sign up"
                />
              </div>
            </form>
            <p class="loginhere">
              Have already an account ?
              <a href="/login" class="loginhere-link">Login here</a>
            </p>
          </div>
        </div>
      </section>
    </div>
  
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    @vite("resources/js/register.js")
  
  </body>
  
  </html>
