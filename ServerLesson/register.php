<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  $post_data = $_POST;

  $username = $post_data['username'] ?? null;
  $password = $post_data['password_1'] ?? null;
  $confirmationPassword = $post_data['password_2'] ?? null;
  $phone = $post_data['phone'] ?? null;

  //     echo 'validate data';
  //     echo '<br>';

  $userNameHasError = !(is_string($username) && strlen($username) > 2);
  $passwordHasError = !($password == $confirmationPassword && strlen($password > 7));
  $phoneHasError = !(is_numeric($phone) && strlen($phone) == 12 && preg_match("/^[+]/", $phone));

      if(!($userNameHasError || $passwordHasError || $phoneHasError)){
          $connection = new PDO("mysql:host=localhost;dbname=register", 'root');
          echo "Data validated";
          return;
      }

      echo 'If validation fail';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration Form</title>
  <style>
  .error{
    color:red;
  }
</style>
</head>
<body>
  <form action="/register.php" method="POST">
    <section>
      <?php if($userNameHasError ?? false){?>
        <div class="error">
          <p> The entered username is not correct </p>
        </div>
      <?php }?>
      <label for="username">Your username: </label>
      <input type="text" name="username" value="<?php echo htmlentities($username ?? '') ;?>"/>
      <br/>
      <br/>
      <?php if($phoneHasError ?? false){?>
        <div class="error">
          <p> Your phone number has error </p>
        </div>
      <?php }?>
      <label for="phone">Telephone: </label>
      <input type="tel" name="phone" value="<?php echo htmlentities($phone ?? '') ;?>">
      <br/>
      <br/>
      <?php if($passwordHasError ?? false){?>
        <div class="error">
          <p> The entered password is not correct </p>
        </div>
      <?php }?>
      <label for=password_1>Your password: </label>
      <input type="password" name="password_1" value="<?php echo htmlentities($password ?? '')?>">
      <br/>
      <br/>

      <label for="password_2">Retype your password: </label>
      <input type="password" name="password_2" value="<?php echo htmlentities($confirmationPassword ?? '')?>">
    </section>
    <br/>
    <br/>
    <button type="submit">Submit</button>
  </form>
</body>

</html>
