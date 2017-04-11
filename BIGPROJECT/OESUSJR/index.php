<?php
set_include_path("includes");
  include "head.php";
 ?>

<div class="usjrlogo container">
<div class="logo-wrapper">
  <img src="images/usjrlogo.png" alt="logo">
  <h3 class="inline-block">USJR Online Enrollment System</h3>
</div>
</div>

<div class="login-register-content container">
    <nav>
      <ul>
        <li><a id="logIn" href="#">Log In</a></li>
        <li><a id="register" href="#">Register</a></li>
      </ul>
    </nav>

    <form class="login-form" action="" method="post">
      <input type="text" name="username" placeholder="Username*">
      <input type="text" name="password" placeholder="Password*">
      <input type="submit" name="submit" value="Log In" id="submit">
    </form>

    <form class="register-form zoomout" action="" method="post">
      <input type="text" name="firstname" placeholder="First Name*">
      <input type="text" name="lastname" placeholder="Last Name*">
      <input type="submit" name="submit" value="Sign Up" id="submit">
    </form>
</div>

<div class="container">
  <?php
    include "footer.php";
    ?>
</div>
