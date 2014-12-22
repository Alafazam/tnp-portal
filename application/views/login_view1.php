    <div class="container">
      <link href="/css/signin.css" rel="stylesheet">
      <form class="form-signin" role="form" action="/login/verify" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password"  name="password" id="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" name="remember" id="remember" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="clearfix">
          <a href="/login/password" class="forgot">
            Forgot Password?
          </a>
        </p>
      </form>

      </div> <!-- /container -->