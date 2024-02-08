<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/homepage/homestyle.css" />
    <title>Hospital Management System - Change Profile</title>
  </head>
  <body>
    <div class="nav">
      <h1 class="logo">HMS</h1>
      <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="update.php">Change Profile</a>
        <a href="support.php">Support</a>
        <a href="logout.php"
          ><img
            src="ressources/icons/logout.png"
            alt="logout"
            class="logout-icon"
        /></a>
      </div>
    </div>
    <div class="container">
      <div class="box">
        <h1 class="login-form__title">Update your profile</h1>
        <form action="" method="post">
          <label for="username">Username:</label>
          <input
            type="text"
            id="username"
            name="username"
            class="login-form__input"
            autocomplete="off"
            required
          />
          <br />
          <label for="password" class="password">Password:</label>
          <input
            type="password"
            id="password"
            name="password"
            class="login-form__input"
            autocomplete="off"
            required
          />
          <br />
          <label for="mail" class="mail">Email:</label>
          <input
            type="text"
            id="mail"
            name="mail"
            class="login-form__mail"
            autocomplete="off"
          />
          <br />
          <label for="mail" class="mail">Age :</label>
          <input
            type="number"
            id="age"
            name="age"
            class="login-form__age"
            autocomplete="off"
            required
          />
          <br />
          <input
            type="submit"
            value="Update"
            name="submit"
            class="login-form_submit"
          />
        </form>
      </div>
      <footer>
        <p>
          Copyright &copy; 2024 <b>Hospital Management System</b>. All rights
          reserved.
        </p>
      </footer>
    </div>
  </body>
</html>
