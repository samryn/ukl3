<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css"/>
    </head>
    <body>
      <div class="login-page">
        <div class="form">
          <h1>Laundry</h1>
          <form class="login-form" method="POST" action="proses_login.php">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password"  placeholder="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
          </form>
        </div>
      </div>
    </body>
</html>